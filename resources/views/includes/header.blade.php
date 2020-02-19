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
                                <li class="menu-item" data-size="60"><a href=" {{ route('about') }} " target="_blank">About US</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ url('council') }} " target="_blank">University Council</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('alumni') }} " target="_blank">Alumni</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('sports') }} " target="_blank">Sports</a></li>
                                <li class="menu-item ku-normal-menu"><a href="{{ route('uni-life') }}" target="_blank">University Life</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children ku-mega-menu"><a href="bachelor-of-science-in-business-administration.html" class="sf-with-ul-pre">Academics</a>
                            <div class="sf-mega sf-mega-full megaimg">
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre">Undergraduate</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('business-administration') }}" target="_blank">Business Administration</a></li>
                                            <li class="menu-item"><a href="{{ route('csit') }}" target="_blank">Computer Science &#038; IT</a></li>
                                            <li class="menu-item"><a href="{{ route('education') }}" target="_blank">Education</a></li>
                                            <li class="menu-item"><a href="{{ route('natural-sciences') }}" target="_blank">Natural Sciences</a></li>
                                            <li class="menu-item"><a href="{{ route('nursing') }}" target="_blank">Nursing &#038; Health Sciences</a></li>
                                            <li class="menu-item"><a href="{{ url('https://www.kampalafilmschool.org/') }}" target="_blank">Film School</a></li>
                                            <li class="menu-item"><a href="{{ route('industrial-art') }}" target="_blank">Industrial Art &#038; Design</a></li>
                                            <li class="menu-item"><a href="{{ route('arts') }}" target="_blank">Arts &#038; Sciences</a></li>
                                            <li class="menu-item"><a href="{{ route('cisco') }}" target="_blank">CISCO</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Graduate Program</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('csitPostGrad') }}" target="_blank">Computer Science & IT</a></li>
                                            <li class="menu-item"><a href="{{ route('environmental-science') }}" target="_blank">Environmental Science</a></li>
                                            <li class="menu-item"><a href="{{ route('public-health') }}" target="_blank">Public Health</a></li>
                                            <li class="menu-item"><a href="{{ route('economics', ['id'=>1]) }}" target="_blank">Economics</a></li>
                                            <li class="menu-item"><a href="{{ route('business-management', ['id'=>1]) }}" target="_blank">Business Management</a></li>
                                            <li class="menu-item"><a href="{{ route('educationPostGrad', ['id'=>1]) }}" target="_blank">Education</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Resources</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ asset('pdf/almanac.pdf') }}" target="_blank">Kampala University Almac 2020</a></li>
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
                                            <li class="menu-item"><a href="{{ route('studentswithdisabilities') }}" target="_blank">Students With Disabilities</a></li>
                                            <li class="menu-item"><a href="{{ route('vc') }}" target="_blank">Vice Chancellor</a></li>
                                            <li class="menu-item"><a href="{{ route('library') }}" target="_blank">Library</a></li>
                                            <li class="menu-item"><a href="{{ route('accomodation') }}" target="_blank">Accomodation</a></li>
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
                                <li class="menu-item" data-size="60"><a href="{{ route('ggaba') }}" target="_blank">Ggaba Main Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('mutundwe') }} " target="_blank">Nursing School Mutundwe</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('masaka') }} " target="_blank">Masaka Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('jinja') }} " target="_blank">Jinja Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('lweero') }} " target="_blank">Luwero Campus</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('kitengela') }} " target="_blank">East African University Campus</a></li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children ku-normal-menu"><a href="#" class="sf-with-ul-pre">Admissions</a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-size="60"><a href="{{ route('admissions') }}" target="_blank">Application Procedure</a></li>
                                <li class="menu-item" data-size="60"><a href=" {{ route('international-admissions') }} " target="_blank">International Applications</a></li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children ku-normal-menu"><a href="{{ route('research') }}" target="_blank" class="sf-with-ul-pre">Research</a></li>
                        <li class="menu-item ku-normal-menu"><a href="{{ route('contact') }}" target="_blank">Contact Us</a></li>

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
