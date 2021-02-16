<?php

namespace App\Http\View\Composers;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use Illuminate\View\View;


class ViewComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Http\Controllers\AdminController
     */
    protected $data;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $url=env('PDLCAPIHOST').'/header/infoheaders';
        $header=new ApiController;
        $dataheader=$header->getCurlApiRequest($url);
        // $dataconvert=(string)$data;
        
        //var_dump($data);
       // $datatoarray=(array)$data;

        //var_dump($datatoarray);
        $this->data=json_decode($dataheader);
        //$this->data=$dataheader;
        // var_dump($datade);
        //View::share('headersdata',$datade);//share data to all views

        
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    // public function compose(View $view)
    // {
    //     $view->with('da', $this->data);
    // }
    public function compose(View $view)
    {
        $view->with('headersdata', $this->data);
    }
}