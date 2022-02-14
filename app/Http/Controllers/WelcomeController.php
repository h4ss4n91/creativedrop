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
        
        $sub_category = DB::table('child_menus')->where('menu_id', '=', $id)->get();

        $main_category = DB::table('menus')->where('id', '=', $id)->get();

        $industries = DB::table('industry_services')->where('service_id', '=', $id)->get();

        $Array = [];

        foreach($sub_category as $row){

            $Array[] = '<option value="'.$row->id.'">'.$row->item_name.'</option>';

        }

        $final_Result = $Array;

        $mainCategory = '<li class="list-inline-item">'.$main_category[0]->menu_name.'<span><i class="fas fa-times"></i><span></span></span></li>';

        return response()->json(["options" => $final_Result, "subServices"=>$mainCategory]);
    }

    public function sub_services_by_id ($id){
        
        $sub_category = DB::table('child_menus')->where('id', '=', $id)->get();

        $main_category = DB::table('menus')->where('id', '=', $sub_category[0]->menu_id)->first();

        $industries = DB::table('industry_services')->get();

        $sub_category = '<li class="list-inline-item">'.$main_category->menu_name.'<span><i class="fas fa-times"></i><span></span></span></li><li class="list-inline-item">'.$sub_category[0]->item_name.'<span><i class="fas fa-times"></i><span></span></span></li>';

        return response()->json(["subServices"=>$sub_category]);
    }

    public function industry_by_id ($id){
        
        $industries_name = '<li class="list-inline-item">'.$id.'<span><i class="fas fa-times"></i><span></span></span></li>';

        return response()->json(["subServices"=>$industries_name]);
    }

    
    public function sub_services_by_id_with_services ($id){
        
        $sub_category = DB::table('sub_child_menus')->where('child_menu_id', '=', $id)->get();
            $Array = [];
            foreach($sub_category as $row){
                $Array[] = '<option value="'.$row->id.'">'.$row->item_name.'</option>';
            }
            $final_Result = $Array;
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
