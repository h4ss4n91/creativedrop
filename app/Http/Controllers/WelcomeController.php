<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function insight(){
        $variable = "";
        return view('insight', Compact('variable'));
    }
    public function send_email(){
        
         $data = array('name'=>"Testing from Creative Drop");
          
          
          Mail::send('mail', $data, function($message) {
             $message->to('dev@creativedrop.com', 'Faiz Awan')->subject
                ('Laravel Basic Testing Mail');
             $message->from('dev@creativedrop.com','From Creative Drop');
          });
          
          print_r(Mail::failures());
          echo "Basic Email Sent. Check your inbox.";
        
    }
    public function case_study($id)
    {
        $pages = DB::table('page')->where('title', '=', $id)->get();
        $case_study = DB::table('case_study')->where('id', '=', $id)->get();
        $case_study_content = DB::table('case_study_content')->where('case_study_id', '=', $id)->get();
        $main_menu = DB::table('menus')->where('menu_link','!=','#')->get();
        $main_menus = "";
        $para_style_1 = "";
        $para_style_2 = "";
        $para_style_3 = "";
        $para_style_4 = "";
        $para_style_5 = "";
        $request = "";
        $industries = "";
        $news = "";
        $client_and_partner = "";
        
        $sliders = "";
        $services = "";
        $team_section = "";
        $videos = "";
        
        return view('case-study', Compact('id','para_style_1', 'case_study', 'case_study_content', 'services', 'main_menus', 'para_style_2', 'main_menu', 'para_style_3', 'para_style_4', 'para_style_5', 'pages','client_and_partner','request','industries','news','case_study','team_section','sliders','videos'));
    }


    public function index($id)
    {
        $pages = DB::table('page')
            ->join('page_detail', 'page.id', '=', 'page_detail.page_id')
            ->where('page.title', '=', $id)
            ->orderBy('page_detail.section_no')
            ->get();

            
        $main_menu = DB::table('menus')->where('menu_link','!=','#')->get();
        $page_section = DB::table('page_section')->get();
        $main_menus = "";
        $para_style_1 = "";
        $para_style_2 = "";
        $para_style_3 = "";
        $para_style_4 = "";
        $para_style_5 = "";
        $request = "";
        $industries = "";
        $news = "";
        $client_and_partner = "";
        $case_study = "";
        $sliders = "";
        $services = "";
        $team_section = "";
        $videos = "";
        
        return view('welcome', Compact('id','para_style_1', 'main_menus', 'services', 'page_section', 'para_style_2', 'main_menu', 'para_style_3', 'para_style_4', 'para_style_5', 'pages','client_and_partner','request','industries','news','case_study','team_section','sliders','videos'));
    }
    public function services_by_id($id){
        
        $sub_category = DB::table('child_menus')->where('menu_id', '=', $id)->get();
        if(count($sub_category)>0){
            $Array = [];
            foreach($sub_category as $row){
                $Array[] = '<option value="'.$row->id.'">'.$row->item_name.'</option>';
            }
            $final_Result = $Array;
            // return response()->json(["sliders" => $final_Result]);
            return $final_Result;
        }else{
            $final_Result= "";
            return $final_Result;
        }
            
    }

    public function services_by_id_with_services ($id){
        
        $exp = explode(",",$id);
        
        $sub_category = DB::table('child_menus')->whereIn('menu_id', $exp)->get();

        $main_category = DB::table('menus')->whereIn('id', $exp)->get();

        $Array = [];
        $Array_li = [];

        foreach($sub_category as $row){
            $Array[] = '<option value="'.$row->id.'">'.$row->item_name.'</option>';
        }

        $final_Result = $Array;
        
        $mainCategoryArray = [];
        $class_nameArray = [];

        foreach($main_category as $row_main_category){

            $mainCategoryArray[] = '<li class="main_service_tag list-inline-item">'.$row_main_category->menu_name.'<span><i id="'.$row_main_category->id.'" onclick="remove_main_service_tag(this);" class="fas fa-times"></i></span></li>';
            $class_nameArray[] = $row_main_category->menu_link;
        }

        $final_main_category_array = $mainCategoryArray;

        

        $class_name_array = $class_nameArray;

        return response()->json(["options" => $final_Result, "subServices"=>$final_main_category_array, "class_name"=>$class_name_array]);
    }

    public function sub_services_by_id ($id){
        
        $exp = explode(",",$id);
        
        $sub_category_id = DB::table('child_menus')->whereIn('id', $exp)->get();
        
        $sub_category_id_array = [];
        $sub_category_menu_id_array = [];
        $main_category_id_array = [];

        foreach($sub_category_id as $row_sub_category){

            $sub_category_id_array[] = '<li class="sub_service_tag list-inline-item">'.$row_sub_category->item_name.'<span><i onclick="remove_sub_service_tag(this);" id="remove_sub_service'.$row_sub_category->id.'" class="fas fa-times"></i></span></li>';
            $class_nameArray[] = $row_sub_category->item_link;
            $sub_category_menu_id_array[] = $row_sub_category->menu_id;
        }

        $main_category_id = DB::table('menus')->whereIn('id', $sub_category_menu_id_array)->get();

        foreach($main_category_id as $row_main_category_id){

            $main_category_id_array[] = '<li class="main_service_tag list-inline-item">'.$row_main_category_id->menu_name.'<span><i id="remove_main_service'.$row_main_category_id->id.'" class="fas fa-times"></i></span></li>';
            $main_category_class_nameArray[] = $row_main_category_id->menu_link;
            
        }

        $final_mainCat_class = $main_category_class_nameArray;
        $final_mainCat = $main_category_id_array;

        $final_sub_category_id_array = $sub_category_id_array;
        $final_class_nameArray = $class_nameArray;

        
        return response()->json(["mainServices"=>$final_mainCat,"main_service_class"=>$final_mainCat_class, "subServices"=>$final_sub_category_id_array, "sub_category_link"=>$final_sub_category_id_array, "class_name"=>$final_class_nameArray]);
    }

    public function industry_by_id ($id){

        $exp = explode(",",$id);
        
        $industries = DB::table('industries')->whereIn('id', $exp)->get();

        $industry_array = [];
        $industry_class_nameArray = [];

        foreach($industries as $row_industries){

            $industry_array[] = '<li value="'.$row_industries->title.'" id="industry" class="industry_tag list-inline-item">'.$row_industries->title.'<span class="'.$row_industries->title.'" id="'.$row_industries->id.'"><i onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>';
            $industry_class_nameArray[] = $row_industries->title;
        }
        
        $industries_name = $industry_array;
        $class_name = $industry_class_nameArray;
        
        return response()->json(["industries_name"=>$industries_name, "class_name"=>$class_name]);
    }

    
    public function sub_services_by_id_with_services ($id){
        
        $sub_category = DB::table('sub_child_menus')->where('child_menu_id', '=', $id)->get();
            $Array = [];
            $Array_li = [];
            foreach($sub_category as $row){
                $Array[] = '<option value="'.$row->id.'">'.$row->item_name.'</option>';
                $Array_li[] = ' <li><a tabindex="0"><label class="checkbox" title=" '.$row->item_link.' "><input type="checkbox" value="'.$row->id.'">  '.$row->item_name.' </label></a></li>';
            }
            $final_Result = $Array;
            $final_Result_li = $Array_li;
            return response()->json(["options" => $final_Result]);
            // return $final_Result;
    }

    
    
     public function ajax_post(Request $request)
     {
        $data = $request->all();
        
        if(empty($data['first_name'])){
            
            $arr = array('first_name_error_msg' => '<div style="color:red; font-weight:bold;"> <span> First Name Required! </span> </div>', 'status' => false);
            return Response()->json($arr);
        }
        
        if(empty($data['phone'])){
            
            $arr = array('phone_number_error_msg' => '<div style="color:red; font-weight:bold;"> <span> Phone Number Required! </span> </div>', 'status' => false);
            return Response()->json($arr);
        }
        
        if(empty($data['email'])){
            $arr = array('email_error_msg' => '<div style="color:red; font-weight:bold;"> <span> Email Required! </span> </div>', 'status' => false);
            return Response()->json($arr);
        }
        
        $mail_data = array(
                'first_name'=>$data['first_name'],
                'last_name'=>$data['last_name'],
                'email'=>$data['email'],
                'url'=>$data['url'],
                'phone'=>$data['phone'],
                'message'=>$data['message']
                );
        
          Mail::send('mail', $mail_data, function($message) {
             $message->to('dev@creativedrop.com', 'Faiz Awan')->subject
                ('Form Submission from Contact Form');
             $message->from('dev@creativedrop.com','From Creative Drop');
          });
        
        $result = DB::table('contacts')->insert(
                    [
                        'first_name' => $data['first_name'],
                        'last_name' => $data['last_name'],
                        'phone' => $data['phone'],
                        'message' => $data['message'],
                        'email' => $data['email']
                        ]
                );
        
        
            $arr = array('msg' => '<h1>Thank You </h1> Our team will be contacting you shortly.', 'status' => true);
        	
        
        
        return Response()->json($arr);
        
     }
     public function contact(){
         return view('contact');
     }
}
