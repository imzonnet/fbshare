@include('_layouts/header')
    @include('_layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>@yield('title', 'Dashboard')</h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="clearfix"></div>
            @if( isset($errors) && count($errors) > 0 )
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if( \Session::has('success_message') )
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ \Session::get('success_message') }}
                </div>
            @endif
            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('_layouts/footer')