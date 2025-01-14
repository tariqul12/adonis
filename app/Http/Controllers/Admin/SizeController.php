<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::latest()->get();
        return view('admin.size.index', compact('sizes'));
    }
    public function create()
    {
        return view('admin.size.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'        => 'required|string|unique:sizes,name',
                'code'        => 'required|string|unique:sizes,code',
            ]
        );
        $size              = new Size();
        $size->name        = $request->name;
        $size->code        = $request->code;
        $size->status      = $request->status;
        $size->save();

        return back()->with('message', 'size info created successfully');
    }
    public function edit($id)
    {
        $size = Size::findOrfail($id);
        return view('admin.size.edit', compact('size'));
    }
    public function update(Request $request, $id)
    {
        $size = Size::find($id);
        $size->name        = $request->name;
        $size->code        = $request->code;
        $size->status      = $request->status;
        $size->save();
        return redirect('/size/index')->with('message', 'Size info updated successfully');
    }
    public function destroy($id)
    {
        $size = Size::find($id);
        $size->delete();
        return redirect('/size/index')->with('message', 'Size info deleted successfully');
    }
}
