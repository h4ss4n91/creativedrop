<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Redirect;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $services = DB::table('services')
        ->join('menus','menus.id','=','services.main_service')
        ->join('child_menus','child_menus.id','=','services.sub_service')
        ->join('sub_child_menus','sub_child_menus.id','=','services.third_service')
        ->select('sub_child_menus.item_name as third_level_menu_name','child_menus.item_name as second_level_menu_name','child_menus.item_link as second_level_menu_link','sub_child_menus.item_link as third_level_menu_link','menus.menu_name as first_level_menu_name', 'services.*')
        ->get();

        

        $pages = DB::table('page')->get();
        return view('backend.services',Compact('services','pages'));
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
