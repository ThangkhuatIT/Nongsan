@extends('dashboard.dashboard')

@section('main_content')
    <h3>Chỉnh sửa bài đăng</h3>
    <!-- start page title -->
    <div class="form-group">

        <form action="{{route('admin.management.blog.edit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-4">
                <div class="mb-3 form-group has-feedback">
                    <label>Thay đổi tiêu đề :</label>
                    <input class="form-control" type="text"  value="{{ $blog->title }}" name="title"
                        required="">
                    <!-- Tối thiểu 5 ký tự -->
                </div>

                <div class="gap-2 mb-6 d-flex flex-nowrap">
                    <label class="text-nowrap">Thay đổi danh mục :</label>
                    <div class="">
                        <select class="form-select form-select-sm" aria-label="Small select" required="" name="category">
                            @foreach ($c_aticles as $c_aticle)
                                <option value={{ $c_aticle->name }} {{ $c_aticle->name == $blog->category ? 'selected' : '' }}>{{ $c_aticle->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-6 d-flex flex-nowrap gap-3">
                    <div class="text-nowrap">Thay đổi tag:</div>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach ($tags as $index => $tag)
                            <div class="form-check mr-4">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="tag"
                                    id="radio{{ $index }}"
                                    value="{{ $tag->name }}"
                                    {{ $tag->name == $blog->tag ? 'checked' : '' }}>
                                <label class="form-check-label" for="radio{{ $index }}">
                                    {{ $tag->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image">Thay đổi ảnh bìa bài viết:</label>
                    <input type="file" class="form-control-file" value={{$blog->image}} id="image" name="file_upload" >
                    <em class="text-danger">*Nếu muốn thay đổi thêm ảnh mới tại đây*</em>
                </div>
            </div>

            <label for="image">Thay đổi nội dung bài viết:</label>

            <textarea id="summernote" name="editordata">{{$blog->context}}</textarea>
            <div class="pl-3 mt-5 row justify-content-center w-fit">
                <button type="submit" class="btn btn-danger ">Lưu</button>
            </div>
        </form>
    </div>
    @include('partials.errors')
@endsection
@section('js')
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 500
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
