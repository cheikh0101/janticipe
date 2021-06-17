<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Forum::latest()->paginate(10);
        return view('forum.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $topic = auth()->user()->forums()->create([
            'title' => request('title'),
            'content' => request('content'),
            'category' => request('category'),
        ]);

        return redirect()->route('forum.show', $topic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */

    public function show(Forum $forum)
    {
        if ($forum->user->genre === "masculin") {
            $image = "https://bootdey.com/img/Content/avatar/avatar1.png";
        } else {
            $image = "https://bootdey.com/img/Content/avatar/avatar1.png";
        }
        return view('forum.show', compact('forum', 'image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        return view('forum.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {

        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required'
        ]);

        $forum->update($data);

        return redirect()->route('forum.show', compact('forum'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        Forum::destroy($forum->id);

        return redirect('/forum');
    }
}
