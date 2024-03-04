<?php

namespace App\Http\Controllers;

use App\Models\CrudTable;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function form_view(){
        return view('crud.insert_form');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required|numeric',
        ]);
    
        $data_insert = new CrudTable();
        $data_insert->name = $request->name;
        $data_insert->address = $request->address;
        $data_insert->mobile = $request->mobile;
        $data_insert->save();
    
        return redirect()->route('display')->with('success', 'Data Insert successfully');
    }
    

    public function display(){
        $data = CrudTable::all();
        return view('crud.display_table', compact('data'));
    }

    public function edit($id){
        $data=CrudTable::find($id);
        return view('crud.edit_form', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $data_update=CrudTable::find($id);
        $data_update->name = $request->name;
        $data_update->address = $request->address;
        $data_update->mobile = $request->mobile;
        $data_update->save();

        return redirect()->route('display')->with('success', 'Data Update');
    }

    public function delete($id){
        $data = CrudTable::find($id)->delete();
        return redirect()->route('display', $id);
    }
}
