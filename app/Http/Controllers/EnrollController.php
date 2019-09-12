<?php

namespace App\Http\Controllers;

use App\Eventstudent;
use Illuminate\Http\Request;
use App\CustomClass\EnrollData;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.eventStudent')->with([
            'url'=>'enrollment'
        ]);
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
        // Eventstudent::create($request->all());
        //return $request->all();
        $event_id = $request->get('event_id');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $job = $request->get('job');
        $education = $request->get('education');
        $address = $request->get('address');
        Eventstudent::create([
            'event_id' => $event_id,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'job' => $job,
            'education' => $education,
            'address' => $address
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $enrolls=Eventstudent::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($enrolls as $data){
            $enroll_data=new EnrollData($data->id);
            array_push($arr,$enroll_data->getEnrollData());
        }
        // return $arr;
         return json_encode($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Eventstudent::find($id)->delete();
    }
}
