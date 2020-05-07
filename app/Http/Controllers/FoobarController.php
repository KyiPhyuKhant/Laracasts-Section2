<?php

namespace App\Http\Controllers;

use App\Foobar;
use Illuminate\Http\Request;

class FoobarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->input('foo');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foobar  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Foobar $foobar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foobar  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Foobar $foobar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foobar  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foobar $foobar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foobar  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foobar $foobar)
    {
        //
    }
}
