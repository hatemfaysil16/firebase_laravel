<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class ContactController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'contacts';

    }

    public function index()
    {
        $contacts = $this->database->getReference($this->tablename)->getValue();;
        return view('firebase.contact.index',compact('contacts'));
    }

    public function create()
    {
        return view('firebase.contact.create');
    }

    public function store(Request $request)
    {
        $postData = [
            'fname'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ];

        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if($postRef)
        {
            return redirect('contents')->with('status','Contact Added Successflly');
        }else{
            return redirect('contents')->with('status','Contact Not Added');
        }
    }


}
