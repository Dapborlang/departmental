<?php

namespace App\Http\Controllers;

use App\FormAutopopulate;
use Illuminate\Http\Request;

class FormAutopopulateController extends Controller
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
        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing("bank_masters");
        $postData='bankmaster';
        $card_header='Bank Master';
        $select = array('');
        $key=array('');
        return view('autoroute.create', compact('columns','postData','card_header','select','key'));
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
     * @param  \App\FormAutopopulate  $formAutopopulate
     * @return \Illuminate\Http\Response
     */
    public function show(FormAutopopulate $formAutopopulate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormAutopopulate  $formAutopopulate
     * @return \Illuminate\Http\Response
     */
    public function edit(FormAutopopulate $formAutopopulate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormAutopopulate  $formAutopopulate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormAutopopulate $formAutopopulate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormAutopopulate  $formAutopopulate
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormAutopopulate $formAutopopulate)
    {
        //
    }
}
