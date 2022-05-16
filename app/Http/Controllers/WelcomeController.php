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

    public function work($id){
        
        $industries = DB::table('industries')->where('slug', '=', $id)->first();
        
        $industry_name = $industries->slug;
        $industry_id = $industries->id;
        $case_study = DB::table('case_study')
            ->join('case_study_industries', 'case_study.id', '=', 'case_study_industries.case_study_id')
            ->where('case_study_industries.industry_id', '=', $industries->id)
            ->get();
            
        $main_menu = DB::table('menus')->where('menu_link','!=','#')->get();
        return view('work', Compact('industry_name','industry_id','industries', 'main_menu','case_study'));
    }
    public function test(){
      
        $industries = DB::table('industries')->select('background_image')->get();
        $Array = [];
            foreach($industries as $row){
                $Array[] = $row->background_image;
            }
            $final_Result = $Array;
            // return response()->json(["sliders" => $final_Result]);
            return $final_Result;
      
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
        $pages = DB::table('page')->where('slug', '=', $id)->get();
        $case_study = DB::table('case_study')->where('slug', '=', $id)->get();
        $case_study_content = DB::table('case_study_content')->where('case_study_id', '=', $case_study[0]->id)->get();
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
            ->where('page.slug', '=', $id)
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
            $Array[] = '<div class="custom-control custom-checkbox"><input onclick="sub_service_clicked(this);" type="checkbox" value="'.$row->item_link.'" class="custom-control-input" id="customCheck_a'.$row->id.'"><label class="custom-control-label" for="customCheck_a'.$row->id.'">'.$row->item_name.'</label></div>';
        }

        $final_Result = $Array;
        
        $mainCategoryArray = [];
        $class_nameArray = [];

        foreach($main_category as $row_main_category){

            $mainCategoryArray[] = '<li class="main_service_tag list-inline-item">'.$row_main_category->menu_name.'<span><i id="customCheck'.$row_main_category->id.'" onclick="remove_main_service_tag(this);" class="fas fa-times"></i></span></li>';
            $class_nameArray[] = $row_main_category->menu_link;
        }

        $final_main_category_array = $mainCategoryArray;

        

        $class_name_array = $class_nameArray;

        return response()->json(["options" => $final_Result, "subServices"=>$final_main_category_array, "class_name"=>$class_name_array]);
    }

    public function services_by_id_with_services_two ($id){
        
        $exp = explode(",",$id);
        
        

        $main_category = DB::table('menus')->get();

        $Array_li = [];
        
        $mainCategoryArray = [];
        $class_nameArray = [];

        foreach($main_category as $row_main_category){

            $class_nameArray[] = $row_main_category->menu_link;
        }

        $final_main_category_array = $mainCategoryArray;

        

        $class_name_array = $class_nameArray;

        return response()->json(["class_name"=>$class_name_array]);
    }


    

    public function sub_services_by_id ($id){
        
        $exp = explode(",",$id);
        
        $sub_category_id = DB::table('child_menus')->whereIn('id', $exp)->get();
        $third_level_category_id = DB::table('sub_child_menus')->whereIn('child_menu_id', $exp)->get();
        
        $sub_category_id_array = [];
        $third_level_category_id_array = [];
        $sub_category_menu_id_array = [];
        $main_category_id_array = [];

        foreach($third_level_category_id as $row_third_level_category){

            $third_level_category_id_array[] = '<option value="'.$row_third_level_category->id.'">'.$row_third_level_category->item_name.'</option>';
            
            
        }


        foreach($sub_category_id as $row_sub_category){

            $sub_category_id_array[] = '<li class="sub_service_tag list-inline-item">'.$row_sub_category->item_name.'<span><i onclick="remove_sub_service_tag(this);" id="customCheck_a'.$row_sub_category->id.'" class="fas fa-times"></i></span></li>';
            $class_nameArray[] = $row_sub_category->item_link;
            $sub_category_menu_id_array[] = $row_sub_category->menu_id;
            
        }

        $main_category_id = DB::table('menus')->whereIn('id', $sub_category_menu_id_array)->get();

        foreach($main_category_id as $row_main_category_id){

            $main_category_id_array[] = '<li class="main_service_tag list-inline-item">'.$row_main_category_id->menu_name.'<span><i id="'.$row_main_category_id->id.'" class="fas fa-times"></i></span></li>';
            $main_category_class_nameArray[] = $row_main_category_id->menu_link;
            
        }

        $final_mainCat_class = $main_category_class_nameArray;
        
        $final_mainCat = $main_category_id_array;

        $final_sub_category_id_array = $sub_category_id_array;
        $final_third_level_category_id_array = $third_level_category_id_array;
        $final_class_nameArray = $class_nameArray;

        
        return response()->json(["mainServices"=>$final_mainCat,"main_service_class"=>$final_mainCat_class, "third_level_category"=>$final_third_level_category_id_array, "subServices"=>$final_sub_category_id_array, "sub_category_link"=>$final_sub_category_id_array, "class_name"=>$final_class_nameArray]);
    }

    public function third_services_by_id($id){
        $third_level_cat_id = DB::table('sub_child_menus')->where('id', $id)->first();
        $name =  $third_level_cat_id->item_link;
        return response()->json(["name"=>$name]);
    }

    public function ajax_call($param1, $param2, $param3){

        $sub_services_option = [];
        $Array = [];
        $tags_array = [];
        $links_array = [];

        if($param1 == 0 && $param2 == 0 && $param3 == 0 ){
            
        
        $sub_services_id = explode(",",$param2);
        $industries_id = explode(",",$param3);
        $main_services_id = explode(",",$param1);
        $main_services = DB::table('menus')->get();
        
        $industries_id = DB::table('industries')->get();
        
            foreach($main_services as $row_main_category_id){
                $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                $links_array[] = $row_main_category_id->menu_link;
            }
            
            foreach($industries_id as $row_industries_id){
                $links_array[] = $row_industries_id->slug;
            }
        }else{

            $sub_services_id = explode(",",$param2);
            $industries_id = explode(",",$param3);
            $main_services_id = explode(",",$param1);
            $main_services = DB::table('menus')->whereIn('id', $main_services_id)->get();
            $sub_category = DB::table('child_menus')->whereIn('menu_id', $main_services_id)->get();
    
            $sub_categories = DB::table('child_menus')->whereIn('id', $sub_services_id)->get();
            $industries_id = DB::table('industries')->whereIn('id', $industries_id)->get();
            
                foreach($sub_category as $row){
                    $Array[] = '<div class="custom-control custom-checkbox"><input onclick="sub_service_clicked(this);" type="checkbox" class="custom-control-input" id="customCheck_a'.$row->id.'"><label class="custom-control-label" for="customCheck_a'.$row->id.'">'.$row->item_name.'</label></div>';
                }
                foreach($main_services as $row_main_category_id){
                            
                    $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_main_category_id->menu_name.'<span><i id="customCheck'.$row_main_category_id->id.'" onclick="remove_main_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_main_category_id->menu_link;
                }
                foreach($sub_categories as $row_sub_categories){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_sub_categories->item_name.'<span><i id="customCheck_a'.$row_sub_categories->id.'" onclick="remove_sub_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_sub_categories->item_link;
                }
                foreach($industries_id as $row_industries_id){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_industries_id->slug.'<span><i id="customCheck_b'.$row_industries_id->id.'" onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_industries_id->slug;
                }   
        }
            return response()->json(["options"=>$sub_services_option, "sub_category_dropdown"=>$Array, "tags"=>$tags_array, "links"=>$links_array, "class_name"=>$links_array]);        
    }

    public function ajax_call_industry_remove($param1, $param2, $param3){

        $sub_services_option = [];
        $Array = [];
        $tags_array = [];
        $links_array = [];

        if($param1 == 0 && $param2 == 0 && $param3 == 0 ){
            
        
            $sub_services_id = explode(",",$param2);
        $industries_id = explode(",",$param3);
        $main_services_id = explode(",",$param1);
        $main_services = DB::table('menus')->get();
        
        $industries_id = DB::table('industries')->get();
        
        
            foreach($main_services as $row_main_category_id){
                $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                $links_array[] = $row_main_category_id->menu_link;
            }
            
            foreach($industries_id as $row_industries_id){
                $links_array[] = $row_industries_id->slug;
            }
        }else{

            $sub_services_id = explode(",",$param2);
            $industries_id = explode(",",$param3);
            $main_services_id = explode(",",$param1);
            $main_services = DB::table('menus')->whereIn('id', $main_services_id)->get();
            $sub_category = DB::table('child_menus')->whereIn('menu_id', $main_services_id)->get();
    
            $sub_categories = DB::table('child_menus')->whereIn('id', $sub_services_id)->get();
            $industries_id = DB::table('industries')->whereIn('id', $industries_id)->get();
            
                foreach($sub_category as $row){
                    $Array[] = '<div class="custom-control custom-checkbox"><input onclick="sub_service_clicked(this);" type="checkbox" class="custom-control-input" id="customCheck_a'.$row->id.'"><label class="custom-control-label" for="customCheck_a'.$row->id.'">'.$row->item_name.'</label></div>';
                }
                foreach($main_services as $row_main_category_id){
                            
                    $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_main_category_id->menu_name.'<span><i id="customCheck'.$row_main_category_id->id.'" onclick="remove_main_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_main_category_id->menu_link;
                }
                foreach($sub_categories as $row_sub_categories){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_sub_categories->item_name.'<span><i id="customCheck_a'.$row_sub_categories->id.'" onclick="remove_sub_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_sub_categories->item_link;
                }
                foreach($industries_id as $row_industries_id){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_industries_id->slug.'<span><i id="customCheck_b'.$row_industries_id->id.'" onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_industries_id->slug;
                }   
        }
            return response()->json(["options"=>$sub_services_option, "sub_category_dropdown"=>$Array, "tags"=>$tags_array, "links"=>$links_array, "class_name"=>$links_array]);        
   
       
    }

    public function ajax_call_main_service_remove($param1, $param2, $param3, $removed_item_id){

        $sub_services_option = [];
        $Array = [];
        $tags_array = [];
        $links_array = [];

        if($param1 == 0 && $param2 == 0 && $param3 == 0 ){
            
        
            $sub_services_id = explode(",",$param2);
        $industries_id = explode(",",$param3);
        $main_services_id = explode(",",$param1);
        $main_services = DB::table('menus')->get();
        
        $industries_id = DB::table('industries')->get();
        
        
            foreach($main_services as $row_main_category_id){
                $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                $links_array[] = $row_main_category_id->menu_link;
            }
            
            foreach($industries_id as $row_industries_id){
                $links_array[] = $row_industries_id->slug;
            }
        }else{

            $sub_services_id = explode(",",$param2);
            $industries_id = explode(",",$param3);
            $main_services_id = explode(",",$param1);
            $main_services_id_removed = explode(",",$removed_item_id);
            
            $main_services = DB::table('menus')->whereIn('id', $main_services_id)->whereNotIn('id', $main_services_id_removed)->get();
            $sub_category = DB::table('child_menus')->whereIn('menu_id', $main_services_id)->whereNotIn('menu_id', $main_services_id_removed)->get();
    
            $sub_categories = DB::table('child_menus')->whereIn('id', $sub_services_id)->whereNotIn('menu_id', $main_services_id_removed)->get();
            $industries_id = DB::table('industries')->whereIn('id', $industries_id)->get();
            
                foreach($sub_category as $row){
                    $Array[] = '<div class="custom-control custom-checkbox"><input onclick="sub_service_clicked(this);" type="checkbox" class="custom-control-input" id="customCheck_a'.$row->id.'"><label class="custom-control-label" for="customCheck_a'.$row->id.'">'.$row->item_name.'</label></div>';
                }
                foreach($main_services as $row_main_category_id){
                            
                    $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_main_category_id->menu_name.'<span><i id="customCheck'.$row_main_category_id->id.'" onclick="remove_main_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_main_category_id->menu_link;
                }
                foreach($sub_categories as $row_sub_categories){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_sub_categories->item_name.'<span><i id="customCheck_a'.$row_sub_categories->id.'" onclick="remove_sub_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_sub_categories->item_link;
                }
                foreach($industries_id as $row_industries_id){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_industries_id->slug.'<span><i id="customCheck_b'.$row_industries_id->id.'" onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_industries_id->slug;
                }   
        }
            return response()->json(["options"=>$sub_services_option, "sub_category_dropdown"=>$Array, "tags"=>$tags_array, "links"=>$links_array, "class_name"=>$links_array]);        
   

    }

    public function ajax_call_sub_service_remove($param1, $param2, $param3){
  $sub_services_option = [];
        $Array = [];
        $tags_array = [];
        $links_array = [];

        if($param1 == 0 && $param2 == 0 && $param3 == 0 ){
            
        
            $sub_services_id = explode(",",$param2);
        $industries_id = explode(",",$param3);
        $main_services_id = explode(",",$param1);
        $main_services = DB::table('menus')->get();
        
        $industries_id = DB::table('industries')->get();
        
        
            foreach($main_services as $row_main_category_id){
                $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                $links_array[] = $row_main_category_id->menu_link;
            }
            
            foreach($industries_id as $row_industries_id){
                $links_array[] = $row_industries_id->slug;
            }
        }else{

            $sub_services_id = explode(",",$param2);
            $industries_id = explode(",",$param3);
            $main_services_id = explode(",",$param1);
            $main_services = DB::table('menus')->whereIn('id', $main_services_id)->get();
            $sub_category = DB::table('child_menus')->whereIn('menu_id', $main_services_id)->get();
    
            $sub_categories = DB::table('child_menus')->whereIn('id', $sub_services_id)->get();
            $industries_id = DB::table('industries')->whereIn('id', $industries_id)->get();
            
                foreach($sub_category as $row){
                    $Array[] = '<div class="custom-control custom-checkbox"><input onclick="sub_service_clicked(this);" type="checkbox" class="custom-control-input" id="customCheck_a'.$row->id.'"><label class="custom-control-label" for="customCheck_a'.$row->id.'">'.$row->item_name.'</label></div>';
                }
                foreach($main_services as $row_main_category_id){
                            
                    $sub_services_option[] = '<option value="'.$row_main_category_id->id.'">'.$row_main_category_id->menu_name.'</option>';
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_main_category_id->menu_name.'<span><i id="customCheck'.$row_main_category_id->id.'" onclick="remove_main_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_main_category_id->menu_link;
                }
                foreach($sub_categories as $row_sub_categories){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_sub_categories->item_name.'<span><i id="customCheck_a'.$row_sub_categories->id.'" onclick="remove_sub_service_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_sub_categories->item_link;
                }
                foreach($industries_id as $row_industries_id){
                    $tags_array[] = '<li class="main_service_tag list-inline-item">'.$row_industries_id->slug.'<span><i id="customCheck_b'.$row_industries_id->id.'" onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>';
                    $links_array[] = $row_industries_id->slug;
                }   
        }
            return response()->json(["options"=>$sub_services_option, "sub_category_dropdown"=>$Array, "tags"=>$tags_array, "links"=>$links_array, "class_name"=>$links_array]);        
   
            
    }

    public function sub_services_by_id_two ($param1, $param2){
        
        
        
        $sub_category_id = DB::table('child_menus')->get();
        
        $sub_category_id_array = [];
        $sub_category_menu_id_array = [];
        $main_category_id_array = [];
        $options = [];

        foreach($sub_category_id as $row_sub_category){

            $sub_category_id_array[] = '<li class="sub_service_tag list-inline-item">'.$row_sub_category->item_name.'<span><i onclick="remove_sub_service_tag(this);" id="customCheck_a'.$row_sub_category->id.'" class="fas fa-times"></i></span></li>';
            $class_nameArray[] = $row_sub_category->item_link;
            $sub_category_menu_id_array[] = $row_sub_category->menu_id;
            
        }

        $main_category_id = DB::table('menus')->whereIn('id', $sub_category_menu_id_array)->get();

        foreach($main_category_id as $row_main_category_id){

            $main_category_id_array[] = '<li class="main_service_tag list-inline-item">'.$row_main_category_id->menu_name.'<span><i id="'.$row_main_category_id->id.'" class="fas fa-times"></i></span></li>';
            $main_category_class_nameArray[] = $row_main_category_id->menu_link;
            
        }

        
        $final_options = $options;
        

        $final_sub_category_id_array = $sub_category_id_array;
        $final_class_nameArray = $class_nameArray;

        
        return response()->json(["options"=>$final_options, "subServices"=>$final_sub_category_id_array, "sub_category_link"=>$final_sub_category_id_array, "class_name"=>$final_class_nameArray]);
    }


    public function industry_by_id ($id){

        $exp = explode(",",$id);
        $industries = DB::table('industries')->whereIn('id', $exp)->get();
        $industry_array = [];
        $industry_class_nameArray = [];

        foreach($industries as $row_industries){
            $industry_array[] = '<li value="'.$row_industries->slug.'" id="industry" class="industry_tag list-inline-item">'.$row_industries->title.'<span class="'.$row_industries->title.'" id="customCheck_b'.$row_industries->id.'"><i onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>';
            $industry_class_nameArray[] = $row_industries->slug;
        }
        
        $industries_name = $industry_array;
        $class_name = $industry_class_nameArray;
        
        return response()->json(["subServices"=>$industries_name, "class_name"=>$class_name]);
    }


    public function industry_by_id_two ($param1, $param2){

        $industries = DB::table('industries')->get();

        $industry_array = [];
        $industry_class_nameArray = [];

        foreach($industries as $row_industries){

            $industry_array[] = '<li value="'.$row_industries->slug.'" id="industry" class="industry_tag list-inline-item">'.$row_industries->title.'<span class="'.$row_industries->title.'" id="customCheck_b'.$row_industries->id.'"><i onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>';
            $industry_class_nameArray[] = $row_industries->slug;
        }
        
        $industries_name = $industry_array;
        $class_name = $industry_class_nameArray;
        
        return response()->json(["class_name"=>$class_name]);
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
                'send_message'=>$data['message']
                );
        
          Mail::send('mail', $mail_data, function($message) {
             $message->to('faiz@creativedrop.com', 'Faiz Awan')->subject
                ('Form Submission from Contact Form');
             $message->from('creativedropweb@gmail.com','From Creative Drop');
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
    

     public function delete_front_component($detail_page_id){
        echo $detail_page_id;
        DB::table('page_detail')->where('id', '=', $detail_page_id)->delete();
        $message = 'Component Deleted Successfully from this Page';
        return redirect()->back()->with('delete_message', $message);
     }

     public function select_page_section($id){
        return $id;
     }
}
