<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
class HeaderController extends Controller
{


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $url=env('PDLCAPIHOST').'/header/infoheaders';
    //     $header=new ApiController;
    //     $data=$header->getCurlApiRequest($url);
    //     // $dataconvert=(string)$data;
        
    //     //var_dump($data);
    //    // $datatoarray=(array)$data;

    //     //var_dump($datatoarray);
    //     $datade=json_decode($data);
    //     // var_dump($datade);
    //     View::share('headersdata',$datade);//share data to all views


    // }
    public function index()
    {
        //
    }
    public function addform()
    {
        return view('admin.addheaderform');
    }
    public function showall()
    {
        $url=env('PDLCAPIHOST').'/header/infoheaders';
        $header=new ApiController;
        $headerdata=$header->getCurlApiRequest($url);
        $headerjson=json_decode($headerdata);
        // var_dump($headerjson);
        return view('admin.admin-header',['data'=>$headerjson]);
    }
    public function showone($id)
    {
        $url=env('PDLCAPIHOST').'/header/infosingleheader/'.$id;
        $header=new ApiController;
        $headerdata=$header->getsinglecurlrequest($url);
        $headerjson=json_decode($headerdata);
        //var_dump($headerjson);
        return view('admin.editheader',['data'=>$headerjson]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=[
            'menu_name'=>$request->menu_name,
            'url'=>$request->header_url
        ];
        $url=env('PDLCAPIHOST').'/header/create';
        $header=new ApiController;
        $header->Curlapirequest($data,$url);
        return redirect('/admindashboard');
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
        $url=env('PDLCAPIHOST').'/header/headerupdate/'.$id;
        $data=[
            'menu_name'=>$request->menu_name,
            'url'=>$request->header_url
        ];
        $header=new ApiController;
        $headerdata=$header->updatecurlrequest($data,$url);
        // $headerjson=json_decode($headerdata);
        return redirect('/adminheader');
        
        
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
