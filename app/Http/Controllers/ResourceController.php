<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resources.index', [
            "page" => "Cash Resource",
            'resources' => collect(Resource::latest()->get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.create', [
            "page" => "Cash Flow - Add Resource",
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
            'slug' => 'required|unique:resources'
        ]);

        Resource::create($validatedData);

        return redirect('/resource')->with('toast_success', 'Add source of fundsn has Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('resources.edit', [
            "page" => "Cash Flow - Edit Resource",
            "resource" => $resource,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        $rules = [
            'name' => 'required'
        ];

        if ($request->slug != $resource->slug) {
            $rules['slug'] = 'required|unique:resources';
        }

        $validatedData = $request->validate($rules);

        Resource::where('id', $resource->id)->update($validatedData);

        return redirect('/resource')->with('toast_success', 'Berhasil Mengubah <br>' . $resource->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        Resource::destroy($resource->id);

        return redirect('/resource')->with('toast_success', 'Berhasil Menghapus <br>' . $resource->name);
    }
}
