@extends('dashboard.dashboard')

@section('main_content')
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
        <i class="ti ti-plus"></i>
        Thêm Mới
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Thêm thể loại bài đăng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="dmg-register-form">
                        <form action="{{ route('admin.management.doCreateTag') }}" method="post">
                            @csrf
                            <div class="form-group has-feedback">
                                <label for="name">Nội dung<span class="redstar"> </span></label>
                                <input class="form-control" type="text" placeholder="" name="name" required="">
                                <!-- Tối thiểu 5 ký tự -->
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Xác
                                    Nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-nowrap">
                            <th>ID</th>
                            <th>Nội Dung</th>
                            <th>Ngày Tạo</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <th scope="row">{{ $tag->id }}</th>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->created_at }}</td>
                                <td>
                                    <form action="{{ route('admin.management.deleteTag', $tag->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="ti ti-trash"></i></button>
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
    @include('partials.success')
    @include('partials.errors')
@endsection
