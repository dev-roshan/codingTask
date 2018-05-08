<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Storage;
use Validator;
use Redirect;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data=$this->GetData();
        return view('client.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return  view('client.client_add');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

    }
    public function save_data(Request $request)
    {    
        $rules=[
            'name' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'nationality' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ];
       //$gid=$request->gid;
       $v= Validator::make($request->all(),$rules);
       if($v->fails())
       {
        $errors=$v->messages()->toJson();
        $errors = json_decode($errors, true);
        foreach($errors as $key => $value) {
            $errors= $value;
          }
        return Redirect::back()->with('errors',$errors);
       }
        
        
        $client = Client::create($request->all());

        $exists = Storage::disk('csv')->has('file.csv');
        //$file=Storage::get('css/file.sql');
        if($exists)
            $this->add_data($client);
        else
            $this->createFile($client);
        return redirect()->route('index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }
    Public function add_data($client){
        $client=$this->DataChanges($client);
        $client = array($client->toArray());
        $data=$this->GetData();
        $list = array (
            array('Name', 'Gender', 'Phone', 'Mail','address','Nationality','DOB','Education','preferredMode','created_at','updatedat','id')
        );
        $list=array_merge($list, $data,$client);
        $fp = fopen(storage_path().'/csv/file.csv', 'w');
        
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
    }
    
    //create file for the first time
    Public function createFile($client){
        //$header="Name\nDOB\rAddress\rGender\rNationality\rEduction background\rcontact preferred mode\rPhone\rEmail";
        $header="--";
        Storage::disk('csv')->put('file.csv',$header);
        $this->add_data($client);
    }
    // get all data from csv
    public function GetData(){
        $exists = Storage::disk('csv')->has('file.csv');
        //$file=Storage::get('css/file.sql');
        if($exists){
        $fp = fopen(storage_path().'/csv/file.csv', 'rb');
        $filename=storage_path().'/csv/file.csv';
        $data=$this->csv_to_array($filename,',');
        fclose($fp);
        }
        else{
            $data=null;
        }
        
        return $data;
    }
    //convert csv to array
    function csv_to_array($filename='', $delimiter=',')
    {
        if(!file_exists($filename) || !is_readable($filename))
            return FALSE;

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
            {
                if(!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
    //data chages for contact prefer mode and gender
    public function DataChanges($client){
        switch ($client->contact_preferred_mode) {
            case "0":
                $client['contact_preferred_mode']="Phone";
                break;
            case "1":
                $client['contact_preferred_mode']="Email";
                break;
            case "2":
                $client['contact_preferred_mode']="None";
                break;
        }
        switch ($client->gender) {
            case "0":
                $client['gender']="Male";
                break;
            case "1":
                $client['gender']="Female";
                break;
            case "2":
                $client['gender']="Other";
                break;
        }
        return $client;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
