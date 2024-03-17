@extends('layouts.teacher.main')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@section('title')
 Teacher Create Lesson
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Lesson Course</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('teacher.lesson.store',$id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class=" col-lg-12">
                                    <div class="row">

                                            <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label text-primary">Lesson Title<span class="required">*</span></label>
                                                <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="lesson_title" id="exampleFormControlInput1">
                                                @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>




                                            <input type="hidden" name="course_id" value="{{ $id }}"/>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card" style="padding-bottom: 800px">
                <div class="card-header">
                    <h5 class="mb-0">Course Details</h5>
                </div>
                <div class="card-body">

                    <div class="col-xl-12 col-sm-12">



                            <div id="quill-editor" class="mb-3 " style="height: 300px;"></div>
                            <textarea rows="3" class="mb-3 mt-3 d-none" name="lesson_content" id="quill-editor-area"></textarea>
                            </div>
                            <div id="form"  class="mb-3 row">
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Lesson Chapter<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="chapter[]" id="exampleFormControlInput1">



                                </div>

                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Lesson Chapter<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="chapter[]" id="exampleFormControlInput1">



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Lesson Chapter<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="chapter[]" id="exampleFormControlInput1">



                                </div>

                            </div>

                            <button type="button" onclick="addIngredient()" class="btn bag-primary text-white" style="background-color: #c70609">Add Chapter</button>
                        </div>


                    </div>
                    <div class="">

                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('quill-editor-area')) {
            var editor = new Quill('#quill-editor', {
                theme: 'snow'
            });
            var quillEditor = document.getElementById('quill-editor-area');
            editor.on('text-change', function() {
                quillEditor.value = editor.root.innerHTML;
            });

            quillEditor.addEventListener('input', function() {
                editor.root.innerHTML = quillEditor.value;
            });
        }
    });
    let i = 0;
    let j = 1;
    function addIngredient() {
        i = i + 1;
        const newDiv = document.createElement(`div`);
        newDiv.setAttribute('class', `row`);
        const div = document.getElementById('form');
        newDiv.innerHTML = `


            <label for="exampleFormControlInput1" class="form-label text-primary">Lesson Chapter<span class="required">*</span></label>
                            <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="chapter[]" id="exampleFormControlInput1">







      `
        div.appendChild(newDiv);


    }
</script>




