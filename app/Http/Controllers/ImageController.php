<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Inertia\Inertia;


class ImageController extends Controller
{
    //
    
public function index()
{
    $images = Image::latest()->paginate(1);

    return Inertia::render('Images/Index', [
        'images' => $images
    ]);
}

public function create()
{
    return Inertia::render('Images/Create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|max:2048'
    ]);

    $path = $request->file('image')->store('uploads', 'public');

    Image::create([
        'title' => $request->title,
        'file_path' => $path,
    ]);

    return redirect()->route('images.index')->with('success', 'Image uploaded!');
}
}
