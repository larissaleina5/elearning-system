
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="DexignLab">
        <meta name="robots" content="">
        <meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management">
        <meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
        <meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template">
        <meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
        <meta property="og:image" content="https://akademi.dexignlab.com/xhtml/social-image.png">
        <meta name="format-detection" content="telephone=no">
        <!-- Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Page Title Here -->
        <title>@yield('title')</title>
        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
        <link rel="stylesheet" href="{{ asset('char') }}">
        <link href="{{asset('public/assets/vendor/wow-master/css/libs/animate.css')}}" rel="stylesheet">
        <link href="{{asset('public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/assets/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('public/assets/vendor/datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('public/assets/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Style css -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
        <!-- Style css -->
        <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!--*******************
        Preloader end
    ********************-->
        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">
            <!--**********************************
            Nav header start
        ***********************************-->
            @include('layouts.admin.nav-header')
            <!--**********************************
            Nav header end
        ***********************************-->
            <!--**********************************
            Chat box start
        ***********************************-->
            @include('layouts.admin.chatbox')
            <!--**********************************
            Chat box End
        ***********************************-->
            <!--**********************************
            Header start
        ***********************************-->
            @include('layouts.admin.header')
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
            <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.admin.sidebar')
            <!--**********************************
            Sidebar end
        ***********************************-->
            <!--**********************************
            Content body start
        ***********************************-->
            @yield('content')
            <!--**********************************
            Content body end
        ***********************************-->
            <!-- footer-start -->
            @include('layouts.admin.footer')
            <!--**********************************
            Footer end
        ***********************************-->
            <!--**********************************
                Support ticket button start
        ***********************************-->
            <!--**********************************
                    Support ticket button end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->
        <!--**********************************
		Modal
	***********************************-->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Student Deatils</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Yatin">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Current Class</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="VII A">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="xarma">
                                </div>
                                <label class="form-label d-block">Gender</label>
                                <select class="default-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
		Modal
	***********************************-->
        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="{{asset('public/assets/vendor/global/global.min.js')}}"></script>
        <script src="{{asset('public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
        <!--datatables-->
        <script src="{{ asset('public/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('public/assets/vendor/apexchart/apexchart.js') }}"></script>
        <script src="{{ asset('public/assets/vendor/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('public/assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
        <script src="{{asset('public/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/assets/js/plugins-init/datatables.init.js')}}"></script>
        <script src="{{ asset('public/assets/js/dashboard/dashboard-1.js') }}"></script>
        <script src="{{ asset('assets/vendor/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <!-- Dashboard 1 -->
        <script src="{{ asset('public/assets/vendor/wow-master/dist/wow.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{asset('public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}"></script>
        <script src="{{asset('public/assets/js/custom.min.js')}}"></script>
        <script src="{{asset('public/assets/js/dlabnav-init.js')}}"></script>
        <script src="{{asset('public/assets/js/demo.js')}}"></script>
        <script src="{{asset('public/assets/js/styleSwitcher.js')}}"></script>
    </body>
</html>

    </body>
</html>
