@extends('layouts.dashboardmaster')

@section('title')
  Update Categories
@endsection 

@section('content')


<div id = "page-container" class="page page-header-fixed page-header-glass main-content-boxed">
    <main id="main-container">

    
        <div class="content">
            <div class="row " data-toggle="appear">
         
                <div class="col-md-12">
                    <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default border-b">
                            <h3 class="block-title">Users</h3>
                         
                        </div>
                        <div class="block-content">
                            <table class="table table-striped">
                                <thead>
                                  
                                        
                             
                                    <tr>
                                        <th >ID</th>
                                        <th>Talent</th>
                                        <th>Category</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                     @foreach ($users as $user)
                                    
                                    <tr>
                                        <form action="/admin/updateCategory" method="POST">
                                            @csrf
                                        <td> 
                                            <input type="hidden" name="id" id="id" value="{{$user->id}}">
                                            <h3  id="id"  > {{$user->id}}</h3>
                           
                                        </td>
                                        <td>
                                        <h5>{{$user->talent}}</h5>
                                        </td>
                                       
                                        <td class="d-none d-sm-table-cell">
                                            <select id="category" name="category" >
                                                <option value="" selected > Choose a Category</option>
                                                <option value=" Accounting And Business"> Accounting And Business
                                                </option>
                                                                                               <option value="Admin Support">Admin Support</option>
                                                                                               
                                                                                                 <option value="Construction And Building">Construction And Building</option>
                                                                                               <option value="Design And Art">Design And Art</option>
                                                                                               <option value="Entertainment ">Entertainment </option>
                                                                                               <option value="Fashion">Fashion </option>
                                                                                               <option value="Fitness">Fitness</option>
                                                                                               <option value="Food and Drinks">Food and Drinks</option>
                                                                                               <option value="IT Services">IT Services</option>
                                                                                             
                                                                                               
                                                                                               
                                                                                               <option value="Marketing And Advertising">Marketing And Advertising</option>
                                                                                               <option value="Music And Audio">Music And Audio</option>
                                                                                                   <option value="Photography And Videography">Photography And Videography</option>
                                                                                                   <option value="Teaching And Education ">Teaching And Education </option>
                                                                                                   <option value="Technical Services">Technical Services</option>
                                                                                                   <option value="Transportation And Logistics">Transportation And Logistics</option>
                                                                                               <option value="Vocational And Manual">Vocational And Manual</option>
                                                                                               <option value="Web And Software Development">Web And Software Development</option>                                             
                                                                                                <option value="Writing">Writing</option>
                                            </select>
                                           
                                        </td>
                                        <td>
                                              <button type="submit">Update</button> 
                                        </td>
                                     
                                    </form>
                                    </tr>
                            
                                    @endforeach
                                   
                                   
                                </tbody>
                            </table>
                            <div class="pagination ">
                                <nav aria-label="Pagination">
                                    {{$users->links()}}
                                    
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- END Row #3 -->
            </div>
        </div>
        
    
    </main>
        

</div>

@endsection