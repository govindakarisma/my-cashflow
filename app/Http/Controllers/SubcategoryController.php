<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subcategory.index', [
            "page" => "Subcategory",
            'subcategories' => collect(Subcategory::latest()->get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcategory.create', [
            "page" => "Cash Flow - Add Subcategory",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:subcategories'
        ]);

        Subcategory::create($validatedData);

        return redirect('/subcategory')->with('toast_success', 'Add Subcategory ' . $request->name . ' has Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        return view('subcategory.edit', [
            "page" => "Cash Flow - Edit Subcategory",
            "subcategory" => $subcategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $rules = [
            'name' => 'required',
        ];

        if ($request->slug != $subcategory->slug) {
            $rules['slug'] = 'required|unique:subcategories';
        }

        $validatedData = $request->validate($rules);

        Subcategory::where('id', $subcategory->id)->update($validatedData);

        return redirect('/subcategory')->with('toast_success', 'Edit Subcategory <br>' . $subcategory->name . ' to ' . $request->name . ' has Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        Subcategory::destroy($subcategory->id);

        return redirect('/subcategory')->with('toast_success', 'Delete Subcategory ' . $subcategory->name . ' has Successful!');
    }
}
