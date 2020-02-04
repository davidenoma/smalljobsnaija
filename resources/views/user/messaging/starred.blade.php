@extends('layouts.chatmaster')

@section('title')
    Messaging
@endsection
@section('content')
<div id="page-container" class="main-content-boxed" >
    
    @include('layouts.nav')
            <!-- Side Overlay-->
         
            <!-- END Side Overlay -->
            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">
                        <button type="button" class="btn btn-sm btn-rounded btn-primary d-md-none float-right ml-5" data-toggle="class-toggle" data-target=".js-inbox-nav" data-class="d-none d-md-block">Menu</button>
                        <button type="button" class="btn btn-sm btn-rounded btn-success float-right" data-toggle="modal" data-target="#modal-compose">New Message</button>
                        Messaging
                    </h2>
                    <div class="row">
                        <div class="col-md-5 col-xl-3">
                            <!-- Collapsible Inbox Navigation -->
                            <div class="js-inbox-nav d-none d-md-block">
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Navigation</h3>
                                        <div class="block-options">
                                            <div class="dropdown">
                                                <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{-- <i class="fa fa-fw fa-ellipsis-v "></i> --}}
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
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
                                                <a class="nav-link d-flex align-items-center justify-content-between " href="/user/chat">
                                                    <span><i class="fa fa-fw fa-inbox mr-5"></i> Inbox</span>
                                                    <span class="badge badge-pill badge-secondary">1</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between active" href="/user/chat/starred">
                                                    <span><i class="fa fa-fw fa-star mr-5"></i> Starred</span>
                                                    <span class="badge badge-pill badge-secondary">0</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="/user/chat/sent">
                                                    <span><i class="fa fa-fw fa-send mr-5"></i> Sent</span>
                                                    <span class="badge badge-pill badge-secondary">0</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="/user/chat/draft">
                                                    <span><i class="fa fa-fw fa-pencil mr-5"></i> Draft</span>
                                                    <span class="badge badge-pill badge-secondary">0</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="/user/chat/archive">
                                                    <span><i class="fa fa-fw fa-folder mr-5"></i> Archive</span>
                                                    <span class="badge badge-pill badge-secondary">0</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center justify-content-between" href="/user/chat/trash">
                                                    <span><i class="fa fa-fw fa-trash mr-5"></i> Trash</span>
                                                    <span class="badge badge-pill badge-secondary">0</span>
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
                                    <div class="block ">
                                        <div class="block-header block-header-default">
                                            <h3 class="block-title">Recent Contacts</h3>
                                            <div class="block-options"> 
                                                <div class="dropdown">
                                                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-fw fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
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
                                        <div class="block-content ">
                                            <ul class="nav-users">
                                                <li>
                                                    <a href="be_pages_generic_profile.html">
                                                        <img class="img-avatar" src="assets/media/avatars/avatar8.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Daniella Jumbo
                                                        <div class="font-w400 font-size-xs text-muted"><i class="fa fa-briefcase"></i> Interior painter</div>
                                                        <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> Rumuola</div>
                                                        
                                                        
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_generic_profile.html">
                                                        <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Oluchi Adenike
                                                        
                                                        <div class="font-w400 font-size-xs text-muted"><i class="fa fa-briefcase"></i> Content Writer</div>
                                                        <div class="font-w400 font-size-xs text-muted"><i class="fa fa-location-arrow"></i> Okota,Lagos</div>
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- END Collapsible Inbox Navigation -->
                        </div>
                        <div class="col-md-7 col-xl-9">
                            <!-- Message List -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <div class="block-title">
                                        <strong>1-10</strong> from <strong>23</strong>
                                    </div>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option">
                                            <i class="si si-arrow-left"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option">
                                            <i class="si si-arrow-right"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Messages Options -->
                                    <div class="push">
                                        <button type="button" class="btn btn-rounded btn-alt-secondary float-right">
                                            <i class="fa fa-times text-danger mx-5"></i>
                                            <span class="d-none d-sm-inline"> Delete</span>
                                        </button>
                                        <button type="button" class="btn btn-rounded btn-alt-secondary">
                                            <i class="fa fa-archive text-primary mx-5"></i>
                                            <span class="d-none d-sm-inline"> Archive</span>
                                        </button>
                                        <button type="button" class="btn btn-rounded btn-alt-secondary">
                                            <i class="fa fa-star text-warning mx-5"></i>
                                            <span class="d-none d-sm-inline"> Star</span>
                                        </button>
                                    </div>
                                    <!-- END Messages Options -->

                                    <!-- Messages -->
                                    <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.tableToolsCheckable()) -->
                                    <table class="js-table-checkable table table-hover table-vcenter">
                                       
                                    </table>
                                    <!-- END Messages -->
                                </div>
                            </div>
                            <!-- END Message List -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
           
            <!-- END Footer -->
     
        <!-- END Page Container -->

        <!-- Compose Modal -->
        <div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header">
                            <h3 class="block-title">
                                <i class="fa fa-pencil mr-5"></i> New Message
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form class="my-10" action="be_pages_generic_inbox.html" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary input-group">
                                            <input type="email" class="form-control" id="message-email" name="message-email" placeholder="Where to send?">
                                            <label for="message-email">Email</label>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="si si-envelope-open"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary input-group">
                                            <input type="text" class="form-control" id="message-subject" name="message-subject" placeholder="What is this about?">
                                            <label for="message-subject">Subject</label>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="si si-book-open"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary">
                                            <textarea class="form-control" id="message-msg" name="message-msg" rows="6" placeholder="Write your message.."></textarea>
                                            <label for="message-msg">Message</label>
                                        </div>
                                        <div class="form-text font-size-sm text-muted">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-alt-primary" data-dismiss="modal">
                                        <i class="fa fa-send mr-5"></i> Send Message
                                    </button>
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Compose Modal -->

        <!-- Message Modal -->
        <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Welcome to Small Jobs Naija service</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="tooltip" data-placement="left" title="Reply">
                                    <i class="fa fa-reply"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-image text-center" style="background-image: url('assets/media/photos/photo6.jpg');">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar4.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body font-size-sm">
                            <span class="text-muted float-right"><em>2 min ago</em></span>
                            <a href="javascript:void(0)">admin@smalljobsnaija.com</a>
                        </div>
                        <div class="block-content">
                            <p>Dear Customer,</p>
                            <p>We are glad to serve you.</p>
                            <p>Best Regards,</p>
                            <p>Admin Team</p>
                        </div>
                        <div class="block-content bg-body">
                            <div class="row gutters-tiny items-push">
                                <div class="col-sm-4">
                                    <div class="options-container fx-overlay-slide-down">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo20.jpg" alt="">
                                        <div class="options-overlay bg-black-op">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-rounded btn-noborder btn-alt-secondary min-width-75" href="javascript:void(0)">
                                                    <i class="fa fa-download"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-muted mt-5">Travel_Pack_1.jpg</div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
