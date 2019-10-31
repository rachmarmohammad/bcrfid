<section class="sidebar">

  <div class="user-panel">
    <div class="pull-left image">
      <img src="https://raw.githubusercontent.com/Infernus101/ProfileUI/0690f5e61a9f7af02c30342d4d6414a630de47fc/icon.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{ Auth::user()->name }}</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>

  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">Settings</li>

    <li class="{{ Request::is('home') ? 'active' : '' }}">
      <a href="{{ url('home') }}">
        <i class="fa fa-home"></i>
          <span>Home</span>
      </a>
    </li>

    @if (Auth::user()->isAdmin())

      <li class="{{ Request::segment(2) === 'announcement' ? 'active' : '' }}">
        <a href="{{ url('admin/announcement')}}">
          <i class="fa  fa-building-o" aria-hidden="true"></i>
            <span>Announcement</span>
        </a>
      </li>

      <li class="{{ Request::segment(2) === 'student' ? 'active' : '' }}">
        <a href="{{ url('admin/student')}}">
          <i class="fa  fa-building-o" aria-hidden="true"></i>
            <span>Student</span>
        </a>
      </li>

      <li class="{{ Request::segment(2) === 'device' ? 'active' : '' }}">
        <a href="{{ url('admin/device')}}">
          <i class="fa  fa-building-o" aria-hidden="true"></i>
            <span>Device</span>
        </a>
      </li>

       <li class="{{ Request::segment(2) === 'log' ? 'active' : '' }}">
        <a href="{{ url('admin/log')}}">
          <i class="fa  fa-building-o" aria-hidden="true"></i>
            <span>Log</span>
        </a>
      </li>

    @endif


  </ul>

</section>