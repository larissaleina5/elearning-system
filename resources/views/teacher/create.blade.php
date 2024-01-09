

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab" >
	<meta name="robots" content="" >
	<meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management" >
	<meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard" >
	<meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template" >
	<meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
	<meta property="og:image" content="https://akademi.dexignlab.com/xhtml/social-image.png" >
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title>Akademi : School and Education Management Admin Dashboard Template</title>

<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" >
	<link href="{{asset('public/assets/vendor/wow-master/css/libs/animate.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/assets/vendor/jquery-nice-select/css/nice-select.css') }}">

	<link href="{{ asset('assets/vendor/datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">



    <link href="{{ asset('public/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
	<!--swiper-slider-->

	<!-- Style css -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->

    <div id="preloader">
    <div class="loader">
		<div class="dots">
            <div class="dot mainDot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
		</div>

		</div>
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
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header">
								<h5 class="mb-0">Student Details</h5>
							</div>
							<div class="card-body">
                                <form action="{{route('store-teacher') }}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4">
                                            <label class="form-label text-primary">Photo<span class="required">*</span></label>
                                            <div class="avatar-upload">
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url(images/no-img-avatar.png);">
                                                    </div>
                                                </div>
                                                <div class="change-btn mt-2 mb-lg-0 mb-3">
                                                    <input type='file' class="form-control d-none"  id="imageUpload" accept=".png, .jpg, .jpeg">
                                                    <label for="imageUpload" class="dlab-upload mb-0 btn btn-primary btn-sm">Choose File</label>
                                                    <a href="javascript:void" class="btn btn-danger light remove-img ms-2 btn-sm">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8">
                                            <div class="row">

                                                    <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label text-primary"> Name<span class="required">*</span></label>
                                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="James">
                                                    </div>


                                                    <div class="mb-3">
                                                    <label for="exampleFormControlInput3" class="form-label text-primary">Email<span class="required">*</span></label>
                                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput3" placeholder="hello@example.com">
                                                    </div>


                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput3" class="form-label text-primary">Password<span class="required">*</span></label>
                                                            <input type="password"  name="password"class="form-control" id="UserController" placeholder="Password">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput6" class="form-label text-primary">Phone Number<span class="required">*</span></label>
                                                                <input type="number" name="phone"class="form-control" id="exampleFormControlInput6" placeholder="+123456789">
                                                                </div>

                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-sm-6">



                                                    <div class="">
                                                        <button  class="btn btn-outline-primary me-3">Save as Draft</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>

                                            </div>
                                </form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Parents Details</h5>
						</div>
						<div class="card-body">

								<div class="col-xl-6 col-sm-6">
									<div class="mb-3">
									<label for="exampleFormControlInput8" class="form-label text-primary">Name<span class="required">*</span></label>
									<input type="text" class="form-control" id="exampleFormControlInput8" placeholder="Name">
									</div>
									<div class="mb-3">
									<label for="exampleFormControlInput9" class="form-label text-primary">Email<span class="required">*</span></label>
									<input type="email" class="form-control" id="exampleFormControlInput9" placeholder="hello@example.com">
									</div>



									</div>
								</div>

								<div class="col-xl-6 col-sm-6">

									<div class="mb-3">
									<label for="exampleFormControlInput11" class="form-label text-primary">Phone Number<span class="required">*</span></label>
									<input type="number" class="form-control" id="exampleFormControlInput11" placeholder="+123456789">
									</div>
									<label class="form-label text-primary">Payments<span class="required">*</span></label>
									<div class="d-flex align-items-center">
										<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label font-w500" for="flexCheckDefault">
											Cash
										</label>
										</div>
										<div class="form-check ms-3">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
										<label class="form-check-label font-w500" for="flexCheckDefault1">
											Debits
										</label>
										</div>

									</div>
								</div>
							</div>
							<div class="">
								<button class="btn btn-outline-primary me-3">Save as Draft</button>
								<button class="btn btn-primary" type="button">Save</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

        <!--**********************************
            Content body end
        ***********************************-->

		@include('layouts.admin.footer')


        <!--**********************************
            Footer end
        ***********************************-->
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('public/assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>


	<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
	<script src="vendor/wow-master/dist/wow.min.js"></script>
	<script src="{{ asset('public/assets/js/custom.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('public/assets/js/demo.js') }}"></script>
	<script src="{{ asset('public/assets/js/styleSwitcher.js') }}"></script>

	<script>
		$(function () {
			$("#datepicker").datepicker({
					autoclose: true,
					todayHighlight: true
			}).datepicker('update', new Date());

		});

	</script>

	<script>
		function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
	$('.remove-img').on('click', function() {
		var imageUrl = "images/no-img-avatar.png";
		$('.avatar-preview, #imagePreview').removeAttr('style');
		$('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
	});



	</script>

</body>
</html>
    </body>
</html>
