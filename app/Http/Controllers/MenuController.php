<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class MenuController extends Controller
{

    private $default_menu_size = 10;
    private $minimum_menu_items = 1;
    private $maximum_menu_items = 25;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->page($this->default_menu_size);
    }



    public function page($count) 
    {
        // Count needs to be an integer, and a reasonable one.
        $count = intval($count);
        if ( $count < $this->minimum_menu_items || $count > $this->maximum_menu_items ) {
            $count = $this->default_menu_size;
        }

        $menu_items = [];
        for ($i = 1; $i <= $count; $i++) {
            array_push( $menu_items, new \App\Entree );
        }

        $menu = [
            'created_at' => Carbon::now(),
            'menu_size' => $count,
            'menu_items' => $menu_items
        ];
    
        return $menu;
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
