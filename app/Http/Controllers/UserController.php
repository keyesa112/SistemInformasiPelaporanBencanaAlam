<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\User;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $users = User::latest()->paginate(5);

        //render view with posts
        return view('users.viewuser', compact('users'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required|min:1',
            'email'     => 'required|min:5',
            'password'   => 'required|min:8'
        ]);

        //create post
        User::create([
            'name'     => $request->name,
            'email'     => $request->email,
            'password'   => $request->password
        ]);

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $users = User::findOrFail($id);

        //render view with post
        return view('users.show', compact('users'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $users = User::findOrFail($id);

        //render view with post
        return view('users.edit', compact('users'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required|min:1',
            'email'     => 'required|min:5',
            'password'   => 'required|min:8'
        ]);

        //get post by ID
        $users = User::findOrFail($id);

            //update post with new image
            $users->update([
                'name'     => $request->name,
                'email'     => $request->email,
                'password'   => $request->password
            ]);

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $users = User::findOrFail($id);

        //delete post
        $users->delete();

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
