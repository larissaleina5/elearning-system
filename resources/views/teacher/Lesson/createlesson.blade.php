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
                                                <input type="text" class="form-control" name="lesson_title" id="exampleFormControlInput1">
                                                @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Lesson Content</label>
                                                <textarea class="form-control" name="lesson_content" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div id="quill-editor" class="mb-3" style="height: 300px;"></div>
                                            <textarea rows="3" class="mb-3 d-none" name="lesson_content" id="quill-editor-area"></textarea>

                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Lesson Description</label>
                                                <textarea class="form-control" name="lesson_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <input type="hidden" name="course_id" value="{{ $id }}"/>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Lesson Type</label>
                                                <textarea class="form-control" name="lesson_type" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Course Details</h5>
                </div>
                <div class="card-body">
                            <div class="">
                                <i class="fas fa-file"></i>

                                <input type="file" name="course_profile" required>
                            </div>
                            </div>
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
</script>




