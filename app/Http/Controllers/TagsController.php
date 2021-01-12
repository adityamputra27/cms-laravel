<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tags::paginate(5);
        return view('admin.tags.index', compact('tags'));
    }

    public function index_user()
    {
        return view('user.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.form');
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
            'name' => 'required | min:2'
        ]); 

        $tags = Tags::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        if ($tags) {
            return redirect('/admin/tags')->with('success', 'Data Berhasil Ditambahkan!');
        } 
        else 
        {
            return redirect('/admin/tags')->with('danger', 'Data Gagal Ditambahkan');
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
        $result = Tags::findorfail($id);
        return view('admin.tags.form', compact('result'));
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
        $tags_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Tags::whereId($id)->update($tags_data);

        if ($tags_data) {
            return redirect('/admin/tags')->with('success', 'Data Berhasil Diupdate!');
        } 
        else 
        {
            return redirect('/admin/tags')->with('danger', 'Data Gagal Diupdate');
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
        $tags = Tags::findorfail($id);
        $tags->delete();

        if ($tags) {
            return redirect('/admin/tags')->with('success', 'Data Berhasil Dihapus!');
        } 
        else 
        {
            return redirect('/admin/tags')->with('danger', 'Data Gagal Dihapus');
        }
    }
}
