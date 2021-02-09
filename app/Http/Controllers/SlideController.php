<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SlideController extends Controller
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
    public function create(Request $request)
    {
        $slide=new ApiController;
        $data=[
            'sdid' => $_POST['sdid'],
            'slide_title' =>$_POST ['slide_title'],
            'slide_page_url' => $_POST['slide_pageurl'],
            'image'=>$request->slide_image,
            'slide_target_url' => $_POST['slide_target_url'],
            'slide_text' => $_POST['slide_text'],
            'sid' => $_POST['sid']
        ];
        //var_dump($data);
       
        $url=env('PDLCAPIHOST').'/slide/createslide';
        // var_dump($url);
        $da=$slide->Curlapirequest($data,$url);
        

        // var_dump($da);
        
       return redirect('/admindashboard');
    }
    // public function apicreate($data,$url)
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //     CURLOPT_URL => $url,
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'POST',
    //     CURLOPT_POSTFIELDS => $data,
    //     ));

    //     $response = curl_exec($curl);

    //     curl_close($curl);
    //     echo $response;
    // }

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
    public function update(Request $request, $id )
    {

        return view('admin.admin-manageslide');
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
    public function slideinfo($id)
    {
        $url=env('PDLCAPIHOST').'/slide/showslideinfo/'.$id;
        $slider=new ApiController;
        $sliderData=$slider->getCurlApiRequest($url);
        //var_dump($sliderData);
        $jsonSliderData=json_decode($sliderData);
        //var_dump($jsonSliderData);
        return view('admin.admin-manageslide',['data'=>$jsonSliderData]);

    }
}