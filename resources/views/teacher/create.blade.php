@extends('layouts.admin.main')
@section('title')
Create Teacher
@endsection

@section('content')

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

@endsection
