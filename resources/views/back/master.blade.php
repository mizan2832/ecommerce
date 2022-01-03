
@include('back.includes.head')
<body class="adminbody">

    <div id="main">

     @include('back.includes.header')
        <!-- End Navigation -->

        <!-- Left Sidebar -->
       @include('back.includes.sidebar')
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

               @yield('content')
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

       @include('back.includes.footer')
    <!-- END Java Script for this page -->

</body>

</html>