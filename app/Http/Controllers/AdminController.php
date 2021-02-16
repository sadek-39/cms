<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\ViewComposer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $url=env('PDLCAPIHOST').'/admin/settingsview';
        $admin=new ApiController;
        $data=$admin->getCurlApiRequest($url);
        // $dataconvert=(string)$data;
        
        //var_dump($data);
        //$datatoarray=(array)$data;

        //var_dump($datatoarray);
        $datade=json_decode($data);
        View::share('settingsdata',$datade);//share data to all views


    }
    // public function adminslider()
    // {
    //     return view('admin.admin-slider');
    // }
    public function index()
    {
        $url=env('PDLCAPIHOST').'/admin/settingsview';
        $settings=new ApiController;
        $data=$settings->getCurlApiRequest($url);
        // $dataconvert=(string)$data;
        
        //var_dump($data);
        //$datatoarray=(array)$data;

        //var_dump($datatoarray);
        $datade=json_decode($data);
        return view('index',['data'=>$datade]);
    }
    public function admindashboard()
    {
        return view('admin.admin-dashboard');

    }
    public function admintest()
    {
        return view('layouts.adminmaster');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings_creator=new ApiController;
        $data=[
            'title'=>$_POST['title'],
            'meta_keyword'=>$_POST['meta_keyword'],
            'meta_description'=>$_POST['meta_description'],
            'header_section'=>$_POST['header_section'],
            'footer_section'=>$_POST['footer_section'],
            'copyright'=>$_POST['copyright'],
            'social_links'=>$_POST['social_links'],
            'address'=>$_POST['address'],
            'phone'=>$_POST['phone'],
            'email'=>$_POST['email'],
            'fremail'=>$_POST['fremail']
        ];
        $url=env('PDLCAPIHOST').'/admin/settingsform';
        $settings_creator->Curlapirequest($data,$url);
        return view('admin/admin-dashboard');
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
