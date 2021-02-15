<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SliderController extends Controller
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
        $slider=new ApiController;
        $data=[
            'sid'=>$_POST['sid'],
            'slider_title'=>$_POST['slider_title'],
            'slider_page'=>$_POST['slider_page']
        ];
        $url=env('PDLCAPIHOST').'/slider/createslider';
        $slider->Curlapirequest($data,$url);
        return redirect('/adminslider');
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
        $url=env('PDLCAPIHOST').'/slider/sliderupdate/'.$id;
        $data=[
            'sid'=>$_POST['sid'],
            'slider_title'=>$_POST['slider_title'],
            'slider_page'=>$_POST['slider_page']
        ];
        $sliderupdate=new ApiController;
        $sliderupdatedata=$sliderupdate->updatecurlrequest($data,$url);
        //var_dump($sliderupdatedata);
         $sliderdata=json_decode($sliderupdatedata);
         //var_dump($sliderdata);
        // if($sliderupdatedata){
        //     echo($sliderupdatedata);
        // }
        // else{
        //     return redirect('/adminslider');

        //  }
        return redirect('/adminslider');
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
        $url=env('PDLCAPIHOST').'/slider/showallslider';
        $sliderdata=new ApiController;
        $slidergetdata=$sliderdata->getCurlApiRequest($url);
        //var_dump($slidergetdata);
        // echo"<br>";
        if($sliderjsondecode=json_decode($slidergetdata)){
        //$sliderexplode=explode(" ",$slidergetdata);
       // print_r($sliderexplode)
         return view('admin.admin-slider',['data'=>$sliderjsondecode]);
        }else{
            //return view('admin.admin-dashboard');
            return view('admin.admin-slider',['data'=>$sliderjsondecode]);
        }

    }
    public function showoneslider($id)
    {
        $url=env('PDLCAPIHOST').'/slider/singleslider/'.$id;
        // var_dump($url);
        $singledata=new ApiController;
        $singlesliderdata=$singledata->getsinglecurlrequest($url);
        $jsondata=json_decode($singlesliderdata);
        //var_dump($jsondata);

        return view('admin.updateslider',['data'=>$jsondata]);
    }
}
