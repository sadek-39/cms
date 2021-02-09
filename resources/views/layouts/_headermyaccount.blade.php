<div class="navbar navbar-expand navbar-light border-bottom-2"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="index.html"
                       class="navbar-brand mr-16pt d-lg-none">
                        <!-- <img class="navbar-brand-icon" src="images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="images/logo/api-logo.png"
                                     alt="logo"
                                     class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">API</span>
                    </a>

                    <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                        {{-- <li class="nav-item">
                            <a href="index.html"
                               class="nav-link">Home</a>
                        </li> --}}
                         <li class="nav-item dropdown">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">Contact us</a>
                            <!-- <div class="dropdown-menu">
                                <a href="courses.html"
                                   class="dropdown-item">Browse Courses</a>
                                <a href="student-course.html"
                                   class="dropdown-item">Preview Course</a>
                                <a href="student-lesson.html"
                                   class="dropdown-item">Preview Lesson</a>
                                <a href="student-take-course.html"
                                   class="dropdown-item"><span class="mr-16pt">Take Course</span> <span class="badge badge-notifications badge-accent text-uppercase ml-auto">Pro</span></a>
                                <a href="student-take-lesson.html"
                                   class="dropdown-item">Take Lesson</a>
                                <a href="student-take-quiz.html"
                                   class="dropdown-item">Take Quiz</a>
                                <a href="student-quiz-result-details.html"
                                   class="dropdown-item">Quiz Result</a>
                                <a href="student-dashboard.html"
                                   class="dropdown-item">Student Dashboard</a>
                                <a href="student-my-courses.html"
                                   class="dropdown-item">My Courses</a>
                                <a href="student-quiz-results.html"
                                   class="dropdown-item">My Quizzes</a>
                                <a href="help-center.html"
                                   class="dropdown-item">Help Center</a>
                            </div> -->
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">Paths</a>
                            <!-- <div class="dropdown-menu">
                                <a href="paths.html"
                                   class="dropdown-item">Browse Paths</a>
                                <a href="student-path.html"
                                   class="dropdown-item">Path Details</a>
                                <a href="student-path-assessment.html"
                                   class="dropdown-item">Skill Assessment</a>
                                <a href="student-path-assessment-result.html"
                                   class="dropdown-item">Skill Result</a>
                                <a href="student-paths.html"
                                   class="dropdown-item">My Paths</a>
                            </div> -->
                        </li>
                        {{-- <li class="nav-item active">
                            <a href="pricing.html"
                               class="nav-link">Pricing</a>
                        </li> --}}
                        <!-- <li class="nav-item dropdown">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">Teachers</a>
                            <div class="dropdown-menu">
                                <a href="instructor-dashboard.html"
                                   class="dropdown-item">Instructor Dashboard</a>
                                <a href="instructor-courses.html"
                                   class="dropdown-item">Manage Courses</a>
                                <a href="instructor-quizzes.html"
                                   class="dropdown-item">Manage Quizzes</a>
                                <a href="instructor-earnings.html"
                                   class="dropdown-item">Earnings</a>
                                <a href="instructor-statement.html"
                                   class="dropdown-item">Statement</a>
                                <a href="instructor-edit-course.html"
                                   class="dropdown-item">Edit Course</a>
                                <a href="instructor-edit-quiz.html"
                                   class="dropdown-item">Edit Quiz</a>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item dropdown"
                            data-toggle="tooltip"
                            data-title="Community"
                            data-placement="bottom"
                            data-boundary="window">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">
                                <i class="material-icons">people_outline</i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="teachers.html"
                                   class="dropdown-item">Browse Teachers</a>
                                <a href="student-profile.html"
                                   class="dropdown-item">Student Profile</a>
                                <a href="teacher-profile.html"
                                   class="dropdown-item">Instructor Profile</a>
                                <a href="blog.html"
                                   class="dropdown-item">Blog</a>
                                <a href="blog-post.html"
                                   class="dropdown-item">Blog Post</a>
                                <a href="faq.html"
                                   class="dropdown-item">FAQ</a>
                                <a href="help-center.html"
                                   class="dropdown-item">Help Center</a>
                                <a href="discussions.html"
                                   class="dropdown-item">Discussions</a>
                                <a href="discussion.html"
                                   class="dropdown-item">Discussion Details</a>
                                <a href="discussions-ask.html"
                                   class="dropdown-item">Ask Question</a>
                            </div>
                        </li> -->
                    </ul>

                     <ul class="nav navbar-nav ml-auto mr-0">
                    <!--    <li class="nav-item">
                            <a href="login.html"
                               class="nav-link"
                               data-toggle="tooltip"
                               data-title="Login"
                               data-placement="bottom"
                               data-boundary="window"><i class="material-icons">lock_open</i></a>
                        </li>-->
                        <li class="nav-item">
                            <a href="{{route('index')}}"
                               class="btn btn-outline-dark">Log out</a>
                        </li>
                    </ul> 
                </div> 
