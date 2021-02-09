<?php

namespace App\Http\Controllers;
use \GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class PageController extends Controller
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
        
        $data=[
            'first_name'=>$_POST['first_name'],
            'last_name'=>$_POST['last_name'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password']
        ];
        $url=env('PDLCAPIHOST').'/api/createuser';
        $user=new ApiController;

        $user->Curlapirequest($data,$url);

        
        return redirect('/myaccount');
        
    }
    public function login()
    {
        $data=[
            'email'=>$_POST['email'],
            'password'=>$_POST['password']
        ];
        $url=env('PDLCAPIHOST').'/api/login';
        $this->Curlapirequest($data,$url);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    


}
