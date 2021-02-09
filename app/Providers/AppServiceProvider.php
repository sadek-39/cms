<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Http\view\Composer\ViewComposer;
use App\Http\Controllers\AdminController;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $url=env('PDLCAPIHOST').'/admin/settingsview';
        // $data=new AdminController;
        // $data->getCurlApiRequest($url);

        // // $data=getCurlApiRequest($url);
        // // $dataconvert=(string)$data;
        
        // var_dump($data);
        // //$datatoarray=(array)$data;

        // //var_dump($datatoarray);
        // //$datade=json_decode($data);
        // // $url=env('PDLCAPIHOST').'/admin/settingsview';
        // //$data->json_encode(getCurlApiRequest($url));
        // View::share('data', $data);

    }
}
