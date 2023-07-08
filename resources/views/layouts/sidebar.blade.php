<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL('/dist/img/av.png')}}" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent  flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          @if(Auth::user()->user_type==1)

          <li class="nav-header">OPTIONS</li>
          <li class="nav-item">
            <a href="{{URL('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fa ion-monitor"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('admin/admin/list')}}" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
              <i class="nav-icon fa fa-user-secret"></i>
              <p>
                Admins
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('admin/teacher/list')}}" class="nav-link @if(Request::segment(2) == 'teacher') active @endif">
              <i class="nav-icon fas fa-user-circle "></i>
              <p>
                Teacher
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('admin/student/list')}}" class="nav-link @if(Request::segment(2) == 'student') active @endif">
              <i class="nav-icon fas fa-user-circle "></i>  
              <p>
                Student
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('admin/classroom/list')}}" class="nav-link @if(Request::segment(2) == 'classroom') active @endif">
              <i class="nav-icon fas fa-user-circle "></i>  
              <p>
                Classroom
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('admin/subjects/list')}}" class="nav-link @if(Request::segment(2) == 'subjects') active @endif">
              <i class="nav-icon fas fa-user-circle "></i>
              <p>
                Subjects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout    
              </p>
            </a>
          </li>


          @elseif(Auth::user()->user_type==2)

          <li class="nav-header">OPTIONS</li>
          <li class="nav-item">
            <a href="{{URL('teacher/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fa ion-monitor"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-user-circle "></i>
              <p>
                student
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-user-circle "></i>
              <p>
                Results
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout    
              </p>
            </a>
          </li>

          @elseif(Auth::user()->user_type==3)

          <li class="nav-header">OPTIONS</li>
          <li class="nav-item">
            <a href="{{URL('student/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fa ion-monitor"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-user-circle "></i>
              <p>
                Results
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout    
              </p>
            </a>
          </li>


          @endif

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
</div>