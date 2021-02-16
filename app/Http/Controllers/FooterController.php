<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class FooterController extends Controller
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
        $url=env('PDLCAPIHOST').'/footer/footerupdate/'.$id;
        $data=[
            'menu_name'=>$request->menu_name,
            'url'=>$request->footer_url
        ];
        $footer=new ApiController;
        $footer->updatecurlrequest($data,$url);

        return redirect('/adminfooter');
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
    public function showall()
    {
        $url=env('PDLCAPIHOST').'/footer/infofooters';
        $footer=new ApiController;
        $footerdata=$footer->getCurlApiRequest($url);
        $footerjson=json_decode($footerdata);

        return view('admin.admin-footer',['data'=>$footerjson]);
    }
    public function showone($id)
    {
        $url=env('PDLCAPIHOST').'/footer/infosinglefooter/'.$id;
        $footer=new ApiController;
        $footerdata=$footer->getsinglecurlrequest($url);
        // var_dump($footerdata);
        $footerjson=json_decode($footerdata);
        // var_dump($footerjson);

        return view('admin.editfooter',['data'=>$footerjson]);
    }
}
