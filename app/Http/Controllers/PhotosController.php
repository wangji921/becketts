<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoRequest;
use Auth;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	// public function index()
	// {
    //     // $photos = Photo::paginate();
    //     $photos = Photo::with('user', 'category')->paginate(30);
	// 	return view('photos.index', compact('photos'));
    // }

    public function index(Request $request, Photo $photo)
    {
        $photos = $photo->withOrder($request->order)->paginate(20);
        return view('photos.index', compact('photos'));
    }

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

	public function create(Photo $photo)
	{
        $categories = Category::all();
		return view('photos.create', compact('photo', 'categories'));
	}

	public function store(PhotoRequest $request, Photo $photo)
	{
        $photo->fill($request->all());
        $photo->user_id = Auth::id();
        $photo->save();
		// $photo = Photo::create($request->all());
		return redirect()->route('photos.show', $photo->id)->with('message', 'Created successfully.');
	}

	public function edit(Photo $photo)
	{
        $this->authorize('update', $photo);
		return view('photos.edit', compact('photo'));
	}

	public function update(PhotoRequest $request, Photo $photo)
	{
		$this->authorize('update', $photo);
		$photo->update($request->all());

		return redirect()->route('photos.show', $photo->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Photo $photo)
	{
		$this->authorize('destroy', $photo);
		$photo->delete();

		return redirect()->route('photos.index')->with('message', 'Deleted successfully.');
    }

    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }
    }
}