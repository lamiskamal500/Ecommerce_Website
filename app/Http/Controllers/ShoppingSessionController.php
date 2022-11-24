<?php

namespace App\Http\Controllers;

use App\Models\ShoppingSession;
use App\Http\Requests\StoreShoppingSessionRequest;
use App\Http\Requests\UpdateShoppingSessionRequest;

class ShoppingSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShoppingSessionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShoppingSessionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShoppingSession  $shoppingSession
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingSession $shoppingSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShoppingSession  $shoppingSession
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingSession $shoppingSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShoppingSessionRequest  $request
     * @param  \App\Models\ShoppingSession  $shoppingSession
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShoppingSessionRequest $request, ShoppingSession $shoppingSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShoppingSession  $shoppingSession
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingSession $shoppingSession)
    {
        //
    }
}
