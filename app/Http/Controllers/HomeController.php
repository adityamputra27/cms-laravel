<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Tags;
use App\Category;
use DB;

class HomeController extends Controller
{
    public function index_user()
    {
        $data = Posts::orderBy('created_at', 'DESC')->paginate(6);
        return view('user.index', compact('data'));
    }
    public function index_admin()
    {
        $total_post = DB::table('posts')->select(DB::raw('COUNT(judul)'))->count();
        $category = DB::table('category')->select(DB::raw('COUNT(name)'))->count();
        $tags = DB::table('tags')->select(DB::raw('COUNT(name)'))->count()->get();
        $users = DB::table('users')->select(DB::raw('COUNT(name)'))->count();
        $posts_hapus = DB::table('posts')->withTrashed()->select(DB::raw('COUNT(judul)'))->count();
    	return view('admin.index', compact('total_post', 'category', 'tags', 'users', 'posts_hapus'));
    }
    public function index_blog()
    {
    	return view('user.blog.index');
    }
    public function detail($slug)
    {
        $tags = Tags::where('slug', $slug)->get();
        $data = Posts::where('slug', $slug)->get();
        return view('user.detail', compact('data', 'tags'));
    }
    public function load_data(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id > 0) {
                $data = DB::table('posts')
                        ->where('id', '<', $request->id)
                        ->orderBy('created_at', 'DESC')
                        ->limit(5)
                        ->get();
            }
            else
            {
                $data = DB::table('posts')
                        ->orderBy('created_at', 'DESC')
                        ->limit(5)
                        ->get();
            }
            $output = '';
            $last_id = '';
            if (!$data->isEmpty()) 
            {
                foreach ($data as $row) 
                {
                    $output .= '
                        <div class="card-category-box">
                            <div class="card-category">
                              <h6 class="category">'.$row->category->name.'</h6>
                            </div>
                        </div>
                            <h5 class="card-title"><a href="">'.$row->judul.'</a></h5>
                            <p class="card-text">'.$row->content.'</p>
                        </div>
                        <div class="card-footer">
                          <div class="post-author">
                            <a href="#">
                              <img src="" alt="" class="avatar rounded-circle">
                              <span class="author">'.$post->users->name.'</span>
                            </a>
                          </div>
                          <div class="post-date">
                            <span class="ion-ios-clock-outline"></span> 10 min
                          </div>
                        </div>
                    ';
                    $last_id = $row->id;
                }
                $output .= '
                    <div class="mb-5">
                        <center>
                            <button type="button" name="load-more-button" id="load-more-button" class="btn btn-load-more" data-id="'.$last_id.'">Load More</button>
                        </center>
                    </div>
                ';
            }
            else
            {
                $output .= '
                    <div class="mb-5">
                        <center>
                            <button type="button" name="load-more-button"  id="load-more-button" class="btn btn-load-more">Tidak Ada Data</button>
                        </center>
                    </div>
                ';
            }
            echo $output;
        }
    }
    public function cari(Request $request)
    {   
        $cari = $request->cari;
        $data = Posts::where('judul', $request->cari)->orWhere('judul', 'like', '%'.$request->cari.'%')->paginate(6);
        return view('user.cari', compact('data', 'cari'));
    }
}
