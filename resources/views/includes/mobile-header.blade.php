<div class="ku-mobile-header-wrap">
    <div class="ku-mobile-header ku-header-background ku-style-slide ku-sticky-mobile-navigation " id="ku-mobile-header">
        <div class="ku-mobile-header-container ku-container clearfix">
            <div class="ku-logo  ku-item-pdlr">
                <div class="ku-logo-inner">
                    <a class="" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="" /></a>
                </div>
            </div>
            <div class="ku-mobile-menu-right">
                <div class="ku-main-menu-search" id="ku-mobile-top-search"><i class="fa fa-search"></i></div>
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
                <div class="ku-mobile-menu"><a class="ku-mm-menu-button ku-mobile-menu-button ku-mobile-button-hamburger" href="#ku-mobile-menu"><span></span></a>
                    <div class="ku-mm-menu-wrap ku-navigation-font" id="ku-mobile-menu" data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">
                            <li class="menu-item menu-item-home current-menu-item menu-item-has-children"><a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="{{ route('about') }}">About KU</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('quality-assurance') }}">Quality Assurance</a></li>
                                    <li class="menu-item"><a href="{{ route('council') }}">University Council</a></li>
                                    <li class="menu-item" data-size="60"><a href=" {{ route('alumni') }} ">Alumni</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="bachelor-of-science-in-business-administration.html">Academics</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a>Undergraduate</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('business-administration') }}">Business Administration</a></li>
                                            <li class="menu-item"><a href="{{ route('csit') }}">Computer Science &#038; IT</a></li>
                                            <li class="menu-item"><a href="{{ route('education') }}">Education</a></li>
                                            <li class="menu-item"><a href="{{ route('natural-sciences') }}">Natural Sciences</a></li>
                                            <li class="menu-item"><a href="{{ route('nursing') }}">Nursing &#038; Health Sciences</a></li>
                                            <li class="menu-item"><a href="{{ route('film-school') }}">Film School</a></li>
                                            <li class="menu-item"><a href="{{ route('industrial-art') }}">Industrial Art &#038; Design</a></li>
                                            <li class="menu-item"><a href="{{ route('arts') }}">Arts &#038; Sciences</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Graduate Program</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('csitPostGrad') }}">Computer Science & IT</a></li>
                                            <li class="menu-item"><a href="{{ route('environmental-science') }}">Environmental Science</a></li>
                                            <li class="menu-item"><a href="{{ route('public-health') }}">Public Health</a></li>
                                            <li class="menu-item"><a href="{{ route('economics', ['id'=>1]) }}">Economics</a></li>
                                            <li class="menu-item"><a href="{{ route('business-management', ['id'=>1]) }}">Business Management</a></li>
                                            <li class="menu-item"><a href="{{ route('educationPostGrad', ['id'=>1]) }}">Education</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Resources</a>
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
                                    <li class="menu-item"><a href="{{ route('home') }}">Logo</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="{{ route('apply') }}">Admissions</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="apply-to-ku.html">Apply To ku</a></li>
                                    <li class="menu-item"><a href="campus-tour.html">Campus Tour</a></li>
                                    <li class="menu-item"><a href="scholarships.html">Scholarships</a></li>
                                    <li class="menu-item"><a href="athletics.html">Athletics</a></li>
                                    <li class="menu-item"><a href="give-to-ku.html">Give To ku</a></li>
                                    <li class="menu-item"><a href="alumni.html">Alumni</a></li>
                                    <li class="menu-item"><a href="event-calendar.html">Event Calendar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="athletics.html">Athletics</a></li>
                            <li class="menu-item"><a href="university-life.html">University Life</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
