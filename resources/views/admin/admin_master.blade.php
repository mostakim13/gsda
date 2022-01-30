<!DOCTYPE html>
<html lang="en">
@yield('style')
<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
@include('backend.partials.header')

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    @include('backend.partials.navbar')
    <!-- header end -->
    <!-- Left sidebar menu start -->
    @include('backend.partials.left_sidebar')
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    <main class="ttr-wrapper">
        <section class="content container-fluid">
        @yield('admin_dashboard_content')
        </section>
    </main>
    <div class="ttr-overlay"></div>

    <!-- External JavaScripts -->
    @include('backend.partials.scripts')



    @yield('scripts')

    <script>
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });
    </script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>
