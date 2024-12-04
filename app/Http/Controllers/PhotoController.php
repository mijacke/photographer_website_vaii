<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->paginate(9);
        return view('photos.index', compact('photos'));
    }


    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:32768',
            ]);

            $imagePath = $request->file('image')->store('photos', 'public');

            Photo::create([
                'title' => $request->title,
                'image_path' => $imagePath,
            ]);

            return redirect()->route('photos.index')->with('success', 'Photo added successfully!');
        } catch (\Exception $e) {
            \Log::error('Error storing photo: ' . $e->getMessage());
            return redirect()->route('photos.index')->with('error', 'Error adding photo.');
        }
    }



    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    public function edit(Photo $photo)
    {
        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('photos', 'public');
            $photo->update([
                'title' => $request->title,
                'image_path' => $imagePath,
            ]);
        } else {
            $photo->update($request->only('title'));
        }

        return redirect()->route('photos.index')->with('success', 'Photo updated successfully!');
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photos.index')->with('success', 'Photo deleted successfully!');
    }
}
