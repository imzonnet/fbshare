@include('_layouts/header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>@yield('title', 'Dashboard')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      	@yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('_layouts/footer')