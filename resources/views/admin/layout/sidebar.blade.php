<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('assets/img/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alizee Thomas</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="#"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="#"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="@"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Sales</small>
                    <h6>456</h6>
                </li>
                <li class="col-4">
                    <small>Order</small>
                    <h6>1350</h6>
                </li>
                <li class="col-4">
                    <small>Revenue</small>
                    <h6>$2.13B</h6>
                </li>
            </ul>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
                            <a href="#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'university' ? 'active' : null }}"><a href="{{route('admin.dashboard.university')}}">University</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'blog' ? 'active' : null }}">
                            <a href="#Blog" class="has-arrow"><i class="icon-globe"></i> <span>Blog</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{route('admin.blog.dashboard')}}">Dashboard</a></li>
                                <li class="{{ Request::segment(2) === 'new-post' ? 'active' : null }}"><a href="{{route('admin.blog.new-post')}}">New Post</a></li>
                                <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="{{route('admin.blog.list')}}">Blog List</a></li>
                                <li class="{{ Request::segment(2) === 'detail' ? 'active' : null }}"><a href="{{route('admin.blog.detail')}}">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'authentication' ? 'active' : null }}">
                            <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i> <span>Authentication</span></a>
                            <ul>
                                <li><a href="{{route('admin.authentication.login')}}">Login</a></li>
                                <li><a href="{{route('admin.authentication.register')}}">Register</a></li>
                                <li><a href="{{route('admin.authentication.lockscreen')}}">Lockscreen</a></li>
                                <li><a href="{{route('admin.authentication.forgot-password')}}">Forgot Password</a></li>
                                <li><a href="{{route('admin.authentication.page404')}}">Page 404</a></li>
                                <li><a href="{{route('admin.authentication.page403')}}">Page 403</a></li>
                                <li><a href="{{route('admin.authentication.page500')}}">Page 500</a></li>
                                <li><a href="{{route('admin.authentication.page503')}}">Page 503</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'pages' ? 'active' : null }}">
                            <a href="#Pages" class="has-arrow"><i class="icon-docs"></i> <span>Pages</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'blank-page' ? 'active' : null }}"><a href="{{route('admin.pages.blank-page')}}">Blank Page</a> </li>
                                <li class="{{ Request::segment(2) === 'profile2' ? 'active' : null }}"><a href="{{route('admin.pages.profile2')}}">Profile <span class="badge badge-warning float-right">v2</span></a></li>
                                <li class="{{ Request::segment(2) === 'image-gallery1' ? 'active' : null }}"><a href="{{route('admin.pages.image-gallery1')}}">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                <li class="{{ Request::segment(2) === 'image-gallery2' ? 'active' : null }}"><a href="{{route('admin.pages.image-gallery2')}}">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                <li class="{{ Request::segment(2) === 'horizontal-timeline' ? 'active' : null }}"><a href="{{route('admin.pages.horizontal-timeline')}}">Horizontal Timeline</a></li>
                                <li class="{{ Request::segment(2) === 'project-list' ? 'active' : null }}"><a href="{{route('admin.pages.project-list')}}">Projects List</a></li>
                                <li class="{{ Request::segment(2) === 'faq' ? 'active' : null }}"><a href="{{route('admin.pages.faq')}}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'map' ? 'active' : null }}">
                            <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'yandex' ? 'active' : null }}"><a href="#">Yandex Map</a></li>
                                <li class="{{ Request::segment(2) === 'jvector' ? 'active' : null }}"><a href="#">jVector Map</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar4.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Chris Fox</span>
                                    <span class="message">Designer, Blogger</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar5.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Joge Lucky</span>
                                    <span class="message">Java Developer</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar2.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Isabella</span>
                                    <span class="message">CEO, Thememakker</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar1.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Folisise Chosielie</span>
                                    <span class="message">Art director, Movie Cut</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar3.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Alexander</span>
                                    <span class="message">Writter, Mag Editor</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li>
                </ul>
                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Email Redirect</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Notifications</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Auto Updates</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button m-t-30">
                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
