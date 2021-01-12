<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(3);
        return view('admin.category.index', compact('category'));
    }

    public function index_user()
    {
        $category = Category::all();
        return view('user.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | min:2',
            'gambar' => 'required'
        ]); 

        $gambar = $request->file('gambar');
        $nama_file = time()."_".$gambar->getClientOriginalName();
        $tujuan_upload = 'uploads/category';
        $gambar->move($tujuan_upload, $nama_file);

        $category = Category::create([
            'name' => $request->name,
            'gambar' => $nama_file,
            'slug' => Str::slug($request->name)
        ]);

        if ($category) {
            return redirect('/admin/category')->with('success', 'Data Berhasil Ditambahkan!');
        } 
        else 
        {
            return redirect('/admin/category')->with('danger', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Category::findorfail($id);
        return view('admin.category.form', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category_data = [
            'name' => $request->name,
            // 'foto' => 'public/uploads/category/'.$new_gambar,
            'slug' => Str::slug($request->name)
        ];

        Category::whereId($id)->update($category_data);

        if ($category_data) {
            return redirect('/admin/category')->with('success', 'Data Berhasil Diupdate!');
        } 
        else 
        {
            return redirect('/admin/category')->with('warning', 'Data Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findorfail($id);
        $category->delete();

        if ($category) {
            return redirect('/admin/category')->with('success', 'Data Berhasil Dihapus!');
        } 
        else 
        {
            return redirect('/admin/category')->with('danger', 'Data Gagal Dihapus');
        }
    }
}
