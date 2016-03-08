<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>John Nguyen</p>
          <p>Skype: vnzacky39</p>
          <!-- Status -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Share</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ az_check_route('fake-content.create') }}"><a href="{{ route('fake-content.create') }}"><i class="fa fa-link"></i> <span>Fake Content</span></a></li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>