<?php

namespace App\Http\Controllers;

use App\FormPopulate;
use Illuminate\Http\Request;

class FormPopulateController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing("form_populates");
        $postData='formpopulate';
        $card_header='Form Populate Master';
        $select = array('');
        $key=array('');
        return view('formpopulate.create', compact('columns','postData','card_header','select','key'));
    }

    public function store(Request $request)
    {
        // $excluded=json_encode(explode(',', $request->exclude));
        $formPopulate=new FormPopulate();
        $formPopulate->table_name    =   $request->table_name;
        $formPopulate->model        =   $request->model;
        $formPopulate->route        =   $request->route;
        $formPopulate->header       =   $request->header;
        // $formPopulate->exclude      =   $excluded;
        $formPopulate->save();
        return redirect('formpopulateall')->with('message', 'Form Added');

    }

    public function show(FormPopulate $formPopulate)
    {
        //
    }


    public function edit(FormPopulate $formPopulate)
    {
        //
    }


    public function update(Request $request, FormPopulate $formPopulate)
    {
        //
    }


    public function destroy(FormPopulate $formPopulate)
    {
        //
    }

    public function resources()
    {        
        $formPopulate=FormPopulate::all();
        return view('formpopulate.resources',compact('formPopulate'));
    }
}
