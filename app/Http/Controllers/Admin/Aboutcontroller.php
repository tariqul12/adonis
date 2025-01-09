<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    public function index()
    {
        $about = About::latest()->first();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        self::saveInfo(new About(), $request);
        return back()->with('message', 'About add successfully');
    }

    private static function saveInfo($about, $request)
    {
        $about->title               = $request->title;
        $about->description         = $request->description;
        if ($request->file('image')) {
            $about->image = getFileUrl($request->file('image'), 'uploads/about-image/');
        }
        $about->save();
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        self::saveInfo($about, $request);
        return redirect('about/index')->with('message', 'About edit successfully');
    }
}
