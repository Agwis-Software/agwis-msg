<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Messenger - Responsive Bootstrap Application</title>

        <!-- Template core CSS -->
        
        <link href="assets/css/template.min.css" rel="stylesheet">
        <link href="assets/css/template.dark.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)">
        
        
        
    </head>
    <!-- Head -->

    <body>

        <div class="layout">

            <!-- Navigation -->
            <div class="navigation navbar navbar-light justify-content-center py-xl-7">

                <!-- Brand -->
                <a href="#" class="d-none d-xl-block mb-6">
                    <img src="assets/images/brand.svg" class="mx-auto fill-primary" data-inject-svg="" alt="" style="height: 46px;">
                </a>

                <!-- Menu -->
                <ul class="nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center py-3 py-lg-0" role="tablist">

                    <!-- Invisible item to center nav vertically -->
                    <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
                        <a class="nav-link position-relative p-0 py-xl-3" href="#" title="">
                            <i class="icon-lg fe-x"></i>
                        </a>
                    </li>

                    <!-- Create group -->
                    <li class="nav-item">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-create-chat" title="Create chat" role="tab">
                            <i class="icon-lg fe-edit"></i>
                        </a>
                    </li>

                    <!-- Friend -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-friends" title="Friends" role="tab">
                            <i class="icon-lg fe-users"></i>
                        </a>
                    </li>

                    <!-- Chats -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3 active" data-toggle="tab" href="#tab-content-dialogs" title="Chats" role="tab">
                            <i class="icon-lg fe-message-square"></i>
                            <div class="badge badge-dot badge-primary badge-bottom-center"></div>
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-user" title="User" role="tab">
                            <i class="icon-lg fe-user"></i>
                        </a>
                    </li>

                    <!-- Demo only: Documentation -->
                    <li class="nav-item mt-xl-9 d-none d-xl-block flex-xl-grow-1">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-demos" title="Demos" role="tab">
                            <i class="icon-lg fe-layers"></i>
                        </a>
                    </li>

                    <!-- Settings -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" href="settings.html" title="Settings">
                            <i class="icon-lg fe-settings"></i>
                        </a>
                    </li>

                </ul>
                <!-- Menu -->

            </div>
            <!-- Navigation -->

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="tab-content h-100" role="tablist">
                    <div class="tab-pane fade h-100" id="tab-content-create-chat" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Create group</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Tabs -->
                                    <ul class="nav nav-tabs nav-justified mb-6" role="tablist">
                                        <li class="nav-item">
                                            <a href="#create-group-details" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">Details</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#create-group-members" class="nav-link" data-toggle="tab" role="tab" aria-selected="false">Members</a>
                                        </li>
                                    </ul>
                                    <!-- Tabs -->

                                    <!-- Create chat -->
                                    <div class="tab-content" role="tablist">

                                        <!-- Chat details -->
                                        <div id="create-group-details" class="tab-pane fade show active" role="tabpanel">
                                            <form action="#">
                                                <div class="form-group">
                                                    <label class="small">Photo</label>
                                                    <div class="position-relative text-center bg-secondary rounded p-6">
                                                        <div class="avatar bg-primary text-white mb-5">
                                                            <i class="icon-md fe-image"></i>
                                                        </div>

                                                        <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                        <input id="upload-chat-photo" class="d-none" type="file">
                                                        <label class="stretched-label mb-0" for="upload-chat-photo"></label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="small" for="new-chat-title">Name</label>
                                                    <input class="form-control form-control-lg" name="new-chat-title" id="new-chat-title" type="text" placeholder="Group Name">
                                                </div>

                                                <div class="form-group">
                                                    <label class="small" for="new-chat-topic">Topic (optional)</label>
                                                    <input class="form-control form-control-lg" name="new-chat-topic" id="new-chat-topic" type="text" placeholder="Group Topic">
                                                </div>

                                                <div class="form-group mb-0">
                                                    <label class="small" for="new-chat-description">Description</label>
                                                    <textarea class="form-control form-control-lg" name="new-chat-description" id="new-chat-description" rows="6" placeholder="Group Description"></textarea>
                                                </div>

                                            </form>
                                        </div>
                                        <!-- Chat details -->

                                        <!-- Chat Members -->
                                        <div id="create-group-members" class="tab-pane fade" role="tabpanel">
                                            <nav class="list-group list-group-flush mb-n6">

                                                <div class="mb-6">
                                                    <small class="text-uppercase">A</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            <div class="avatar avatar-online mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                            </div>
                                                            
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Anna Bridges</h6>
                                                                <small class="text-muted">Online</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-1" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-1"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">B</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Brian Dawson</h6>
                                                                <small class="text-muted">last seen 2 hours ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-2" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-2"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-2"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">L</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Leslie Sutton</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-3" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-3"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-3"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">M</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Matthew Wiggins</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-4" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-4"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-4"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">S</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Simon Hensley</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-5" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-5"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-5"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">W</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">William Wright</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-6" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-6"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-6"></label>
                                                </div>
                                                <!-- Friend --><!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">William Greer</h6>
                                                                <small class="text-muted">last seen 10 minutes ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-7" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-7"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-7"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">Z</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Zane Mayes</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-8" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-8"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-8"></label>
                                                </div>
                                                <!-- Friend -->

                                            </nav>
                                        </div>
                                        <!-- Chat Members -->

                                    </div>
                                    <!-- Create chat -->

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="pb-6">
                                <div class="container-fluid">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Create group</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade h-100" id="tab-content-friends" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Friends</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Button -->
                                    <button type="button" class="btn btn-lg btn-block btn-secondary d-flex align-items-center mb-6" data-toggle="modal" data-target="#invite-friends">
                                        Invite friends
                                        <i class="fe-users ml-auto"></i>
                                    </button>

                                    <!-- Friends -->
                                    <nav class="mb-n6">

                                        <div class="mb-6">
                                            <small class="text-uppercase">A</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    <div class="avatar avatar-online mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                    </div>
                                                    
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Anna Bridges</h6>
                                                        <small class="text-muted">Online</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="chat-2.html" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">B</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Brian Dawson</h6>
                                                        <small class="text-muted">last seen 2 hours ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">L</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Leslie Sutton</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">M</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Matthew Wiggins</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">S</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Simon Hensley</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">W</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">William Wright</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend --><!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">William Greer</h6>
                                                        <small class="text-muted">last seen 10 minutes ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">Z</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Zane Mayes</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                    </nav>
                                    <!-- Friends -->

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Chats</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Favourites -->
                                    <div class="text-center hide-scrollbar d-flex my-7" data-horizontal-scroll="">
                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/2.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">William</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Simon</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Zane</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">William</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/8.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Simon</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>
                                    </div>
                                    <!-- Favourites -->

                                    <!-- Chats -->
                                    <nav class="nav d-block list-discussions-js mb-n6">
                                        <!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="chat-1.html">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/11.jpg" alt="Bootstrap Themes">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Bootstrap Themes</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:42 am</p>
                                                            </div>
                                                            <div class="text-truncate">Anna Bridges: Hey, Maher! How are you? The weather is great isn't it?</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                                <div class="badge badge-circle badge-primary badge-border-light badge-top-right">
                                                    <span>3</span>
                                                </div>
                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="chat-2.html">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        <div class="avatar avatar-online mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                        </div>
                                                        
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Anna Bridges</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:42 am</p>
                                                            </div>
                                                            <div class="text-truncate">is typing<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Simon Hensley</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:38 am</p>
                                                            </div>
                                                            <div class="text-truncate">I’m sorry, this question would be out of my expertise.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">William Wright</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:20 am</p>
                                                            </div>
                                                            <div class="text-truncate">Hello! Let me transfer you to the marketing department.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Leslie Sutton</h6>
                                                                <p class="small text-muted text-nowrap ml-4">09:55 am</p>
                                                            </div>
                                                            <div class="text-truncate"><h6 class='d-inline'>You:</h6> I’m sorry, I don’t have the information on that.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Matthew Wiggins</h6>
                                                                <p class="small text-muted text-nowrap ml-4">09:25 am</p>
                                                            </div>
                                                            <div class="text-truncate">Matthew, let me transfer you to the marketing department.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="Thomas Walker">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Thomas Walker</h6>
                                                                <p class="small text-muted text-nowrap ml-4">09:00 am</p>
                                                            </div>
                                                            <div class="text-truncate">I am really sorry to hear that. Is there anything I can do to help you?</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/2.jpg" alt="Zane Mayes">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Zane Mayes</h6>
                                                                <p class="small text-muted text-nowrap ml-4">08:05 am</p>
                                                            </div>
                                                            <div class="text-truncate">That is a good question, let me find out for you.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Brian Dawson</h6>
                                                                <p class="small text-muted text-nowrap ml-4">08:00 am</p>
                                                            </div>
                                                            <div class="text-truncate">I’m not sure, but let me find out for you.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->

                                    </nav>
                                    <!-- Chats -->

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade h-100" id="tab-content-demos" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Demos</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media align-items-center">
                                                <div class="mr-5">
                                                    <img src="assets/images/brand.svg" class="fill-primary" data-inject-svg="" alt="" style="height: 46px; width: 46px;">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-0">
                                                        <a href="documentation/index.html" class="text-basic-inverse stretched-link">Documentation</a>
                                                    </h5>
                                                    <p>Quick setup and build tools.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <h5 class="my-6">Chat Pages:</h5>

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/chat.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Light mode</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="demo-light/index.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/chat-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Dark mode</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="demo-dark/index.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <h5 class="my-6">Account Pages:</h5>

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/sign-in-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Sign In</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="signin.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/sign-up-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Sign Up</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="signup.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/password-reset-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Password Reset</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="password-reset.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade h-100" id="tab-content-user" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Profile</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <div class="text-center py-6">
                                                <!-- Photo -->
                                                <div class="avatar avatar-xl mb-5">
                                                    <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                                                </div>

                                                <h5>Matthew Wiggins</h5>
                                                <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Country</p>
                                                            <p>Warsaw, Poland</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-globe"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Phone</p>
                                                            <p>+39 02 87 21 43 19</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mic"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Email</p>
                                                            <p>anna@gmail.com</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mail"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Time</p>
                                                            <p>10:03 am</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-clock"></i>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 py-6">
                                                    <a href="#" class="media text-muted">
                                                        <div class="media-body align-self-center">
                                                            Twitter
                                                        </div>
                                                        <i class="icon-sm fe-twitter"></i>
                                                    </a>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <a href="#" class="media text-muted">
                                                        <div class="media-body align-self-center">
                                                        Facebook
                                                        </div>
                                                        <i class="icon-sm fe-facebook"></i>
                                                    </a>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <a href="#" class="media text-muted">
                                                        <div class="media-body align-self-center">
                                                            Github
                                                        </div>
                                                        <i class="icon-sm fe-github"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <div class="form-row">
                                        <div class="col">
                                            <!-- Button -->
                                            <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                                Settings
                                                <span class="fe-settings ml-auto"></span>
                                            </button>
                                        </div>

                                        <div class="col">
                                            <!-- Button -->
                                            <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                                Logout
                                                <span class="fe-log-out ml-auto"></span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>




                    </div>
                </div>
            </div>
            <!-- Sidebar -->

            <!-- Main Content -->
            <div class="main main-visible" data-mobile-height="">

                <!-- Chat -->
                <div class="chat">

                    <!-- Chat: body -->
                    <div class="chat-body">

                        <!-- Chat: Header -->
                        <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <div class="row align-items-center">

                                    <!-- Close chat(mobile) -->
                                    <div class="col-3 d-xl-none">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="text-muted px-0" href="#" data-chat="open">
                                                    <i class="icon-md fe-chevron-left"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Chat photo -->
                                    <div class="col-6 col-xl-6">
                                        <div class="media text-center text-xl-left">
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1">Settings</h6>
                                                <small class="text-muted">Update your profile details</small>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- .row -->

                            </div>
                        </div>
                        <!-- Chat: Header -->

                        <!-- Chat: Content-->
                        <div class="chat-content px-lg-8">
                            <div class="container-xxl py-6 py-lg-10">

                                <!-- Accordion -->
                                <div class="accordion modified-accordion mb-n6 mb-lg-8" id="profile-settings">
                                    <div class="card-columns">

                                        <!-- Card -->
                                        <div class="card mb-6 mb-lg-8">
                                            <div class="card-header position-relative">
                                                <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-account" aria-controls="profile-settings-account" aria-expanded="true">
                                                    <div class="row no-gutters align-items-center">
                                                        <!-- Title -->
                                                        <div class="col">
                                                            <h5>Account</h5>
                                                            <p>Update your profile details.</p>
                                                        </div>

                                                        <!-- Icon -->
                                                        <div class="col-auto">
                                                            <i class="text-muted icon-md fe-user"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="profile-settings-account" class="collapse" data-parent="#profile-settings">
                                                <div class="card-body">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <label class="small">Avatar</label>
                                                            <div class="position-relative text-center bg-secondary rounded p-6">
                                                                <div class="avatar bg-primary text-white mb-5">
                                                                    <i class="icon-md fe-image"></i>
                                                                </div>

                                                                <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                                <input id="upload-user-photo" class="d-none" type="file">
                                                                <label class="stretched-label mb-0" for="upload-user-photo"></label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="profile-name">Name</label>
                                                            <input class="form-control form-control-lg" name="profile-name" id="profile-name" type="text" placeholder="Type your name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="profile-phone">Phone</label>
                                                            <input class="form-control form-control-lg" name="profile-phone" id="profile-phone" type="text" placeholder="(123) 456-7890">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="profile-email">Email</label>
                                                            <input class="form-control form-control-lg" name="profile-email" id="profile-email" type="email" placeholder="you@yoursite.com">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="profile-about">Bio</label>
                                                            <textarea class="form-control form-control-lg" id="profile-about" rows="3" placeholder="Express yourself" data-autosize="true"></textarea>
                                                        </div>

                                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Save Preferences</button>
                                                    </form>
                                                </div>
                                            </div><!-- .collapse -->

                                        </div>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <div class="card mb-6 mb-lg-8">
                                            <div class="card-header position-relative">
                                                <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-notifications" aria-controls="profile-settings-notifications" aria-expanded="true">
                                                    <div class="row no-gutters align-items-center">
                                                        <!-- Title -->
                                                        <div class="col">
                                                            <h5>Notifications</h5>
                                                            <p>Update your profile details.</p>
                                                        </div>

                                                        <!-- Icon -->
                                                        <div class="col-auto">
                                                            <i class="text-muted icon-md fe-bell"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="profile-settings-notifications" class="collapse" data-parent="#profile-settings">
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item pt-0 px-0">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0">Sound</h6>

                                                                <!-- Switch -->
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox" class="custom-control-input" id="custom-switch-1">
                                                                    <label class="custom-control-label" for="custom-switch-1"></label>
                                                                </div>
                                                            </div>
                                                            <p>Update your profile details.</p>
                                                        </li>

                                                        <li class="list-group-item px-0">
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0">Exceptions</h6>

                                                                <!-- Switch -->
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox" class="custom-control-input" id="custom-switch-2">
                                                                    <label class="custom-control-label" for="custom-switch-2"></label>
                                                                </div>
                                                            </div>
                                                            <p>Update your profile details.</p>
                                                        </li>

                                                        <li class="list-group-item px-0">
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0">Message preview</h6>

                                                                <!-- Switch -->
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox" class="custom-control-input" id="custom-switch-3">
                                                                    <label class="custom-control-label" for="custom-switch-3"></label>
                                                                </div>
                                                            </div>
                                                            <p>Update your profile details.</p>
                                                        </li>

                                                        <li class="list-group-item pb-0 px-0">
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0">Show notifications</h6>

                                                                <!-- Switch -->
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox" class="custom-control-input" id="custom-switch-4">
                                                                    <label class="custom-control-label" for="custom-switch-4"></label>
                                                                </div>
                                                            </div>
                                                            <p>Update your profile details.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .collapse -->

                                        </div>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <div class="card mb-6 mb-lg-8">
                                            <div class="card-header position-relative">
                                                <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-security" aria-expanded="true" aria-controls="profile-settings-security">
                                                    <div class="row no-gutters align-items-center">
                                                        <!-- Title -->
                                                        <div class="col">
                                                            <h5>Security</h5>
                                                            <p>Update your profile details.</p>
                                                        </div>

                                                        <!-- Icon -->
                                                        <div class="col-auto">
                                                            <i class="text-muted icon-md fe-shield"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="profile-settings-security" class="collapse" data-parent="#profile-settings">
                                                <div class="card-body">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <label class="small" for="current-password">Current password</label>
                                                            <input name="current-password" id="current-password" type="password" class="form-control form-control-lg" placeholder="Current password">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-password">New password</label>
                                                            <input name="new-password" id="new-password" type="password" class="form-control form-control-lg" placeholder="New password">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="verify-password">Verify password</label>
                                                            <input name="verify-password" id="verify-password" type="password" class="form-control form-control-lg" placeholder="Verify password">
                                                        </div>

                                                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                                                            Change Password
                                                        </button>
                                                    </form>
                                                </div>
                                            </div><!-- .collapse -->

                                        </div>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <div class="card mb-6 mb-lg-8">
                                            <div class="card-header position-relative">
                                                <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-social" aria-controls="profile-settings-social" aria-expanded="true">
                                                    <div class="row no-gutters align-items-center">
                                                        <!-- Title -->
                                                        <div class="col">
                                                            <h5>Social</h5>
                                                            <p>Update your profile details.</p>
                                                        </div>

                                                        <!-- Icon -->
                                                        <div class="col-auto">
                                                            <i class="text-muted icon-md fe-share-2"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="profile-settings-social" class="collapse" data-parent="#profile-settings">
                                                <div class="card-body">

                                                    <form action="#">
                                                        <!-- Twitter -->
                                                        <div class="form-group">
                                                            <label class="small" for="profile-twitter">Twitter</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="btn btn-ico btn-secondary btn-minimal">
                                                                        <i class="fe-twitter"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="profile-twitter" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                            </div>
                                                        </div>

                                                        <!-- Facebook -->
                                                        <div class="form-group">
                                                            <label class="small" for="profile-facebook">Facebook</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="btn btn-ico btn-secondary btn-minimal">
                                                                        <i class="fe-facebook"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="profile-facebook" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                            </div>
                                                        </div>

                                                        <!-- Instagram -->
                                                        <div class="form-group">
                                                            <label class="small" for="profile-instagram">Instagram</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="btn btn-ico btn-secondary btn-minimal">
                                                                        <i class="fe-instagram"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="profile-instagram" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                            </div>
                                                        </div>

                                                        <!-- Github -->
                                                        <div class="form-group">
                                                            <label class="small" for="profile-github">Github</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="btn btn-ico btn-secondary btn-minimal">
                                                                        <i class="fe-github"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="profile-github" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                            </div>
                                                        </div>

                                                        <!-- Slack -->
                                                        <div class="form-group">
                                                            <label class="small" for="profile-slack">Slack</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="btn btn-ico btn-secondary btn-minimal">
                                                                        <i class="fe-slack"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="profile-slack" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Save Preferences</button>
                                                    </form>
                                                </div>
                                            </div><!-- .collapse -->

                                        </div>
                                        <!-- Card -->

                                    </div>
                                </div>
                                <!-- Accordion -->

                            </div>
                        </div>
                        <!-- Chat: Content -->

                    </div>
                    <!-- Chat: body -->

                </div>
                <!-- Chat -->

            </div>
            <!-- Main Content -->

        </div>
        <!-- Layout -->

        <!-- Modal: Invite friends -->
        <div class="modal fade" id="invite-friends" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <div class="media flex-fill">
                            <div class="icon-shape rounded-lg bg-primary text-white mr-5">
                                <i class="fe-users"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h5 class="modal-title">Invite friends</h5>
                                <p class="small">Invite colleagues, clients and friends.</p>
                            </div>
                        </div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="invite-email" class="small">Email</label>
                                <input type="text" class="form-control form-control-lg" id="invite-email">
                            </div>

                            <div class="form-group mb-0">
                                <label for="invite-message" class="small">Invitation message</label>
                                <textarea class="form-control form-control-lg" id="invite-message" data-autosize="true"></textarea>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-block btn-primary d-flex align-items-center">
                            Invite friend
                            <i class="fe-user-plus ml-auto"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal: Invite friends -->

        <!-- Scripts -->
        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins/plugins.bundle.js"></script>
        <script src="assets/js/template.js"></script>
        <!-- Scripts -->

    </body>
</html>