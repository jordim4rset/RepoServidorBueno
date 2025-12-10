<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubjectRequest;
use Illuminate\View\View;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        /**
         * @param subject es el array al cual le insertamos las respuestas del formulario subject.create
         */
        $subject['name'] = $request->input('name');
        $subject['code'] = $request->input('code');
        $subject['cicle'] = $request->input('cicle');
        $subject['curse'] = $request->input('curse');
        return view('subjects.store', compact('subject'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /**
         * Mandamos el id con el compact
         * @param id identificador de la asignatura
         */
        return view('subjects.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
