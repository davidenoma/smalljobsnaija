@extends('layouts.dashboardmaster')

@section('title')
   Admin Dashboard 
@endsection 

@section('content')


<div id = "page-container" class="page page-header-fixed page-header-glass main-content-boxed">
    <main id="main-container">

    
        <div class="content">
            <div class="row " data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-right mt-15 d-none d-sm-block">
                                <i class="si si-bag fa-2x text-primary-light"></i>
                            </div>
                        <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="{{$allUsers}}"></div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Total Users</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">{{$allUsers}}</div>

                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <button type="button" class="btn btn-primary min-width-125">Send Mail</button>
                   
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4">
                    
                </div>
               
                <!-- END Row #1 -->
    
                <!-- Row #3 -->
                <div class="col-md-6">
                    <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default border-b">
                            <h3 class="block-title">Recent Users</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                <thead>
                                  
                                        
                             
                                    <tr>
                                        <th style="width: 100px;">ID</th>
                                        <th>Username</th>
                                        <th class="d-none d-sm-table-cell">Location</th>
                                        <th class="text-right">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latestUsers as $user)
                                    <tr>
                                        <td>
                                        <a class="font-w600" href="/talent/{{$user->username}}">{{$user->id}}</a>
                                        </td>
                                       
                                        <td class="d-none d-sm-table-cell">
                                            <a href="/talent/{{$user->username}}">{{$user->username}}</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">{{$user->location}}</span>
                                        </td>
                                        <td class="text-right">
                                        <span class="text-black">{{$user->created_at->diffForHumans()}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- END Row #3 -->
            </div>
        </div>
        
    
    </main>
        

</div>

@endsection