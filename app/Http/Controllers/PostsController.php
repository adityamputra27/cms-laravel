<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Posts;
use App\Category;
use App\Tags;
use Auth;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(2);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
    	$tags = Tags::all();
    	$category = Category::all();
        return view('admin.posts.create', compact('category', 'tags'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]); 

        $gambar = $request->file('gambar');
        $nama_file = time()."_".$gambar->getClientOriginalName();
        $tujuan_upload = 'uploads/posts';
        $gambar->move($tujuan_upload, $nama_file);

        $posts = Posts::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => $nama_file,
            'slug' => Str::slug($request->judul),
            'users_id' => Auth::id()
        ]);

        $posts->tags()->attach($request->tags);

        if ($posts) {
        	return redirect('admin/posts')->with('success', 'Postingan Anda Berhasil Disimpan!');
        }
        else
        {
        	return redirect('admin/posts')->with('danger', 'Postingan Anda Gagal Disimpan!');
        }
        
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
    	$category = Category::all();
    	$tags = Tags::all();
        $posts = Posts::findorfail($id);
        return view('admin.posts.edit', compact('posts', 'tags', 'category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]); 

        $posts = Posts::findorfail($id);

        if ($request->has('gambar')) {
        	$gambar = $request->file('gambar');
	        $nama_file = time()."_".$gambar->getClientOriginalName();
	        $tujuan_upload = 'uploads/posts';
	        $gambar->move($tujuan_upload, $nama_file);

	        $posts_data = [
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => $nama_file,
            'slug' => Str::slug($request->judul)
        	];
        }
        else
        {
        	$posts_data = [
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'slug' => Str::slug($request->judul)
        	];
        }

        $posts->tags()->sync($request->tags);
        $posts->update($posts_data);

        if ($posts->update($posts_data)) {
        	return redirect('/admin/posts')->with('success', 'Postingan Anda Berhasil Di Update!');
        }
        else
        {
        	return redirect('/admin/posts')->with('danger', 'Postingan Anda Gagal Di Update!');
        }
    }
    public function destroy($id)
    {
        $posts = Posts::findorfail($id);
        $posts->delete();

        if ($posts) {
            return redirect('/admin/posts')->with('success', 'Data Berhasil Dihapus! (Silahkan Cek di Recycle Bin Post)');
        } 
        else 
        {
            return redirect('/admin/posts')->with('danger', 'Data Gagal Dihapus');
        }
    }
    public function tampil_hapus()
    {
    	$posts = Posts::onlyTrashed()->paginate(2);
    	return view('admin.trashed_posts.index', compact('posts'));
    }
    public function restore($id)
    {
    	$posts = Posts::withTrashed()->where('id', $id)->first();
    	$posts->restore();

    	if ($posts) {
            return redirect('/admin/posts/recycle')->with('success', 'Data Berhasil Di Restore Kembali! (Silahkan Cek Postingan Anda)');
        } 
        else 
        {
            return redirect('/admin/posts/recycle')->with('danger', 'Data Gagal Dihapus');
        }
    }
    public function kill($id)
    {
    	$posts = Posts::withTrashed()->where('id', $id)->first();
    	$posts->forceDelete();

    	if ($posts) {
            return redirect('/admin/posts/recycle')->with('success', 'Data Berhasil Dihapus Secara Permanen!');
        } 
        else 
        {
            return redirect('/admin/posts/recycle')->with('danger', 'Data Gagal Dihapus');
        }
    }
}
