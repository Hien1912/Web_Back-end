<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $validated = $request->validated();

        if ($request->avatar) {
            $type = $request->avatar->getClientOriginalExtension();
            $data = file_get_contents($request->avatar->getRealPath());
            $avatar = "data:image/$type;charset=utf-8;base64," . base64_encode($data);

            DB::table('posts')->insert([
                'title' => request('title'),
                'content' => request('content'),
                'avatar' => $avatar
            ]);

            return redirect()->route('post.create')->withSuccess('Success');
        }

        DB::table('posts')->insert([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect()->route('post.create')->withSuccess('create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('post.view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        $validated = $request->validated();

        if ($request->avatar) {
            $type = $request->avatar->getClientOriginalExtension();
            $data = file_get_contents($request->avatar->getRealPath());
            $avatar = "data:image/$type;charset=utf-8;base64," . base64_encode($data);

            DB::table('posts')->where('id', $id)->update([
                'title' => request('title'),
                'content' => request('content'),
                'avatar' => $avatar
            ]);

            return redirect()->route('post.edit', ['post' => $id])->withSuccess('Success');
        }

        DB::table('posts')->where('id', $id)->update([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect()->route('post.edit', ['post' => $id])->withSuccess('Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect()->route('post.index')->withSuccess("Delete success!");
    }
}
