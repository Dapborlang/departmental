<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormPopulate;
use App\FormPopulateIndex;

class FormBuilderController extends Controller
{
    
    public function index($id)
    {
        $model=FormPopulate::findOrFail($id);
        $values='App\\'.$model->model;
        $table=$values::all();
        $exclude=json_decode($model->index->exclude);
        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing($model->table_name);
        return view('formview.index', compact('columns','model','exclude','table')); 
    }
    
    public function create($id)
    {
        $model=FormPopulate::findOrFail($id);
        $masterKey=json_decode($model->index->master_keys, true);
        $foreign=json_decode($model->index->foreign_keys, true);
        $class=json_decode($model->index->class, true);
        $attribute=json_decode($model->index->attribute, true);
        $scriptKey=json_decode($model->index->script, true);
        $select=array();
        $master=array();
        $key=array();

        if(sizeof((array)$masterKey)>0)
        {
            foreach (array_keys($masterKey) as $item) {
                $values='App\\'.$item;
                $data=$values::all();
                $master[$masterKey[$item][2]]=array($data,$masterKey[$item][0],$masterKey[$item][1],$masterKey[$item][3]);
            }
        }
        
        if(sizeof((array)$foreign)>0)
        {
            foreach (array_keys($foreign) as $key) {
                $values='App\\'.$key;
                $data=$values::all();
                $select[$foreign[$key][0]]=array($data,$foreign[$key][1],$foreign[$key][2]);
            }
        }

        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing($model->table_name);

        return view('formview.create', compact('columns','model','select','master','scriptKey','class','attribute')); 
    }

    
    public function store(Request $request, $id)
    {
        $model=FormPopulate::findOrFail($id);
        $values='App\\'.$model->model;
        $data=$values::create($request->all());
        return redirect()->back()->with('message', 'Added Successfully');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
