<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ActorRequest;

use Illuminate\View\View;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        return view('actors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ActorRequest $request)
    {
        $actor['name'] = $request->input('name');
        $actor['nationality'] = $request->input('nationality');
        $actor['year'] = $request->input('year');

        return view('actors.store', compact('actor'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $actor):view
    {
        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $actor):view
    {
        return view('actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     */
    /*
    public function update(Request $request, string $id)
    {
        //
    }
    */
    /**
     * Remove the specified resource from storage.
     */
    /*
    public function destroy(string $id)
    {
        //
    }
    */
}
