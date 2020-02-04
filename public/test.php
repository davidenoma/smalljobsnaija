@extends('layouts.chatmaster')
@section('content')
<div class="col-md-5 col-xl-3">
                            <!-- Collapsible Inbox Navigation -->
                            <div class="js-inbox-nav d-none d-md-block">
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Navigation</h3>
                                        <div class="block-options">
                                            <div class="dropdown show">
                                                <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right show" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-112px, 28px, 0px);">
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="fa fa-fw fa-flask mr-5"></i>Filter
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="fa fa-fw fa-cogs mr-5"></i>Manage
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav nav-pills flex-column push">
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-inbox mr-5"></i> Inbox</span>
                                                    <span class="badge badge-pill badge-secondary">23</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-star mr-5"></i> Starred</span>
                                                    <span class="badge badge-pill badge-secondary">30</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-send mr-5"></i> Sent</span>
                                                    <span class="badge badge-pill badge-secondary">79</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-pencil mr-5"></i> Draft</span>
                                                    <span class="badge badge-pill badge-secondary">10</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-folder mr-5"></i> Archive</span>
                                                    <span class="badge badge-pill badge-secondary">99</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span><i class="fa fa-fw fa-trash mr-5"></i> Trash</span>
                                                    <span class="badge badge-pill badge-secondary">13</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <hr class="my-5">
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-plus mr-5"></i> Create label
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END Collapsible Inbox Navigation -->

                            <!-- Recent Contacts -->
                            <div class="block d-none d-md-block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Recent Contacts</h3>
                                    <div class="block-options">
                                        <div class="dropdown">
                                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-fw fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(27px, 28px, 0px);">
                                                <a class="dropdown-item active" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-users mr-5"></i> All
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-circle text-success mr-5"></i> Online
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-circle text-danger mr-5"></i> Busy
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-circle text-warning mr-5"></i> Away
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-circle text-muted mr-5"></i> Offline
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-cogs mr-5"></i>Manage
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <ul class="nav-users">
                                        <li>
                                            <a href="be_pages_generic_profile.html">
                                                <img class="img-avatar" src="assets/media/avatars/avatar8.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Danielle Jones
                                                <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> New York</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_profile.html">
                                                <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Adam McCoy
                                                <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> San Fransisco</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_profile.html">
                                                <img class="img-avatar" src="assets/media/avatars/avatar7.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Amanda Powell
                                                <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> Beijing</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_profile.html">
                                                <img class="img-avatar" src="assets/media/avatars/avatar16.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Ryan Flores
                                                <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> Tokyo</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_profile.html">
                                                <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                                                <i class="fa fa-circle text-danger"></i> Thomas Riley
                                                <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> London</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_profile.html">
                                                <img class="img-avatar" src="assets/media/avatars/avatar7.jpg" alt="">
                                                <i class="fa fa-circle text-danger"></i> Lori Moore
                                                <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> Rio De Janeiro</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END Recent Contacts -->
                        </div>
                        @endsection