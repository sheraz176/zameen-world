<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('stories.index', compact('stories'));
    }

    public function create()
    {
        return view('stories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = null;
        }

        $story = new Story();
        $story->title = $request->input('title');
        $story->body = $request->input('body');
        $story->image = $fileNameToStore;
        $story->save();

        return redirect('/stories')->with('success', 'Story Created');
    }

    public function show($id)
    {
        $story = Story::find($id);
        return view('stories.show', compact('story'));
    }

    public function edit($id)
    {
        $story = Story::find($id);
        return view('stories.edit', compact('story'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }

        $story = Story::find($id);
        $story->title = $request->input('title');
        $story->body = $request->input('body');
        if($request->hasFile('image')) {
            Storage::delete('public/images/'.$story->image);
            $story->image = $fileNameToStore;
        }
        $story->save();

        return redirect('/stories')->with('success', 'Story Updated');
    }

    public function destroy($id)
    {
        $story = Story::find($id);
        if($story->image){
            Storage::delete('public/images/'.$story->image);
        }
        $story->delete();
        return redirect('/stories')->with('success', 'Story Deleted');
    }
}


