@extends('dashboard.dashboard')

@section('main_content')
    <h3>Tạo bài viết mới</h3>
    <!-- start page title -->
    <div class="form-group">

        <form action="{{ route('admin.management.doCreateBlog') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-4">
                <div class="mb-3 form-group has-feedback">
                    <label>Tiêu đề bài viết :</label>
                    <input class="form-control" type="text" placeholder="Nhập tiêu đề bài viết" name="title"
                        required="">
                    <!-- Tối thiểu 5 ký tự -->
                </div>

                <div class="gap-2 mb-6 d-flex flex-nowrap">
                    <label class="text-nowrap">Chọn danh mục :</label>
                    <div class="">
                        <select class="form-select form-select-sm" aria-label="Small select" required="" name="category">
                            <option value="0" selected="">Sự kiện</option>
                            <option value="1">Tin tức</option>
                            <option value="2">Hướng Dẫn</option>
                            <option value="3">Hoạt Động</option>
                        </select>
                    </div>


                </div>

                <div class="mb-3">
                    <label for="image">Chọn ảnh để upload:</label>
                    <input type="file" class="form-control-file" id="image" name="file_upload" required="">
                </div>
            </div>

            <label for="image">Nội dung bài viết:</label>
            <textarea id="summernote" name="editordata"></textarea>
            <div class="pl-3 mt-5 row justify-content-center w-fit">
                <button type="submit" class="btn btn-danger ">Đăng bài viêt công khai</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 300
        });
    </script>
@endsection
@section('header')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
