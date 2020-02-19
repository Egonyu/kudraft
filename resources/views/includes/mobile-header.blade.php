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
                            <li class="menu-item menu-item-has-children"><a href="{{ route('about') }}" target="_blank">About KU</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('quality-assurance') }}" target="_blank">Quality Assurance</a></li>
                                    <li class="menu-item"><a href="{{ route('council') }}" target="_blank">University Council</a></li>
                                    <li class="menu-item" data-size="60"><a href=" {{ route('alumni') }} " target="_blank">Alumni</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="bachelor-of-science-in-business-administration.html">Academics</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a>Undergraduate</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('business-administration') }}" target="_blank">Business Administration</a></li>
                                            <li class="menu-item"><a href="{{ route('csit') }}" target="_blank">Computer Science &#038; IT</a></li>
                                            <li class="menu-item"><a href="{{ route('education') }}" target="_blank">Education</a></li>
                                            <li class="menu-item"><a href="{{ route('natural-sciences') }}" target="_blank">Natural Sciences</a></li>
                                            <li class="menu-item"><a href="{{ route('nursing') }}" target="_blank">Nursing &#038; Health Sciences</a></li>
                                            <li class="menu-item"><a href="{{ url('https://www.kampalafilmschool.org/') }}" target="_blank">Film School</a></li>
                                            <li class="menu-item"><a href="{{ route('industrial-art') }}" target="_blank">Industrial Art &#038; Design</a></li>
                                            <li class="menu-item"><a href="{{ route('arts') }}" target="_blank">Arts &#038; Social Sciences</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Graduate Program</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('csitPostGrad') }}" target="_blank">Computer Science & IT</a></li>
                                            <li class="menu-item"><a href="{{ route('environmental-science') }}" target="_blank">Environmental Science</a></li>
                                            <li class="menu-item"><a href="{{ route('public-health') }}" target="_blank">Public Health</a></li>
                                            <li class="menu-item"><a href="{{ route('economics') }}" target="_blank">Economics</a></li>
                                            <li class="menu-item"><a href="{{ route('business-management') }}" target="_blank">Business Management</a></li>
                                            <li class="menu-item"><a href="{{ route('educationPostGrad') }}" target="_blank">Education</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Resources</a>
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
                                    <li class="menu-item"><a href="{{ route('home') }}">Logo</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="{{ route('apply') }}" target="_blank">Admissions</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('admissions') }}" target="_blank">Apply To ku</a></li>
                                    <li class="menu-item"><a href="{{ url('international-admissions') }}" target="_blank">International Applications</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="{{ route('apply') }}" target="_blank">Admissions</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="apply-to-ku.html" target="_blank">Apply To ku</a></li>
                                    <li class="menu-item"><a href="campus-tour.html" target="_blank">Campus Tour</a></li>
                                    <li class="menu-item"><a href="scholarships.html" target="_blank">Scholarships</a></li>
                                    <li class="menu-item"><a href="athletics.html" target="_blank">Athletics</a></li>
                                    <li class="menu-item"><a href="give-to-ku.html" target="_blank">Give To ku</a></li>
                                    <li class="menu-item"><a href="alumni.html" target="_blank">Alumni</a></li>
                                    <li class="menu-item"><a href="event-calendar.html" target="_blank">Event Calendar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="athletics.html" target="_blank">Athletics</a></li>
                            {{-- <li class="menu-item"><a href="university-life.html">University Life</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
