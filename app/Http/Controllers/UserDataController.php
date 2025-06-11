<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Users::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return ['result'=>'create'];
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         return ['result'=>'store'];
        //
    }

    /**s
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return Users::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         return ['result'=>'edit'];
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         return ['result'=>'update'];
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         return ['result'=>'destroy'];
        //
    }
}
