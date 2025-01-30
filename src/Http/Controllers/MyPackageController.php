<?php

namespace :uc:vendor\:uc:package\Http\Controllers;

use :uc:vendor\:uc:package\Http\Controllers\Controller;
use :uc:vendor\:uc:package\Repositories\:uc:packageRepository;

class :uc:packageController extends Controller
{

    /**
    * Create a controller instance.
    * 
    * @return void
    */
    public function __construct(protected :uc:packageRepository $:lc:packageRepository)
    {
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return "";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
