
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          
          <li class=" {{ Request::segment(2) == 'dashboard' ?  'active' : '' }}">
            <a href="{{ url('admin/dashboard') }}"><i class="fa fa-book"></i> <span>Dashboard</span></a>
          </li>

          <li class="treeview {{ Request::segment(2) == 'biodata' ? 'active' : '' }}">
            <a href="#">
              <i class="fa fa-user"></i> <span>Biodata</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{Request::segment(2) == 'biodata' && Request::segment(3) == '' ? 'active' : ''}}"><a href="{{ route('biodata.index') }}"><i class="fa fa-circle-o"></i> Daftar Biodata</a></li>


            </ul>
          </li>

          <li class="treeview {{ Request::segment(2) == 'tempat' ? 'active' : '' }}">
            <a href="#">
              <i class="fa fa-window-restore"></i> <span>Tempat</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{Request::segment(2) == 'tempat' && Request::segment(3) == '' ? 'active' : ''}}"><a href="{{ route     ('tempat.index') }}"><i class="fa fa-circle-o"></i>Tempat Tersedia</a></li>
               <li class="{{Request::segment(2) == 'pesan_tempat' && Request::segment(3) == '' ? 'active' : ''}}"><a href="{{ route('pesan_tempat.index') }}"><i class="fa fa-circle-o"></i>Pesan Tempat</a></li>
            </ul>
            
          </li>
          
          
        </ul>