<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;
use App\Http\Requests\StoreImage;

class ImageController extends Controller
{
    private $image;
    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function getImages()
    {
        return view('images')->with('images', auth()->user()->images);
    }

    public function postUpload(StoreImage $request)
    {
        $path = Storage::disk('s3')->put('images/', $request->file);
        $request->merge([
            'size' => $request->file->getClientSize(),
            'path' => $path
        ]);
        $this->image->create($request->only('path', 'title', 'size'));
        return back()->with('success', 'Image Successfully Saved');
    }
}
