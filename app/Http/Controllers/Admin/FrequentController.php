<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frequent;
use Illuminate\Http\Request;

class FrequentController extends Controller
{
    public function index()
    {
        $frequents = Frequent::latest()->get();
        return view('admin.frequent.index', compact('frequents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frequent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $frequent = new Frequent();
        $frequent->question = $request->question;
        $frequent->answare = $request->answare;
        $frequent->save();
        return redirect()->back()->with('success', 'Team saved successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $frequent = Frequent::findOrFail($id);
        return view('admin.frequent.edit', compact('frequent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $frequent = Frequent::findOrFail($id);
        $frequent->question = $request->question;
        $frequent->answare = $request->answare;
        $frequent->save();

        return redirect('frequents')->with('message', 'Frequent edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $frequent = Frequent::findOrFail($id);

        // Delete the Team record
        $frequent->delete();

        // Redirect back with a success message
        return redirect('frequents');
    }
}
