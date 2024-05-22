<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(10);
        return view('admin.posts.list', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Chuyển đến trang add
    public function add()
    {
        return view('admin.posts.add');
    }

    // Xử lý chức năng add
    public function store(Request $request)
    {
        $posts = new Posts();
        $posts->title = $request->input('title');
        $posts->author = $request->input('author');
        $posts->content = $request->input('content');
        $posts->slug = \Str::slug($posts->name);

        $MAX_IMAGE = 5;
        $allowedExtensions = ['png', 'jpg', 'jpeg'];
        for ($i = 1; $i <= $MAX_IMAGE; $i++) {
            if ($request->hasFile('img' . $i)) {
                $file = $request->file('img' . $i);
                $extension = $file->getClientOriginalExtension();
                if (!in_array(strtolower($extension), $allowedExtensions)) {
                    return redirect()->back()->with('error', 'Only PNG and JPG images are allowed.');
                }
                $fileName = uniqid() . '.' . $extension;
                $file->move('images/posts/', $fileName);
                $imgJson[] = $fileName;
            }
        }
        $posts->images = json_encode($imgJson);

        // dd($posts);
        try {
            $posts->save();
            return redirect()->route('posts.index')->with('success', 'The posts has been added successfully.');
        } catch (QueryException $e) {
            return redirect()->route('posts.index')->with('error', 'Failed to add posts. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $posts = Posts::find($id);
        if (!$posts) {
            abort(404);
        }

        return view('admin.posts.edit', compact('posts'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id)
    {
        $posts = Posts::find($id);
        $posts->title = $request->input('title');
        $posts->author = $request->input('author');
        $posts->content = $request->input('content');
        $posts->slug = \Str::slug($posts->title);
        $images = json_decode($posts->images);

        $MAX_IMAGE = 5;
        $allowedExtensions = ['png', 'jpg', 'jpeg'];
        $imgJson = []; // Khởi tạo mảng chứa tất cả các ảnh

        for ($i = 1; $i <= $MAX_IMAGE; $i++) {
            if ($request->hasFile('img' . $i)) {
                if (isset($images[$i - 1])) {
                    $oldImg = 'images/posts/' . $images[$i - 1];
                    if (File::exists($oldImg)) {
                        File::delete($oldImg);
                    }
                }

                $file = $request->file('img' . $i);
                $extension = $file->getClientOriginalExtension();
                if (!in_array(strtolower($extension), $allowedExtensions)) {
                    return redirect()->back()->with('error', 'Only PNG and JPG images are allowed.');
                }
                $fileName = uniqid() . '.' . $extension;
                $file->move('images/posts/', $fileName);
                $imgJson[] = $fileName;
            } elseif (isset($images[$i - 1])) {
                // Nếu không có file mới, nhưng có ảnh cũ, thì thêm ảnh cũ vào mảng
                $imgJson[] = $images[$i - 1];
            }
        }

        // Gán lại mảng ảnh vào thuộc tính images của $posts
        $posts->images = $imgJson;

        // dd($posts);

        try {
            $posts->save();
            return redirect()->route('posts.index')->with('success', 'The posts has been edited successfully.');
        } catch (QueryException $e) {
            return redirect()->route('posts.index')->with('error', 'Failed to edit posts. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        $posts = Posts::find($id);

        if (!$posts) {
            return redirect()->back()->with('error', 'Post not found.');
        }

        $images = json_decode($posts->images, true);

        try {
            $posts->delete();

            // Xóa ảnh sau khi bài viết đã được xóa thành công
            if ($images) {
                foreach ($images as $image) {
                    $oldImg = 'images/posts/' . $image;
                    if (File::exists($oldImg)) {
                        File::delete($oldImg);
                    }
                }
            }

            return redirect()->back()->with('success', 'The post has been deleted successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to delete post. Please try again.');
        }
    }
}
