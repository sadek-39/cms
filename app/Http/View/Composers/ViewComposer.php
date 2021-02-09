<?php

namespace App\Http\View\Composers;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\View;

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
    public function __construct(array $data)
    {
        // Dependencies automatically resolved by service container...
        $this->data = $data;
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
    public function compose()
{        
    $data = $this->data;

    View::composer('index', function( $view ) use ($data) 
    {
        //here you can use your $data to compose the view
    } );
}
}