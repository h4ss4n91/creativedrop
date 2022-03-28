<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Redirect;
class CasestudyController extends Controller
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

    public function detail_case_study($id){
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $case_study = DB::table('case_study')->where('id','=',$id)->get();
        
        $case_study_industries = DB::table('case_study_industries')
            ->join('industries', 'case_study_industries.industry_id', '=', 'industries.id')
            ->where('case_study_industries.case_study_id', '=',  $id)
            ->select('industries.title')->get();

        $case_study_services = DB::table('case_study_services')
            ->join('menus', 'case_study_services.service_id', '=', 'menus.id')
            ->where('case_study_services.case_study_id', '=',  $id)
            ->select('menus.menu_name')->get();

        $case_study_sub_services = DB::table('case_study_services')
            ->join('child_menus', 'case_study_services.sub_service_id', '=', 'child_menus.id')
            ->where('case_study_services.case_study_id', '=',  $id)
            ->select('child_menus.item_name')->get();

        $cs_services = DB::table('case_study_services')
            ->join('menus', 'case_study_services.service_id', '=', 'menus.id')
            ->join('child_menus', 'case_study_services.sub_service_id', '=', 'child_menus.id')
            ->where('case_study_services.case_study_id', '=',  $id)
            ->select('menus.menu_name','child_menus.item_name')->get();
        
        $case_study_detail = DB::table('case_study_content')->where('case_study_id','=',$id)->get();
        return view('backend.case_study_detail', Compact('id', 'cs_services', 'case_study_detail','case_study_sub_services', 'case_study','case_study_industries','case_study_services'));
    }

            public function add_case_study_content(Request $request){
                
                $data = $request->all();

                for ($i = 0; $i < count($request->video); $i++) {

                    if($data['video'][$i] == NULL){
                        $file_content = $data['image'][$i]; // will get all files
                        $file_content_name = $file_content->getClientOriginalName(); //Get file original name
                        $file_content->move(public_path('case_study_content'), $file_content_name); // move files to destination folder

                        DB::table('case_study_content')->insert(
                            [
                                'case_study_id' => $data['case_study_id'],
                                'image' => $file_content_name,
                                'image_name' => $data['image_name'][$i],
                                'image_style' => $data['select_style_for_image'][$i]]
                        );
                    }else{

                        if( $data['select_style_for_video'][$i] == "section-padtop-100 section-padbottom-100"){

                            $case_study_video_background = $data['case_study_video_background'][$i]; // will get all files
                            $case_study_video_background_name = $case_study_video_background->getClientOriginalName(); //Get file original name
                            $case_study_video_background->move(public_path('case_study_content_video_bg'), $case_study_video_background_name); // move files to destination folder
            
                            DB::table('case_study_content')->insert(
                                [
                                'case_study_id' => $data['case_study_id'],
                                    'video_style' => $data['select_style_for_video'][$i],
                                    'video_link' => $data['video'][$i],
                                    'video_name' => $data['video_name'][$i],
                                    'video_background' => $case_study_video_background_name]
                            );

                        }else{
                            DB::table('case_study_content')->insert(
                                [
                                    'case_study_id' => $data['case_study_id'],
                                    'video_style' => $data['select_style_for_video'][$i],
                                    'video_name' => $data['video_name'][$i],
                                    'video_link' => $data['video'][$i]
                                    ]
                            );
                        }
                        
                    }
            }
            return redirect()->back()->with('success_message', 'New Content Added Successfully!');
        }

        public function delete_case_study_content($id){

            $id = DB::table('case_study_content')->where('id', $id)->delete();

            return redirect()->back()->with('delete_message', 'Deleted Successfully!');
        }

        public function edit_case_study_content(Request $request){
            //dd($request);

            $data = $request->all();
            //  dd($data);
            //  die();
            if($data['video'] == NULL){

                $file_content = $request->file('image'); // will get all files
                $file_content_name = $file_content->getClientOriginalName(); //Get file original name
                $file_content->move(public_path('case_study_content'), $file_content_name); // move files to destination folder

                DB::table('case_study_content')
                    ->where('id', $request->case_study_content_id)
                    ->update(
                        [
                        'case_study_id' => $data['case_study_id'],
                        'image' => $file_content_name,
                        'image_name' => $data['image_name'],
                        'image_style' => $data['select_style_for_image'],

                            'video_style' => '',
                            'video_link' => '',
                            'video_name' => '',
                            'video_background' => ''
                    ]
                );
            }else{

                if( $data['select_style_for_video'] == "section-padtop-100 section-padbottom-100"){

                    $case_study_video_background = $data['case_study_video_background']; // will get all files
                    $case_study_video_background_name = $case_study_video_background->getClientOriginalName(); //Get file original name
                    $case_study_video_background->move(public_path('case_study_content_video_bg'), $case_study_video_background_name); // move files to destination folder
    
                    DB::table('case_study_content')
                    ->where('id', $request->case_study_content_id)
                    ->update(
                        [
                            'case_study_id' => $data['case_study_id'],

                            'image' => '',
                            'image_name' => '',
                            'image_style' => '',


                            'video_style' => $data['select_style_for_video'],
                            'video_link' => $data['video'],
                            'video_name' => $data['video_name'],
                            'video_background' => $case_study_video_background_name]
                    );

                }else{
                    DB::table('case_study_content')
                    ->where('id', $request->case_study_content_id)
                    ->update(
                        [
                            'case_study_id' => $data['case_study_id'],

                            'image' => '',
                            'image_name' => '',
                            'image_style' => '',


                            
                            'video_style' => $data['select_style_for_video'],
                            'video_name' => $data['video_name'],
                            'video_link' => $data['video']
                            ]
                    );
                }
            }

            $message = 'Case Study Content Updated Successfully';
        return redirect('admin/detail_case_study/' . $request->case_study_id)->with('edit_message', $message);

            
        }
    }
