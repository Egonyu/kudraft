<header class="ku-header-wrap ku-header-style-plain  ku-style-menu-right ku-sticky-navigation ku-style-fixed" data-navigation-offset="75px">
    <div class="ku-header-background"></div>
    <div class="ku-header-container  ku-container">
        <div class="ku-header-container-inner clearfix">
            <div class="ku-logo  ku-item-pdlr">
                <div class="ku-logo-inner">
                    <a class="" href="{{ route('home') }}"><img src=" {{ asset('images/logo.png') }} " alt="KU LOGO" /></a>
                </div>
            </div>
            <div class="ku-navigation ku-item-pdlr clearfix ">
                <div class="ku-main-menu" id="ku-main-menu">
                    <ul id="menu-main-navigation-1" class="sf-menu">
                        <li class="menu-item menu-item-home current-menu-item menu-item-has-children ku-normal-menu"><a href="{{ route('home') }}" class="sf-with-ul-pre">Home</a></li>
                        <li class="menu-item menu-item-has-children ku-normal-menu"><a href="#" class="sf-with-ul-pre">About KU</a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-size="60"><a href="{{ route('quality-assurance') }}">Quality Assurance</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('about') }} ">About US</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ url('council') }} ">University Council</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('alumni') }} ">Alumni</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('sports') }} ">Sports</a></li>
                                <li class="menu-item ku-normal-menu"><a href="{{ route('uni-life') }}">University Life</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children ku-mega-menu"><a href="bachelor-of-science-in-business-administration.html" class="sf-with-ul-pre">Academics</a>
                            <div class="sf-mega sf-mega-full megaimg">
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre">Undergraduate</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('business-administration') }}">Business Administration</a></li>
                                            <li class="menu-item"><a href="{{ route('csit') }}">Computer Science &#038; IT</a></li>
                                            <li class="menu-item"><a href="{{ route('education') }}">Education</a></li>
                                            <li class="menu-item"><a href="{{ route('natural-sciences') }}">Natural Sciences</a></li>
                                            <li class="menu-item"><a href="{{ route('nursing') }}">Nursing &#038; Health Sciences</a></li>
                                            <li class="menu-item"><a href="{{ url('https://www.kampalafilmschool.org/') }}">Film School</a></li>
                                            <li class="menu-item"><a href="{{ route('industrial-art') }}">Industrial Art &#038; Design</a></li>
                                            <li class="menu-item"><a href="{{ route('arts') }}">Arts &#038; Sciences</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Graduate Program</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('csitPostGrad') }}">Computer Science & IT</a></li>
                                            <li class="menu-item"><a href="{{ route('environmental-science') }}">Environmental Science</a></li>
                                            <li class="menu-item"><a href="{{ route('public-health') }}">Public Health</a></li>
                                            <li class="menu-item"><a href="{{ route('economics', ['id'=>1]) }}">Economics</a></li>
                                            <li class="menu-item"><a href="{{ route('business-management', ['id'=>1]) }}">Business Management</a></li>
                                            <li class="menu-item"><a href="{{ route('educationPostGrad', ['id'=>1]) }}">Education</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Resources</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ asset('pdf/courses.pdf') }}" target="_blank">Our Courses</a></li>
                                            <li class="menu-item"><a href="{{ asset('pdf/Graduate_application.pdf') }}" target="_blank">Graduate Application</a></li>
                                            <li class="menu-item"><a href="{{ asset('Application_Undergraduate.pdf') }}" target="_blank">Undergraduate Application</a></li>
                                            <li class="menu-item"><a href="{{ asset('pdf/STUDENTS-LOAN-APPLICATION-FORM-2019_20.pdf') }}" target="_blank">HESFB Loan Form</a></li>
                                            <li class="menu-item"><a href="{{ asset('pdf/GENERAL-CIRCULAR-FEB_MAY-2019.pdf') }}" target="_blank">General Circular 2018/2019</a></li>
                                            <li class="menu-item"><a href="{{ asset('pdf/Aug-Dec-Semester-Sports-Activities.pdf') }}" target="_blank">August December Sports Activities</a></li>
                                            <li class="menu-item"><a href="{{ asset('pdf/LIST-OF-GRADUANDS-2019.pdf') }} " target="_blank">2019 Graduation List</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Others</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('studentswithdisabilities') }}">Students With Disabilities</a></li>
                                            <li class="menu-item"><a href="{{ route('vc') }}">Vice Chancellor</a></li>
                                            <li class="menu-item"><a href="{{ route('library') }}">Library</a></li>
                                            <li class="menu-item"><a href="{{ route('cisco') }}">CISCO</a></li>
                                            <li class="menu-item"><a href="{{ route('accomodation') }}">Accomodation</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="menu-item" data-size="15">
                                        <div class="ku-mega-menu-section-content"><img src=" {{ asset('images/eagle-clear-ku-logo-dark.png') }} " id="img_fd84_0" alt="" /> <span id="span_fd84_0">Academic offerings include 95 majors, 86 minors, and more than 100 in-major specializations</span></div>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item menu-item-has-children ku-normal-menu"><a href="#" class="sf-with-ul-pre">Campuses</a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-size="60"><a href="{{ route('ggaba') }}">Ggaba Main Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('mutundwe') }} ">Nursing School Mutundwe</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('masaka') }} ">Masaka Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('jinja') }} ">Jinja Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('lweero') }} ">Luwero Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('kitengela') }} ">East African University Campus</a></li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children ku-normal-menu"><a href="{{ route('research') }}" class="sf-with-ul-pre">Research</a></li>
                        <li class="menu-item ku-normal-menu"><a href="{{ route('contact') }}">Contact Us</a></li>

                    </ul>
                    <div class="ku-navigation-slide-bar" id="ku-navigation-slide-bar"></div>
                </div>
                <div class="ku-main-menu-right-wrap clearfix ">
                    <div class="ku-main-menu-search" id="ku-top-search"><i class="icon_search"></i></div>
                    <div class="ku-top-search-wrap">
                        <div class="ku-top-search-close"></div>
                        <div class="ku-top-search-row">
                            <div class="ku-top-search-cell">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="search-field ku-title-font" placeholder="Search..." value="" name="s">
                                    <div class="ku-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="ku-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
