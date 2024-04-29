<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $value=0;
        $blogs = Blogs::where('user_id', Auth::id())->get();
        $data=compact('value', 'blogs');
        return view('seeblog')->with($data);
    }
    public function read($id){
        $value=0;
        $blog = Blogs::find($id);

        if (!$blog) {
            return redirect()->route('dashboard')->with('error', 'Blog not found.');
        }

        $data=compact('value', 'blog');
        return view('read')->with($data);
    }
    public function postblog(){
        $value=1;
        $data=compact('value');
        return view('createblog')->with($data);
    }
    public function post(Request $request){

        $path = null;

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/blogs', $fileName);
            $path = 'uploads/blogs/' . $fileName;
        }
    
        Blogs::create([
            'title' => $request->title,
            'description' => $request->description,
            'blog' => $request->blog,
            'img' => $path,
            'user_id' => Auth::id(),
        ]);    

        return redirect('/dashboard');
    }
    public function updateblog(){
        $value=2;
        $blogs = Blogs::where('user_id', Auth::id())->get();
        $data=compact('value','blogs');
        return view('seeblog')->with($data);
    }
    public function update($id){
        $value=2;
        $blog = Blogs::find($id);
        $data=compact('value','blog');
        return view('createblog')->with($data);
    }
    public function edit(Request $request, $id){
        $blog = Blogs::findOrFail($id);
    
        if ($request->hasFile('image')) {
            if ($blog->img) {
                unlink($blog->img);
            }
    
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/blogs', $fileName);
            $path = 'uploads/blogs/' . $fileName;
    
            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
                'blog' => $request->blog,
                'img' => $path,
                'user_id' => Auth::id(),
            ]);
        } else {
            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
                'blog' => $request->blog,
                'user_id' => Auth::id(),
            ]);
        }
    
        return redirect('/dashboard');
    }
    
    public function deleteblog(){
        $value=3;
        $blogs = Blogs::where('user_id', Auth::id())->get();
        $data=compact('value','blogs');
        return view('seeblog')->with($data);
    }
    public function delete($id)
    {
        $post = Blogs::find($id);
        if (!$post) {
            return redirect()->back()->withErrors(['error' => 'Post not found']);
        }
        $post->delete();

        return redirect('/deleteblog');
    }
}
