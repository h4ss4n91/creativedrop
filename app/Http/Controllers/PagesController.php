<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Redirect;
class PagesController extends Controller
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
        $main_menu = DB::table('menus')->where('menu_link', '!=', '#')->orderBy('sorting', 'ASC')->get();
        $pages = DB::table('page')->get();
        $page_section = DB::table('page_section')->get();
        return view('backend.pages_list', Compact('pages', 'main_menu', 'page_section'));
    }

    public function get_page_title_and_slug($id){

        $get_page_title_and_slug = DB::table('sub_child_menus')->where('id', $id)->get();
        return response()->json([
            "page_title"=>$get_page_title_and_slug[0]->item_name,
            "page_link"=>$get_page_title_and_slug[0]->item_link,
        ]);
    }

    public function get_3rd_level_menu ($id){

        $_3rd_level_menu = DB::table('sub_child_menus')->where('child_menu_id', $id)->get();
        
        $options = [];

        foreach($_3rd_level_menu as $row){

            $options[] = '<option value="'.$row->id.'">'.$row->item_name.'</option>';
        }
        $last_option = $options;

        return response()->json(["options"=>$last_option]);
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
