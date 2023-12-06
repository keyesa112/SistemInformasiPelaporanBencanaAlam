<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    //return view
    public function index(): View
    {
        if (auth()->user()->level == "admin") {
            $blogs = Blog::latest()->paginate(5);
            return view('blogs.laporadmin', compact('blogs'));
        } else {
            $blogs = Blog::where('user_id', Auth::user()->id)->latest()->paginate(5);

            return view('blogs.lapor', compact('blogs'));
        }
    }

    //return view
    public function create()
    {
        return redirect('/laporan');
    }

    //store
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10',
            'provinsi'   => 'required',
            'kota'   => 'required',
            'kecamatan'   => 'required',
            'kelurahan'   => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        // $image->storeAs('posts', $image->hashName());
        file_put_contents(public_path('posts/') . $image->hashName(), file_get_contents($image->getRealPath()));
        $lokasi =  $request->provinsi . ', '. $request->kota . ", " . $request->kecamatan . ", " . $request->kelurahan . ". ";
        Blog::create([
            'user_id'   => auth()->id(),
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
            'lokasi'   => $lokasi
        ]);

        // Mengisi 'user_id' secara manual dengan ID pengguna yang saat ini masuk
        //redirect to index
        return redirect()->route('blogs.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $blogs = Blog::findOrFail($id);

        //render view with post
        if (auth()->user()->level == "admin") {
            return view('blogs.showadmin', compact('blogs'));
        }
        return view('blogs.show', compact('blogs'));
    }

    //edit
    public function edit(string $id): View
    {
        //get post by ID
        $blogs = Blog::findOrFail($id);

        //render view with post
        if (auth()->user()->level == "admin") {
            return view('blogs.editadmin', compact('blogs'));
        }
        return view('blogs.edit', compact('blogs'));
    }

    //update
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //get post by ID
        $blogs = Blog::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/' . $blogs->image);

            //update post with new image
            $blogs->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {

            //update post without image
            $blogs->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('blogs.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    //destroy
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $blogs = Blog::findOrFail($id);

        //delete image
        Storage::delete('public/blogs/' . $blogs->image);

        //delete post
        $blogs->delete();

        //redirect to index
        return redirect()->route('blogs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
