<?php

namespace App\Http\Controllers;

use App\Models\secteurs_activites;
use App\Http\Requests\Storesecteurs_activitesRequest;
use App\Http\Requests\Updatesecteurs_activitesRequest;

class SecteursActivitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storesecteurs_activitesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(secteurs_activites $secteurs_activites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(secteurs_activites $secteurs_activites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatesecteurs_activitesRequest $request, secteurs_activites $secteurs_activites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(secteurs_activites $secteurs_activites)
    {
        //
    }
}
