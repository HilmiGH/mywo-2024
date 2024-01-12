<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Kreait\Firebase\Contract\Database;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'inventory';
    }

    public function index(){
        $objects = $this->database->getReference($this->tablename)->getValue();
        $total_objects = $this->database->getReference($this->tablename)->getSnapshot()->numChildren();
        return view('admin_website.inventory', compact('objects', 'total_objects'));
    }

    public function create(Request $request){

        return view('admin_website.inventory_create');

    }

    public function store(Request $request){
        $postData = [
            'object_type' => $request->object_type,
            'object_name' => $request->object_name,
            'object_category' => $request->object_category,
            'object_stock' => $request->object_stock,
            'object_price' => $request->object_price,
            'object_desc' => $request->object_desc,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if($postRef){
            return redirect('inventory')->with('status', 'Object created successfully');
        }
        else{
            return redirect('inventory')->with('status', 'Object not added');
        }
    }

    public function edit($id){

        $key = $id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();
        if ($editdata) {
            return view('admin_website.inventory_edit', compact('editdata', 'key'));
        } else {
            return redirect('inventory')->with('status', 'Object ID not found');
        }        
        
    }

    public function update(Request $request, $id){

        $key = $id;
        $updateData = [
            'object_type' => $request->object_type,
            'object_name' => $request->object_name,
            'object_category' => $request->object_category,
            'object_stock' => $request->object_stock,
            'object_price' => $request->object_price,
            'object_desc' => $request->object_desc,
        ];
        $res_updated = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);
        if ($res_updated) {
            return redirect('inventory')->with('status', 'Object updated successfully');
        } else {
            return redirect('inventory')->with('status', 'Object not updated');
        }
        
    }

    public function destroy($id){

        $key = $id;
        $del_data = $this->database->getReference($this->tablename.'/'.$key)->remove();
        if($del_data){
            return redirect('inventory')->with('status', 'Object deleted successfully');
        }
        else{
            return redirect('inventory')->with('status', 'Object not deleted');
        }

    }
}
