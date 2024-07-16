<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }


    public function DashbodeIndex()  {
        $videos=video::all();
        return view('layouts.videos',compact('videos'));
        
    }
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.show', compact('video'));
    }




    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'video' => 'required|file|mimes:mp4,mov,avi,wmv|max:2048',
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        $video = new Video();
        $video->name = $request->name;
        $video->details = $request->details;
        $video->video_path = $videoPath;
        $video->save();
      
       
        return redirect('/videoss')->with('info', '  Video uploaded successfully');


    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
        ]);
    
        $video = Video::findOrFail($id);
        $video->name = $request->name;
        $video->details = $request->details;
    
        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($video->video_path); // Delete the old video
            $videoPath = $request->file('video')->store('videos', 'public');
            $video->video_path = $videoPath;
        }
    
        $video->save();
     
        return redirect('/videoss')->with('info', '  Video update successfully');
    }
    

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        Storage::disk('public')->delete($video->video_path);
        $video->delete();

        return back()->with('info', '  Video destroy successfully!');
    }
}
