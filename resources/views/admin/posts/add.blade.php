@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Add Posts</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Posts', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                {{-- Thông báo lỗi khi (thêm/xóa/sửa) không thành công --}}
                @if (session('error'))
                    <div id="errorAlert" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- Thông báo thành công khi (thêm/xóa/sửa) thành công --}}
                @if (session('success'))
                    <div id="successAlert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter title"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" name="author" placeholder="Enter author"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" placeholder="Enter content" style="height: 200px;"></textarea>
                            </div>

                            <div class="form-row mb-3">
                                @for ($i = 0; $i <= 4; $i++)
                                    <div class="col-md-2 col-img">
                                        <label for="">Image {{ $i + 1 }}</label>
                                        <div class="avatar-upload">
                                            <div>
                                                <input type="file" name="img{{ $i + 1 }}"
                                                    id="input-file-img{{ $i + 1 }}" accept="image/png, image/jpg, image/jpeg"
                                                    onchange="previewImage(this, 'profile-img{{ $i + 1 }}')">
                                            </div>
                                            <img src="{{ asset('images/') }}" alt=""
                                                id="profile-img{{ $i + 1 }}">
                                        </div>
                                    </div>
                                @endfor
                                <div class="col-md-2 col-img my-3">
                                    <a class="btn btn-dark">Clear</a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
                            <a type="submit" href="{{ route('cars.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        // Hiển thị thông báo success, error trong 2s
        setTimeout(function() {
            $('#errorAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);
    </script>
@endsection
