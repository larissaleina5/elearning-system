@extends('layouts.teacher.main')

@section('title')
 Teacher Create quizz
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Lesson Quizz</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('teacher.lesson.store',$id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class=" col-lg-12">
                                    <div class="row">

                                            <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label text-primary">Question quizz<span class="required">*</span></label>
                                                <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="question_name" id="exampleFormControlInput1">
                                                @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>




                                            <input type="hidden" name="lesson_id" value="{{ $id }}"/>

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
                    <h5 class="mb-0">Quizz Details</h5>
                </div>
                <div class="card-body">

                    <div class="col-xl-12 col-sm-12">




                            </div>
                            <div id="form"  class="mb-3 row">
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Proposition<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="chapter[]" id="exampleFormControlInput1">



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Proposition<span class="required">*</span></label>
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
        newDiv.setAttribute('class', `col-6`);
        const div = document.getElementById('form');
        newDiv.innerHTML = `

            <label for="exampleFormControlInput1" class="form-label text-primary">Lesson Chapter<span class="required">*</span></label>
                            <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="chapter[]" id="exampleFormControlInput1">



      `
        div.appendChild(newDiv);


    }
</script>




