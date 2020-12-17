<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at' , 'desc')->paginate(2);
        return view('website.blog.index' , compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('website.blog.show' , compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /*********************************Admin****************************************/

    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //   dd($request->all());

        $request->validate([
            'title_ar' => 'required',
            'content_ar' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,bmp,png|max:1199999',
            //   'created_at' => 'required',
        ]);

        $blog = new Blog();
        $blog->title_ar = $request->title_ar;
        $blog->content_ar = strip_tags($request->content_ar);
        // $blog->user_id = Auth::user()->id;
        $blog->is_published = 0;

        if ($file = $request->file('image')) {
            $ext = strtolower($file->getClientOriginalExtension());
            $name =   time() . '_' . $ext;

            $file->move('website/blog/images/', $name);
            $blog->image = 'website/blog/images/' . $name;
        }

        $blog->save();
        session()->flash('message', 'تم حفظ المدونة بنجاح');
        return redirect()-> route('admin.blog.index');
    }

    public function adminIndex()
    {
        $blogs = Blog::orderBy('created_at' , 'desc')->paginate(1);

        return view('dashboard.blog.index' , compact('blogs'));
    }

}
