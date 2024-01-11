<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Kreait\Firebase\Contract\Database;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'contacts';
    }

    public function index(){
        $contacts = $this->database->getReference($this->tablename)->getValue();
        $total_contacts = $this->database->getReference($this->tablename)->getSnapshot()->numChildren();
        return view('firebase.contact.index', compact('contacts', 'total_contacts'));
    }

    public function create(Request $request){

        return view('firebase.contact.create');

    }

    public function store(Request $request){
        $postData = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if($postRef){
            return redirect('contacts')->with('status', 'Contact created successfully');
        }
        else{
            return redirect('contacts')->with('status', 'Contact not added');
        }
    }

    public function edit($id){

        $key = $id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();
        if ($editdata) {
            return view('firebase.contact.edit', compact('editdata', 'key'));
        } else {
            return redirect('contacts')->with('status', 'Contact ID not found');
        }        
        
    }

    public function update(Request $request, $id){

        $key = $id;
        $updateData = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $res_updated = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);
        if ($res_updated) {
            return redirect('contacts')->with('status', 'Contact updated successfully');
        } else {
            return redirect('contacts')->with('status', 'Contact not updated');
        }
        
    }

    public function destroy($id){

        $key = $id;
        $del_data = $this->database->getReference($this->tablename.'/'.$key)->remove();
        if($del_data){
            return redirect('contacts')->with('status', 'Contact deleted successfully');
        }
        else{
            return redirect('contacts')->with('status', 'Contact not deleted');
        }

    }
    
}
