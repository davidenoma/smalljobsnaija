@extends('layouts.forumsmaster')
@section('title')
SmallJobsNaija- Forum Create Topic
@endsection

@section('main')
<div class="container">
    <form action="/createforumtopic" method="POST">

        @csrf
    <div class="create">
        <div class="create__head">
            <div class="create__title"><img src="/assets/fonts/icons/main/New_Topic.svg" alt="New topic">Create New Topic</div>
            <span>Forum Guidelines</span>
        </div>

        
        
        <div class="create__section">
            <label class="create__label" for="topic">Job Title</label>
            <input type="text" class="form-control" id="topic" name="topic" placeholder="Add here">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="create__section">
                    <label class="create__label" for="category">Job Category</label>
                    <label class="custom-select">
                        <select id="category" name="category" >                                                                       
                          
                            <option value=""> Choose a Category</option>
                            <option value="Accounting And Business"> Accounting And Business
                           </option>
                          <option value="Admin (Office) Support">Admin (Office) Support</option>
                          
                            <option value="Construction And Building">Construction And Building</option>
                          <option value="Design And Art">Design And Art</option>
                          <option value="Entertainment ">Entertainment </option>
                          <option value="Fashion or Beauty">Fashion or Beauty </option>
                          <option value="Fitness">Fitness</option>
                          <option value="Food and Drinks">Food and Drinks</option>
                          <option value="Home Services">Home Services</option>
                          <option value="IT Services">IT Services</option>
                         <option value="Marketing And Advertising">Marketing And Advertising</option>
                          <option value="Music And Audio">Music And Audio</option>
                              <option value="Photography And Videography">Photography And Videography</option>
                               <option value="Pets' care">Pets' care</option>
                               <option value="Public Relations">Public Relations</option>
                              <option value="Teaching And Education ">Teaching And Education </option>
                              <option value="Technical Services">Technical Services</option>
                              <option value="Transportation And Logistics">Transportation And Logistics</option>
                          <option value="Vocational And Manual">Vocational And Manual</option>
                          <option value="Web And Software Development">Web And Software Development</option>                                             
                           <option value="Writing">Writing</option>
                        </select>
                    </label>
                </div>
            </div>
        
        </div>
        <div class="create__section create__textarea">
            <label class="create__label" for="description" >Job Description</label>
 
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
      
        <div class="create__footer">
            <a href="/forumtopics" class="create__btn-cansel " >Cancel</a>
            <button type="submit"  class="create__btn-create btn btn--type-02">Create Job Post</button>
        </div>
    </form>
    </div>
  
</div>
@endsection