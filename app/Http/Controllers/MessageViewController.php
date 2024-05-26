<?php

namespace App\Http\Controllers;

use App\Models\MessageView;
use App\Http\Requests\StoreMessageViewRequest;
use App\Http\Requests\UpdateMessageViewRequest;

class MessageViewController extends Controller
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
    public function store(StoreMessageViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MessageView $messageView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MessageView $messageView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageViewRequest $request, MessageView $messageView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MessageView $messageView)
    {
        //
    }
}
