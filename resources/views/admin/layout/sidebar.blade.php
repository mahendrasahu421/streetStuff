   <!-- top navbar -->
   <nav class="navbar navbar-fixed-top">
       <div class="container-fluid">
           <div class="navbar-btn">
               <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
           </div>

           <div class="navbar-brand ps-2">
               <a href="index.html" class="d-flex">
                   <img src="{{ asset('admin-asset/images/kitchenlogo.png') }}" />
               </a>
           </div>

           <div class="d-flex flex-grow-1 align-items-center">


               <div class="flex-grow-1">
                   <ul class="nav navbar-nav flex-row justify-content-end align-items-center">

                       <li><a href="{{ url('/admin-login') }}" class="icon-menu"><i class="fa fa-sign-out"></i></a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </nav>

   <!-- Sidbar menu -->

   <!-- left-sidebar -->

   <div id="left-sidebar" class="sidebar">
       <div class="user-account p-3 mb-3">
           <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
               <img src="{{ asset('admin-asset/images/user.png') }}" class="avatar lg rounded me-3"
                   alt="User Profile Picture">
               <div class="dropdown flex-grow-1">
                   <span>Welcome,</span>
                   <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>Jessica
                           Doe</strong></a>
                   <ul class="dropdown-menu p-2 shadow-sm">
                       <li><a href="page-profile2.html"><i class="fa fa-user me-2"></i>My Profile</a></li>
                       <li><a href="app-inbox.html"><i class="fa fa-envelope-open me-2"></i>Messages</a></li>
                       {{-- <li><a href="javascript:void(0);"><i class="fa fa-cog me-2"></i>Settings</a></li> --}}
                       <li class="divider"></li>
                       <li><a href="page-login.html"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                   </ul>
               </div>
           </div>
           <div class="row g-3">
               <div class="col">
                   <h6 class="mb-0">5+</h6>
                   <small class="text-muted">Experience</small>
               </div>
               <div class="col">
                   <h6 class="mb-0">400+</h6>
                   <small class="text-muted">Employees</small>
               </div>
               <div class="col">
                   <h6 class="mb-0">80+</h6>
                   <small class="text-muted">Clients</small>
               </div>
           </div>
       </div>
       <!-- nav tab: menu list -->


       <ul class="nav nav-tabs text-center mb-2" role="tablist">
           <li class="nav-item flex-fill"><a class="nav-link active" id="hr_menu_nav_link" data-bs-toggle="tab"
                   href="#hr_menu" role="tab">Customer </a></li>
           <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#project_menu"
                   role="tab">Menu</a></li>
           <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#sub_menu"
                   role="tab">Employee</a></li>
           {{-- <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#setting_menu"
                role="tab"><i class="fa fa-cog"></i></a></li> --}}
       </ul>
       <!-- nav tab: content -->
       <div class="tab-content px-0">
           <div class="tab-pane fade show active" id="hr_menu" role="tabpanel">
               <nav class="sidebar-nav">
                   <ul class="metismenu list-unstyled">
                       <li class="active"><a href="{{ url('admin-dashboard') }}"><i
                                   class="fa fa-tachometer"></i><span>Customer
                                   Dashboard</span></a></li>
                       <li><a href="{{ url('customer-list') }}"><i class="fa fa-list-ul"></i><span>Customer
                                   List</span></a>
                       <li><a href="{{ url('customerAdvancePayment-list') }}"><i
                                   class="fa fa-list-ul"></i><span>Customer Advance </span></a>
                       <li><a href="{{ url('customerBalancePayment-list') }}"><i
                                   class="fa fa-list-ul"></i><span>Customer Balance </span></a>
                       </li>
                       <li><a href="app-events.html"><i class="fa fa-calendar"></i><span>Customer order</span></a>
                       </li>
                   </ul>
               </nav>
           </div>
           <div class="tab-pane fade" id="project_menu" role="tabpanel">
               <nav class="sidebar-nav">
                   <ul class="metismenu list-unstyled">
                       <li><a href="index2.html"><i class="fa fa-tachometer"></i><span>Menu Dashboard</span></a>
                       </li>
                       <li><a href="app-inbox.html"><i class="fa fa-envelope-o"></i><span>Daily Item</span></a></li>
                       {{-- <li><a href="app-chat.html"><i class="fa fa-comments"></i><span>Chat App</span></a>
                    </li> --}}
                       <li>
                           <a href="#Employees" class="has-arrow"><i class="fa fa-list-ul"></i><span>Menu
                                   List</span></a>
                           <ul class="list-unstyled">
                               <li><a href="menuCategory">Create Menu Category</a></li>
                               <li><a href="project-add.html">Brekfast</a></li>
                               <li><a href="project-list.html">Lunch</a></li>
                               <li><a href="project-detail.html">Snacks</a></li>
                               <li><a href="project-grid.html">Dinner</a></li>
                           </ul>
                       </li>


                   </ul>
               </nav>
           </div>
           <div class="tab-pane fade" id="sub_menu" role="tabpanel">
               <nav class="sidebar-nav">
                   <ul class="metismenu list-unstyled">
                       <li><a href="{{ url('create-designation') }}"><i
                                   class="fa fa-envelope-o"></i><span>Designation</span></a></li>
                       <li>
                           <a href="#Blog" class="has-arrow"><i class="fa fa-globe"></i><span> Employee</span></a>
                           <ul class="list-unstyled">
                               <li><a href="{{ url('create-new-employee') }}">Create Employee</a></li>
                               <li><a href="{{ url('employee-list') }}">Employee List</a></li>

                               <li><a href="{{ url('employee-attendece') }}"> Employee Attendnce</a></li>
                               <li><a href="{{ url('employee-leaves') }}">Employye Leaves</a></li>
                               <li><a href="{{ url('add-advance') }}">Advance</a></li>
                               <li><a href="{{ url('deduct-advance') }}">Deduct Advance </a></li>

                           </ul>
                       </li>
                   </ul>
               </nav>
           </div>

       </div>
   </div>
   <!-- left-sidebar End-->
