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
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Thông báo thành công khi (thêm/xóa/sửa) thành công --}}
                        @if (session('success'))
                            <div class="alert alert-success">
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
                                                {{ ($posts->currentPage() - 1) * $posts->perPage() + $loop->iteration }}</th>
                                            <td style="max-width: 150px">{{ $post->title }}</td>
                                            <td style="max-width: 300px">{{ \Str::limit($post->content, 100) }}</td>
                                            <td>{{ $post->author }}</td>
                                            <td>{{ $post->posting_date->format('Y-m-d') }}</td>
                                            <td style="max-width: 230px">
                                                @foreach ($images as $image)
                                                    <img class="mb-1" src="{{ asset('images/posts/' . $image) }}" alt="" 
                                                    style="width: 110px; height: auto; object-fit: fill;">
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('posts.edit', $post->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="{{ route('posts.delete', $post->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $posts->links() }}
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
