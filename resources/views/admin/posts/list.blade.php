@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Posts List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Posts', 'key' => 'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
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
                    </div>

                    <div class="col-md-12">
                        <a href="{{ route('posts.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-car" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Posting Date</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($posts))
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($posts as $post)
                                        @php
                                            $images = json_decode($post->images);
                                        @endphp
                                        <tr>
                                            <th scope="row">
                                                {{ ($posts->currentPage() - 1) * $posts->perPage() + $loop->iteration }}
                                            </th>
                                            <td style="max-width: 150px">{{ $post->title }}</td>
                                            <td style="max-width: 250px">{{ \Str::limit($post->content, 100) }}</td>
                                            <td>{{ $post->author }}</td>
                                            <td>{{ $post->posting_date->format('Y-m-d') }}</td>
                                            <td style="max-width: 250px">
                                                @foreach ($images as $image)
                                                    <img class="mb-1" src="{{ asset('images/posts/' . $image) }}"
                                                        alt=""
                                                        style="width: 110px; height: auto; object-fit: fill; border-radius: 3px;">
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning mb-1"
                                                    style="width:70px">Edit</a>
                                                <a href="#" class="btn btn-danger mb-1" style="width: 70px;"
                                                    data-toggle="modal" data-target="#deleteConfirmationModal"
                                                    data-id="{{ $post->id }}" data-name="{{ $post->title }}"
                                                    data-delete-route="posts/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $posts->links() }}
                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
                        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the posts "<span id="entityName"></span>"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
