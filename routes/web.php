<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Social Authentication Routes
Route::get('/auth/{provider}','Auth\RegisterController@redirectToProvider');

Route::get('/auth/{provider}/callback','Auth\RegisterController@handleProviderCallback');

Route::get('/newSocialUser', function () {
    return view('finalsocial');
})  -> name('finalsocial');


//Home Page, Login and Registration routes
Route::get('/','HomeController@index') -> name('homepage');
Route::get('/registration', 'HomeController@register') -> name('registration');
Route::get('/about', function () {
    return view('homepage.about');
}); 
Route::get('/faqs', function () {   
    return view('homepage.faqs');
});
Route::get('/privacypolicy',function(){
    return view('homepage.privacypolicy');
});
Route::get('/termsofservice',function(){
    return view('homepage.termsofservice');
});

Auth::routes();

Route::get('/login',function(){
    return view('auth.login');
})->name('login')->middleware('guest');


//Controllers for forums


Route::get('/forumtopics', 'Forum\ForumTopicController@show');
Route::get('/createforumtopic', 'Forum\ForumTopicController@create');
Route::post('/createforumtopic', 'Forum\ForumTopicController@save');
Route::get('/forumtopics/title/{id}/{topic}', 'Forum\ForumTopicController@topic');
Route::post('/forumtopics/{id}/comment','Forum\ForumCommentController@create')->name('addcomment');
Route::get('forumtopics/{category}', 'Forum\ForumTopicController@category');



//Controllers for User 

Route::prefix('/user') -> group(function(){
    Route::get('/home', 'Auth\TalentController@home');
    Route::get('/chat', 'MessageController@index');
    Route::get('/chat/archive', 'MessageController@archive');
    Route::get('/chat/sent', 'MessageController@sent');
    Route::get('/chat/starred', 'MessageController@starred');
    Route::get('/chat/draft', 'MessageController@draft');
    Route::get('/chat/trash', 'MessageController@trash');
    Route::post('/updateProfile', 'ProfileController@updateProfile');
});

//Controllers for feed
Route::get('/user/feeds',function(){
    return view('user.feeds');
});


//Controllers for Profile 
Route::get('/user/profile', 'ProfileController@index');
Route::get('/user/publicprofile', 'ProfileController@publicProfile');
Route::get('/talent/{username}', 'ProfileController@publicSearchProfile');

//Controllers for Search

Route::get('/searchtalent', 'SearchController@index');
Route::get('/search', 'SearchController@search');
Route::post('/search', 'SearchController@search');

//Controllers for Mail 
Route::get('/welcomeMail', 'MailController@index');
// });

//Controllers for Admin Dashboard 
Route::get('/admin/home', 'AdminController@index' );
Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/updateCategory', 'AdminController@viewCategory' );
Route::post('/admin/updateCategory', 'AdminController@updateCategory');

//Controllers for Employer
Route::prefix('/employer')->group(function(){
    Route::get('/registration', 'Employer\Auth\RegisterController@showRegistrationForm');
    Route::post('/registration', 'Employer\Auth\RegisterController@register');    
    // Route::get('/employer/login', 'Employer\Auth\LoginController@showLoginForm');
    Route::get('/login', function(){
        return view('employer.login');
    });        
    Route::post('/login', 'Employer\Auth\LoginController@login');       
    Route::get('/home','Employer\EmployerController@index');
    Route::get('/logout', 'Employer\Auth\LoginController@logout');
});
