<div class="mdk-drawer js-mdk-drawer layout-compact__drawer"
id="default-drawer">
<div class="mdk-drawer__content js-sidebar-mini">

   <div class="sidebar sidebar-mini sidebar-dark sidebar-left">

       <!-- Navbar toggler -->
       <ul class="nav flex-column flex-nowrap flex-shrink-0 sidebar-menu sm-item-bordered">
           <li class="sidebar-menu">
               <a class="sidebar-menu-button"
                  href="">
                   <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
                   <span class="">Dashboard</span>
               </a>
           </li>
           <li class="sidebar-menu-item">
               <a class="sidebar-menu-button"
                  href="{{route('admin-settings')}}">
                  <i class="fas fa-tools"></i>
                   <span class="">Settings</span>
               </a>
           </li>
           <li class="sidebar-menu-item">
            <a class="sidebar-menu-button"
               href="{{route('allheadersinfo')}}">
               <i class="fas fa-heading"></i>
                <span class="">Header</span>
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button"
               href="{{route('admin-footer')}}">
               <i class="fas fa-shoe-prints"></i>
                <span class="">Footer</span>
            </a>
        </li>
        <li class="sidebar-menu-item">
               <a class="sidebar-menu-button"
                  href="{{route('admin-slider')}}">
                  <i class="fas fa-sliders-h"></i>
                   <span class="">Slider</span>
               </a>
           </li>
           
           
           {{-- <li class="sidebar-menu-item "
               data-title="Community"
               data-placement="right"
               data-container="body"
               data-boundary="window">
               <a class="sidebar-menu-button"
                  href="#sm_community"
                  data-toggle="tab"
                  role="tab"
                  aria-controls="sm_community">
                   <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people_outline</i>
                   <span class="sidebar-menu-text">Community</span>
               </a>
           </li> --}}
       </ul>
   </div>

   <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary sidebar-p-t"
        data-perfect-scrollbar>
       <div class="tab-content">

           {{-- <div class="tab-pane"
                id="sm_account_1">
               <div class="sidebar-heading">Account</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="compact-edit-account.html">
                           <span class="sidebar-menu-text">Edit Account</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="compact-billing.html">Billing</a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="compact-billing-history.html">Payments</a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="compact-login.html">Logout</a>
                   </li>
               </ul>
           </div> --}}

           <div class="tab-pane fade active show"
                id="sm_dashboards">
               <div class="sidebar-heading">Dashboards</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item active open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#dashboards_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dashboard</span>
                           Dashboard
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse show sm-indent"
                           id="dashboards_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-index.html">
                                   <span class="sidebar-menu-text">Analytics Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item active">
                               <a class="sidebar-menu-button"
                                  href="compact-analytics.html">
                                   <span class="sidebar-menu-text">Analytics 2 Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-projects.html">
                                   <span class="sidebar-menu-text">Projects Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-tasks-board.html">
                                   <span class="sidebar-menu-text">Tasks Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-staff.html">
                                   <span class="sidebar-menu-text">Staff Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ecommerce.html">
                                   <span class="sidebar-menu-text">Shop Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-erp-dashboard.html">
                                   <span class="sidebar-menu-text">ERP Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-crm-dashboard.html">
                                   <span class="sidebar-menu-text">CRM Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-hr-dashboard.html">
                                   <span class="sidebar-menu-text">HR Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-cms-dashboard.html">
                                   <span class="sidebar-menu-text">CMS Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button disabled"
                                  href="compact-ui-card-metrics.html">
                                   <span class="sidebar-menu-text">Card Metrics</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane"
                id="sm_enterprise">
               <div class="sidebar-heading">Enterprise</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button js-sidebar-collapse"
                          data-toggle="collapse"
                          href="#enterprise_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                           Enterprise
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="enterprise_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-erp-dashboard.html">
                                   <span class="sidebar-menu-text">ERP Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-crm-dashboard.html">
                                   <span class="sidebar-menu-text">CRM Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-hr-dashboard.html">
                                   <span class="sidebar-menu-text">HR Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-employees.html">
                                   <span class="sidebar-menu-text">Employees</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-staff.html">
                                   <span class="sidebar-menu-text">Staff</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-leaves.html">
                                   <span class="sidebar-menu-text">Leaves</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button disabled"
                                  href="compact-departments.html">
                                   <span class="sidebar-menu-text">Departments</span>
                               </a>
                           </li>
                           <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-documents.html">
<span class="sidebar-menu-text">Documents</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-attendance.html">
<span class="sidebar-menu-text">Attendance</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-recruitment.html">
<span class="sidebar-menu-text">Recruitment</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-payroll.html">
<span class="sidebar-menu-text">Payroll</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-training.html">
<span class="sidebar-menu-text">Training</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-employee-profile.html">
<span class="sidebar-menu-text">Employee Profile</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-accounting.html">
<span class="sidebar-menu-text">Accounting</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-inventory.html">
<span class="sidebar-menu-text">Inventory</span>
</a>
</li> -->
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_productivity">
               <div class="sidebar-heading">Productivity</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#productivity_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                           Productivity
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="productivity_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-projects.html">
                                   <span class="sidebar-menu-text">Projects</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-tasks-board.html">
                                   <span class="sidebar-menu-text">Tasks Board</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-tasks-list.html">
                                   <span class="sidebar-menu-text">Tasks List</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button disabled"
                                  href="compact-kanban.html">
                                   <span class="sidebar-menu-text">Kanban</span>
                               </a>
                           </li>
                           <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-task-details.html">
<span class="sidebar-menu-text">Task Details</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-team-members.html">
<span class="sidebar-menu-text">Team Members</span>
</a>
</li> -->
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_ecommerce">
               <div class="sidebar-heading">eCommerce</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#ecommerce_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                           eCommerce
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="ecommerce_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ecommerce.html">
                                   <span class="sidebar-menu-text">Shop Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button disabled"
                                  href="compact-edit-product.html">
                                   <span class="sidebar-menu-text">Edit Product</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_messaging">
               <div class="sidebar-heading">Messaging</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#messaging_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                           Messaging
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="messaging_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-messages.html">
                                   <span class="sidebar-menu-text">Messages</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-email.html">
                                   <span class="sidebar-menu-text">Email</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_marketplace">
               <div class="sidebar-heading">Marketplace</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#marketplace_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assessment</span>
                           Marketplace
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="marketplace_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button disabled"
                                  href="compact-digital-product.html">
                                   <span class="sidebar-menu-text">Digital Product</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_education">
               <div class="sidebar-heading">Education</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#education_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                           Education
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="education_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  data-toggle="collapse"
                                  href="#student_menu">
                                   <span class="sidebar-menu-text">Student</span>
                                   <span class="ml-auto sidebar-menu-toggle-icon"></span>
                               </a>
                               <ul class="sidebar-submenu collapse sm-indent"
                                   id="student_menu">
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-dashboard.html">
                                           <span class="sidebar-menu-text">Student Dashboard</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-profile.html">
                                           <span class="sidebar-menu-text">Student Profile</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-my-courses.html">
                                           <span class="sidebar-menu-text">My Courses</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-quiz-results.html">
                                           <span class="sidebar-menu-text">My Quizzes</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-take-course.html">
                                           <span class="sidebar-menu-text">Take Course</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-take-lesson.html">
                                           <span class="sidebar-menu-text">Take Lesson</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-take-quiz.html">
                                           <span class="sidebar-menu-text">Take Quiz</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-quiz-result-details.html">
                                           <span class="sidebar-menu-text">Quiz Result</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-path-assessment.html">
                                           <span class="sidebar-menu-text">Skill Assessment</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-student-path-assessment-result.html">
                                           <span class="sidebar-menu-text">Skill Result</span>
                                       </a>
                                   </li>
                               </ul>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  data-toggle="collapse"
                                  href="#instructor_menu">
                                   <span class="sidebar-menu-text">Instructor</span>
                                   <span class="ml-auto sidebar-menu-toggle-icon"></span>
                               </a>
                               <ul class="sidebar-submenu collapse sm-indent"
                                   id="instructor_menu">
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-dashboard.html">
                                           <span class="sidebar-menu-text">Instructor Dashboard</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-profile.html">
                                           <span class="sidebar-menu-text">Instructor Profile</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-courses.html">
                                           <span class="sidebar-menu-text">Manage Courses</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-quizzes.html">
                                           <span class="sidebar-menu-text">Manage Quizzes</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-edit-course.html">
                                           <span class="sidebar-menu-text">Edit Course</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-edit-quiz.html">
                                           <span class="sidebar-menu-text">Edit Quiz</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-earnings.html">
                                           <span class="sidebar-menu-text">Earnings</span>
                                       </a>
                                   </li>
                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button disabled"
                                          href="compact-instructor-statement.html">
                                           <span class="sidebar-menu-text">Statement</span>
                                       </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_cms">
               <div class="sidebar-heading">CMS</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#cms_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                           CMS
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="cms_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-cms-dashboard.html">
                                   <span class="sidebar-menu-text">CMS Dashboard</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-posts.html">
                                   <span class="sidebar-menu-text">Posts</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_account">
               <div class="sidebar-heading">Account</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#account_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                           Account
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="account_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-pricing.html">
                                   <span class="sidebar-menu-text">Pricing</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-login.html">
                                   <span class="sidebar-menu-text">Login</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-signup.html">
                                   <span class="sidebar-menu-text">Signup</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-signup-payment.html">
                                   <span class="sidebar-menu-text">Payment</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-reset-password.html">
                                   <span class="sidebar-menu-text">Reset Password</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-change-password.html">
                                   <span class="sidebar-menu-text">Change Password</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-edit-account.html">
                                   <span class="sidebar-menu-text">Edit Account</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-edit-account-profile.html">
                                   <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-edit-account-notifications.html">
                                   <span class="sidebar-menu-text">Email Notifications</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-edit-account-password.html">
                                   <span class="sidebar-menu-text">Account Password</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-billing.html">
                                   <span class="sidebar-menu-text">Subscription</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-billing-upgrade.html">
                                   <span class="sidebar-menu-text">Upgrade Account</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-billing-payment.html">
                                   <span class="sidebar-menu-text">Payment Information</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-billing-history.html">
                                   <span class="sidebar-menu-text">Payment History</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-billing-invoice.html">
                                   <span class="sidebar-menu-text">Invoice</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane "
                id="sm_community">
               <div class="sidebar-heading">Community</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#community_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                           Community
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="community_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-faq.html">
                                   <span class="sidebar-menu-text">FAQ</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-discussions.html">
                                   <span class="sidebar-menu-text">Discussions</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-discussion.html">
                                   <span class="sidebar-menu-text">Discussion Details</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-discussions-ask.html">
                                   <span class="sidebar-menu-text">Ask Question</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane"
                id="sm_components">
               <div class="sidebar-heading">UI Components</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#components_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                           Components
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="components_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-buttons.html">
                                   <span class="sidebar-menu-text">Buttons</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-avatars.html">
                                   <span class="sidebar-menu-text">Avatars</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-forms.html">
                                   <span class="sidebar-menu-text">Forms</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-loaders.html">
                                   <span class="sidebar-menu-text">Loaders</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-tables.html">
                                   <span class="sidebar-menu-text">Tables</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-cards.html">
                                   <span class="sidebar-menu-text">Cards</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-icons.html">
                                   <span class="sidebar-menu-text">Icons</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-tabs.html">
                                   <span class="sidebar-menu-text">Tabs</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-alerts.html">
                                   <span class="sidebar-menu-text">Alerts</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-badges.html">
                                   <span class="sidebar-menu-text">Badges</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-progress.html">
                                   <span class="sidebar-menu-text">Progress</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-pagination.html">
                                   <span class="sidebar-menu-text">Pagination</span>
                               </a>
                           </li>
                           <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-typography.html">
<span class="sidebar-menu-text">Typography</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-colors.html">
<span class="sidebar-menu-text">Colors</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-breadcrumb.html">
<span class="sidebar-menu-text">Breadcrumb</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-accordions.html">
<span class="sidebar-menu-text">Accordions</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-modals.html">
<span class="sidebar-menu-text">Modals</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-chips.html">
<span class="sidebar-menu-text">Chips</span>
</a>
</li> -->
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button disabled"
                                  href="">
                                   <span class="sidebar-menu-text">Disabled</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane"
                id="sm_plugins">
               <div class="sidebar-heading">Plugins</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item open">
                       <a class="sidebar-menu-button"
                          data-toggle="collapse"
                          href="#plugins_menu">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                           Plugins
                           <span class="ml-auto sidebar-menu-toggle-icon"></span>
                       </a>
                       <ul class="sidebar-submenu collapse sm-indent"
                           id="plugins_menu">
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-charts.html">
                                   <span class="sidebar-menu-text">Charts</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-flatpickr.html">
                                   <span class="sidebar-menu-text">Flatpickr</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-daterangepicker.html">
                                   <span class="sidebar-menu-text">Date Range Picker</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-dragula.html">
                                   <span class="sidebar-menu-text">Dragula</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-dropzone.html">
                                   <span class="sidebar-menu-text">Dropzone</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-range-sliders.html">
                                   <span class="sidebar-menu-text">Range Sliders</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-quill.html">
                                   <span class="sidebar-menu-text">Quill</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-select2.html">
                                   <span class="sidebar-menu-text">Select2</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-nestable.html">
                                   <span class="sidebar-menu-text">Nestable</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-fancytree.html">
                                   <span class="sidebar-menu-text">Fancy Tree</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-maps-vector.html">
                                   <span class="sidebar-menu-text">Vector Maps</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-sweet-alert.html">
                                   <span class="sidebar-menu-text">Sweet Alert</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button"
                                  href="compact-ui-plugin-toastr.html">
                                   <span class="sidebar-menu-text">Toastr</span>
                               </a>
                           </li>
                           <li class="sidebar-menu-item">
                               <a class="sidebar-menu-button disabled"
                                  href="">
                                   <span class="sidebar-menu-text">Disabled</span>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
           <div class="tab-pane"
                id="sm_layouts">
               <div class="sidebar-heading">Layouts</div>
               <ul class="sidebar-menu">
                   <li class="sidebar-menu-item active">
                       <a class="sidebar-menu-button"
                          href="compact-analytics.html">
                           <span class="sidebar-menu-text">Compact</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="mini-analytics.html">
                           <span class="sidebar-menu-text">Mini</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="analytics.html">
                           <span class="sidebar-menu-text">App</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="boxed-analytics.html">
                           <span class="sidebar-menu-text">Boxed</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="sticky-analytics.html">
                           <span class="sidebar-menu-text">Sticky</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="fixed-analytics.html">
                           <span class="sidebar-menu-text">Fixed</span>
                       </a>
                   </li>
               </ul>
           </div>
       </div>

       <div class="sidebar-heading mt-3"><strong>Select company</strong></div>
       <a href=""
          class="dropdown-item active d-flex align-items-center">

           <div class="avatar avatar-sm mr-8pt">

               <span class="avatar-title rounded bg-primary">FM</span>

           </div>

           <small class="ml-4pt flex">
               <span class="d-flex flex-column">
                   <strong class="text-100">FrontendMatter Inc.</strong>
                   <span class="text-50">Administrator</span>
               </span>
           </small>
       </a>
       <a href=""
          class="dropdown-item d-flex align-items-center mb-3">

           <div class="avatar avatar-sm mr-8pt">

               <span class="avatar-title rounded bg-accent">HH</span>

           </div>

           <small class="ml-4pt flex">
               <span class="d-flex flex-column">
                   <strong class="text-100">HumaHuma Inc.</strong>
                   <span class="text-50">Publisher</span>
               </span>
           </small>
       </a>
   </div>

</div>
</div>