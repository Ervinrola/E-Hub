@extends('layout.admin')
@section('admin')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.3.0/dist/tagify.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    
<div class="container pt-5">
    <form action="dataInsert" method="post" enctype="multipart/form_data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="">
        </div>
        <div class="mb-3">
            <label>Author</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="">
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea class="form-control" id="data" name="data" rows="10" placeholder="Enter your Content Here....."></textarea>
        </div>
         
         <input type="submit" class="btn btn-primary">
</form>
    </div>
    <footer style="padding-top: 15%;">
        <div class="bg-light py-3 sticky-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2021 My Company. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#">Privacy Policy</a>
                        <span class="mx-2">|</span>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.3.0/dist/tagify.min.js"></script>
    <script>
    ClassicEditor.create(document.querySelector('#data'))
    .catch(error => {console.error(error);});
    </script>

    
@endsection
