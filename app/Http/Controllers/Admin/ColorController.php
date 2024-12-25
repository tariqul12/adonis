<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use COM;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::latest()->get();
        return view('admin.color.index', compact('colors'));
    }
    public function create()
    {
        return view('admin.color.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'        => 'required|string|unique:colors,name',
                'code'        => 'required|string|unique:colors,code',
            ]
        );
        $color              = new Color();
        $color->name        = $request->name;
        $color->code        = $request->code;
        $color->status      = $request->status;
        $color->save();

        return back()->with('message', 'Color info created successfully');
    }
    public function edit($id)
    {
        $color = Color::findOrfail($id);
        return view('admin.color.edit', compact('color'));
    }
    public function update(Request $request, $id)
    {
        $color = Color::find($id);
        $color->name        = $request->name;
        $color->code        = $request->code;
        $color->status      = $request->status;
        $color->save();
        return redirect('/color/index')->with('message', 'Color info updated successfully');
    }
    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        return redirect('/color/index')->with('message', 'Color info deleted successfully');
    }
}
