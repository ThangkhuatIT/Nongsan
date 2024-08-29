@extends('dashboard.dashboard')

@section('main_content')
    <h3>Quản lý bài viết</h3>
    <!-- start page title -->
    <a class="btn btn-primary waves-effect waves-light" href="{{route('admin.management.createblogs')}}"><i
            class="bx bx-edit-alt"></i> Tạo bài viết mới</a>
    <!-- end col -->
    <hr>
    <h3>Danh sách bài viết</h3>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu Đề</th>
                            <th>Ngày đăng</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $blog->id }}</th>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->created_at }}</td>
                                <td>
                                    <form action="#" method="">
                                        <button type="button" class="btn btn-danger waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop4"
                                            title="Xóa bài viết"> XÓA
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                        <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Xóa bài viết <span class="text-danger">1-</span>:</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn có chắc chắn muốn xóa  <span
                                                            class="text-danger">1-</span> hay không?
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button"
                                                            class="btn btn-secondary waves-effect waves-light"
                                                            data-bs-dismiss="modal">Quay lại</button>
                                                        <form action="#"
                                                            method="">
                                                            <button type="submit"
                                                                class="btn btn-danger waves-effect waves-light">Xóa</button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <!-- end card-body-->
    </div>
@endsection
