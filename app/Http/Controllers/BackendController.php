<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Redirect;
use Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Str;

class BackendController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete_page_content($id) {

        $deleted = DB::table('page_detail')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function index() {
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $main_menu = $main_menu_two = $main_menu_four = DB::table('menus')->get();
        $child_menu_four = DB::table('child_menus')->get();
        $child_menus = DB::table('child_menus')->get();
        $sub_child_menus = DB::table('sub_child_menus')->get();
        return view('menu', Compact('main_menu', 'child_menus', 'sub_child_menus', 'main_menu_two', 'main_menu_four', 'child_menu_four'));
    }

    public function second_level_menu() {
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $main_menu = $main_menu_two = $main_menu_four = DB::table('menus')->get();
        $child_menu_four = DB::table('child_menus')->get();
        $child_menus = DB::table('child_menus')->get();
        $sub_child_menus = DB::table('sub_child_menus')->get();
        return view('2nd_level_menu', Compact('main_menu', 'child_menus', 'sub_child_menus', 'main_menu_two', 'main_menu_four', 'child_menu_four'));
    }

    public function third_level_menu() {
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $main_menu = $main_menu_two = $main_menu_four = DB::table('menus')->get();
        $child_menu_four = DB::table('child_menus')->get();
        $child_menus = DB::table('child_menus')->get();
        $sub_child_menus = DB::table('sub_child_menus')->get();
        return view('3rd_level_menu', Compact('main_menu', 'child_menus', 'sub_child_menus', 'main_menu_two', 'main_menu_four', 'child_menu_four'));
    }

    public function system() {
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $social = DB::table('social_media')->get();
        $footer_section = DB::table('footer_sections')->get();
        $logo = DB::table('logo')->get();
        $system_user = DB::table('users')->get();
        return view('system', Compact('social', 'footer_section', 'logo', 'system_user'));
    }

    public function delete_page($id) {

        DB::table('page')->where('id', '=', $id)->delete();

        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function create_page(Request $request) {
        $data = $request->all();

        DB::table('sub_child_menus')
        ->where('id', $request->child_menu_id)
        ->update(['item_link' => $request->page_slug]);



        $id = DB::table('page')->insertGetId(array(
            'title' => $request->page_title,
            'slug' => $request->page_slug,
            'menu_id' => $request->main_menu_id,
            'sub_menu_id' => $request->sub_menu_id,
            'child_menu_id' => $request->child_menu_id,
            'meta_desc' => $request->meta_desc,
            'meta_keyword' => $request->meta_keyword,
            'status' => $request->status,
        ));

        for ($i = 0; $i < count($request->section); $i++) {

            DB::table('page_detail')->insert(
                    [
                        'page_id' => $id,
                        'section_no' => $i + 1,
                        'section' => $data['section'][$i],
                        'section_type' => $data['section_type'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_page_content($id) {
        $main_menu = DB::table('menus')->where('menu_link', '!=', '#')->get();
        $is_page_detail = DB::table('page_detail')->where('page_id', '=', $id)->first();
        if($is_page_detail){
            
            $page = DB::table('page')
            ->join('page_detail', 'page_detail.page_id', '=', 'page.id')
            ->where('page.id', '=', $id)
            ->orderBy('page_detail.section_no', 'ASC')
            ->get();

            
        $last_row = DB::table('page_detail')->where('page_id', '=', $id)->orderBy('section_no', 'desc')->first();

        if($last_row){
            $count = $last_row->section_no + 1;
        }else{
            $count = 0;
        }
        
        $page_section = DB::table('page_section')->get();
        return view('edit_page', Compact('page', 'page_section', 'main_menu', 'count'));


        }else{
            
            $page = DB::table('page')
                ->where('id', '=', $id)
                ->get();

                
        $last_row = DB::table('page_detail')->where('page_id', '=', $id)->orderBy('section_no', 'desc')->first();

        if($last_row){
            $count = $last_row->section_no + 1;
        }else{
            $count = 0;
        }
        
        $page_section = DB::table('page_section')->get();
        return view('edit_page_two', Compact('page', 'page_section', 'main_menu', 'count'));
        }
        
        
    }

    public function edit_page(Request $request) {
        $id = $request->id;
        $data = $request->all();
        DB::table('page_detail')->where('page_id', '=', $id)->delete();
        if($request->child_menu_id == NULL){
            $child_menus = DB::table('child_menus')->where('id', '=', $request->sub_menu_id)->first();
            if($child_menus != NULL){

                $affected = DB::table('child_menus')
                ->where('id', $child_menus->id)
                ->update([
            'item_name' => $request->title,
            'item_link' => $request->slug]);
            }
        }else{
            $sub_child_menus = DB::table('sub_child_menus')->where('id', '=', $request->child_menu_id)->first();
            if($sub_child_menus != NULL){

                $affected = DB::table('sub_child_menus')
                ->where('id', $sub_child_menus->id)
                ->update([
            'item_name' => $request->title,
            'item_link' => $request->slug]);
            }
        }

        
        DB::table('page_detail')->where('page_id', '=', $id)->delete();

        $affected = DB::table('page')
                ->where('id', $request->id)
                ->update([
            'title' => $request->title,
            'menu_id' => $request->main_menu_id,
            'sub_menu_id' => $request->sub_menu_id,
            'child_menu_id' => $request->child_menu_id,
            'slug' => $request->slug,
            'meta_desc' => $request->meta_desc,
            'meta_keyword' => $request->meta_keyword,
            'status' => $request->status]);

        for ($i = 0; $i < count($request->section); $i++) {
            DB::table('page_detail')->insert(
                    [
                        'page_id' => $id,
                        'section_no' => $data['section_no'][$i],
                        'section' => $data['section'][$i],
                        'section_type' => $data['section_type'][$i]
                    ]
            );
        }

        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function pages() {
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $main_menu = DB::table('menus')->where('menu_link', '!=', '#')->orderBy('sorting', 'ASC')->get();
        $pages = DB::table('page')->get();
        $page_section = DB::table('page_section')->get();
        return view('pages', Compact('pages', 'main_menu', 'page_section'));
    }

    public function sections_1() {
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $section_19 = DB::table('section_19')->get();
        $section_18 = DB::table('section_18')->get();
        $section_17 = DB::table('section_17')->get();
        $section_16 = DB::table('section_16')->get();
        $section_15 = DB::table('section_15')->get();
        $service = DB::table('menus')->get();
        $sub_category = DB::table('child_menus')->get();
        $para_style_1 = DB::table('para_style_1')->get();
        $para_style_2 = DB::table('para_style_2')->get();
        $para_style_3 = DB::table('para_style_3')->get();
        $para_style_4 = DB::table('para_style_4')->get();
        $para_style_5 = DB::table('para_style_5')->get();
        $request = DB::table('requests')->get();
        $team = DB::table('teams')->get();
        $news = DB::table('news_and_opinions')->get();
        $industries = DB::table('industries')->get();
        $services = DB::table('services')->get();
        $clientandpartnerimage = DB::table('clientandparterimage')->get();
        $case_study = DB::table('case_study')->get();
        $sliders = DB::table('sliders')->get();
        $videos = DB::table('videos')->get();
        $pages = $slider_pages = $caseStudy_pages = $clientAndParter_pages = $industries_pages = $client_and_partners = $pages_video = DB::table('page')->get();

        return view('section_1', Compact('case_study', 'services', 'section_17', 'section_18', 'section_19', 'section_16', 'team', 'section_15', 'sub_category', 'service', 'para_style_1', 'para_style_2', 'para_style_3', 'para_style_4', 'para_style_5', 'request', 'industries_pages', 'news', 'industries', 'clientandpartnerimage', 'clientAndParter_pages', 'pages', 'sliders', 'videos', 'slider_pages', 'pages_video', 'caseStudy_pages', 'client_and_partners', 'industries'));
    }

    public function page_sections() {
        if(!Auth::check())
            {
                return Redirect::route('login')->withInput()->with('errmessage', 'Please Login.');
            }
        $section_23 = DB::table('section_23')->get();
        $section_22 = DB::table('section_22')->get();
        $section_21 = DB::table('section_21')->get();
        $section_20 = DB::table('section_20')->get();
        $section_19 = DB::table('section_19')->get();
        $section_18 = DB::table('section_18')->get();
        $section_17 = DB::table('section_17')->get();
        $section_16 = DB::table('section_16')->get();
        $section_15 = DB::table('section_15')->get();
        $service = DB::table('menus')->get();
        $sub_category = DB::table('child_menus')->get();
        $para_style_1 = DB::table('para_style_1')->get();
        $para_style_2 = DB::table('para_style_2')->get();
        $para_style_3 = DB::table('para_style_3')->get();
        $para_style_4 = DB::table('para_style_4')->get();
        $para_style_5 = DB::table('para_style_5')->get();
        $request = DB::table('requests')->get();
        $team = DB::table('teams')->get();
        $news = DB::table('news_and_opinions')->get();
        $industries = DB::table('industries')->get();
        $services = DB::table('services')->get();
        $clientandpartnerimage = DB::table('clientandparterimage')->get();
        $case_study = DB::table('case_study')->get();
        $sliders = DB::table('sliders')->get();
        $videos = DB::table('videos')->get();
        $pages = $slider_pages = $caseStudy_pages = $clientAndParter_pages = $industries_pages = $client_and_partners = $pages_video = DB::table('page')->get();

        return view('page_section', Compact('case_study', 'services', 'section_22', 'section_17', 'section_20', 'section_21', 'section_18', 'section_19', 'section_16', 'team', 'section_15', 'sub_category', 'service', 'para_style_1', 'para_style_2', 'para_style_3', 'para_style_4', 'para_style_5', 'request', 'industries_pages', 'news', 'industries', 'clientandpartnerimage', 'clientAndParter_pages', 'pages', 'sliders', 'videos', 'slider_pages', 'pages_video', 'caseStudy_pages', 'client_and_partners', 'industries', 'section_23'));
    }

    // main menu
    public function store_main_menu(Request $request) {
        DB::table('menus')->insert(
                ['menu_name' => $request->main_menu, 'sorting' => $request->sorting, 'menu_link' => $request->menu_link]
        );
        $message = 'Saved Successfully!';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_main_menu(Request $request) {

        $affected = DB::table('menus')
                ->where('id', $request->id)
                ->update([
            'menu_name' => $request->menu_name,
            'menu_link' => $request->menu_link,
            'sorting' => $request->sorting
        ]);

        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_main_menu($id) {

        DB::table('menus')->where('id', '=', $id)->delete();

        $message = 'Deleted Successfully';
        return redirect()->back()->with('delete_message', $message);
    }

    public function store_child_menu(Request $request) {
        DB::table('child_menus')->insert(
                ['menu_id' => $request->main_menu_id, 'item_name' => $request->child_menu, 'sorting' => $request->sorting, 'featured_service' => $request->featured_service, 'item_link' => $request->child_menu_link]
        );
        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_child_menu(Request $request) {

        $sub_menus_for_page = DB::table('page')
                        ->where('sub_menu_id', '=', $request->id)
                        ->where('child_menu_id', '=', NULL)
                        ->first();
            if($sub_menus_for_page != NULL){

                $affected = DB::table('page')
                ->where('sub_menu_id', $request->id)
                ->update([
            'title' => $request->item_name,
            'slug' => $request->item_link]);
            }



        $affected = DB::table('child_menus')
                ->where('id', $request->id)
                ->update([
            'menu_id' => $request->main_menu_id,
            'item_name' => $request->item_name,
            'sorting' => $request->sorting,
            'featured_service' => $request->featured_service,
            'item_link' => $request->item_link
        ]);

        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_child_menu($id) {

        DB::table('child_menus')->where('id', '=', $id)->delete();

        //return redirect()->back();
        $message = 'Deleted Successfully';
        return redirect()->back()->with('delete_message', $message);
    }

    // Sub Child Menu

    public function store_sub_child_menu(Request $request) {
        DB::table('sub_child_menus')->insert(
                ['menu_id' => $request->main_menu_id, 'child_menu_id' => $request->child_menu_id, 'sorting' => $request->sorting, 'item_name' => $request->sub_child_item_name, 'item_link' => $request->sub_child_item_link]
        );
        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_sub_child_menu(Request $request) {

        
        $child_menus_for_page = DB::table('page')
                        ->where('child_menu_id', '=', $request->id)
                        ->first();
            if($child_menus_for_page != NULL){

                $affected = DB::table('page')
                ->where('child_menu_id', $request->id)
                ->update([
            'title' => $request->edit_sub_child_item_name,
            'slug' => $request->edit_sub_child_item_link]);
            }
        


        $affected = DB::table('sub_child_menus')
                ->where('id', $request->id)
                ->update([
            'child_menu_id' => $request->main_menu_id,
            'item_name' => $request->edit_sub_child_item_name,
            'sorting' => $request->sorting,
            'item_link' => $request->edit_sub_child_item_link
        ]);

        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_sub_child_menu($id) {

        DB::table('sub_child_menus')->where('id', '=', $id)->delete();

        $message = 'Delete Successfully';
        return redirect()->back()->with('delete_message', $message);
    }

    public function store_slider(Request $request) {

        $data = $request->all();
        $check_slider_exist = DB::table('sliders')->where('name', '=', $request->name)->first();

        if($check_slider_exist){
            for ($i = 0; $i < count($request->text_1); $i++) {
                $file = $data['slider_image'][$i]; // will get all files
                $file_name = $file->getClientOriginalName(); //Get file original name
                $file->move(public_path('slider'), $file_name); // move files to destination folder
                DB::table('sliders')->insert(
                        [
                            'image' => $file_name,
                            'name' => $request->name,
                            'parent' => $check_slider_exist->id,
                            'status' => $data['status'][$i],
                                'text1' => $data['text_1'][$i],
                            'link' => $data['link'][$i],
                            'style' => $data['btn_style'][$i],
                            'text2' => $data['text_2'][$i],
                            'contact_button_link' => $data['link'][$i]]
                );
            }
        }else{
            $parent_id = DB::table('sliders')->insertGetId(
                [
                    'name' => $request->name,
                    'paddingTop' => $request->padding_top,
                    'paddingBottom' => $request->padding_bottom
                ]
            );    

            for ($i = 0; $i < count($request->text_1); $i++) {
                $file = $data['slider_image'][$i]; // will get all files
                $file_name = $file->getClientOriginalName(); //Get file original name
                $file->move(public_path('slider'), $file_name); // move files to destination folder
                DB::table('sliders')->insert(
                        [
                            'image' => $file_name,
                            'name' => $request->name,
                            'parent' => $parent_id,
                            'status' => $data['status'][$i],
                                'text1' => $data['text_1'][$i],
                            'link' => $data['link'][$i],
                            'style' => $data['btn_style'][$i],
                            'text2' => $data['text_2'][$i],
                            'contact_button_link' => $data['link'][$i]]
                );
            }
        }

        
        
        

        

        

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_slider(Request $request) {
        $file = $request->file('slider_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('sliders')
                    ->where('id', $request->id)
                    ->where('name', $request->name)
                    ->update(
                    ['page_id' => $request->page_id, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top, 'name' => $request->name, 'status' => $request->status, 'text1' => $request->text1, 'text2' => $request->text2, 'contact_button_link' => $request->contact_button_link]
            );

            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('slider'), $file_name); // move files to destination folder
            $affected = DB::table('sliders')
                    ->where('id', $request->id)
                    ->where('name', $request->name)
                    ->update(
                    ['image' => $file_name, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top, 'page_id' => $request->page_id, 'name' => $request->name, 'status' => $request->status, 'text1' => $request->text1, 'text2' => $request->text2, 'contact_button_link' => $request->contact_button_link]
            );

            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_slider($id) {
        DB::table('sliders')->where('name', '=', $id)->delete();
        DB::table('page_detail')->where('section_type', '=', $id)->delete();
        DB::table('section_21')->where('slider_name', '=', $id)->delete();
        $message = 'Deleted Successfully';
        return redirect()->back()->with('delete_message', $message);
    }

    // Video Section

    public function store_video(Request $request) {

        DB::table('videos')->insert([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'padding_bottom' => $request->padding_bottom, 
            'padding_top' => $request->padding_top,
            'video_title' => $request->video_title,
            'video_link' => $request->video_link,
            'contact_button_link' => $request->contact_button_link,
            'button_label' => $request->button_label
        ]);
        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_video(Request $request) {

        $affected = DB::table('videos')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top,
            'video_title' => $request->video_title,
            'video_link' => $request->video_link,
            'contact_button_link' => $request->contact_button_link,
            'button_label' => $request->button_label
        ]);
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_video($id) {

        DB::table('videos')->where('id', '=', $id)->delete();
        DB::table('page_detail')->where('section_type', '=', $id)->delete();
        $message = 'Deleted Successfully';
        return redirect()->back()->with('delete_message', $message);
    }

    // Case Study Section
    public function store_case_study(Request $request) {

        $data = $request->all();
        
            $file = $data['case_study_image']; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('case_study'), $file_name); // move files to destination folder
        
            $id = DB::table('case_study')->insertGetId([
                        'name' => $request->name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top,
                        'slug' => Str::slug($data['case_study_name'], '-'),
                        'image' => $file_name,
                        'title' => $request->case_study_name,
                        'short_description' => $request->short_description]
            );

            if(!$request->video){}
            else{
                for ($i = 0; $i < count($request->video); $i++) {

                    if($data['video'][$i] == NULL){
                        $file_content = $data['image'][$i]; // will get all files
                        $file_content_name = $file_content->getClientOriginalName(); //Get file original name
                        $file_content->move(public_path('case_study_content'), $file_content_name); // move files to destination folder
        
                        DB::table('case_study_content')->insert(
                            [
                                'case_study_id' => $id,
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
                                'case_study_id' => $id,
                                    'video_style' => $data['select_style_for_video'][$i],
                                    'video_link' => $data['video'][$i],
                                    'video_name' => $data['video_name'][$i],
                                    'video_background' => $case_study_video_background_name]
                            );
        
                        }else{
                            DB::table('case_study_content')->insert(
                                [
                                    'case_study_id' => $id,
                                    'video_style' => $data['select_style_for_video'][$i],
                                    'video_name' => $data['video_name'][$i],
                                    'video_link' => $data['video'][$i]
                                    ]
                            );
                        }
                    }
            }
            }
            
        
    
    if($request->service != NULL){
        for ($i = 0; $i < count($request->service); $i++) {

            DB::table('case_study_services')->insert(
                [
                    'case_study_id' => $id,
                    'service_id' => $data['service'][$i],
                    'sub_service_id' => $data['sub_category'][$i]]
            );
        }
    }

    if($request->industry != NULL){

        for ($i = 0; $i < count($request->industry); $i++) {

            DB::table('case_study_industries')->insert(
                [
                    'case_study_id' => $id,
                    'industry_id' => $data['industry'][$i]]
            );
        }

    }
    $message = 'Case Study Saved Successfully';
    return redirect()->back()->with('success_message', $message);
    }

    public function edit_case_study(Request $request) {
        $data = $request->all();
        $file = $request->file('case_study_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('case_study')
                    ->where('id', $request->id)
                    ->update(
                    ['page_id' => $request->page_id, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top, 'name' => $request->name, 'slug' => Str::slug($data['title'], '-'),'title' => $request->title, 'short_description' => $request->short_description, 'link' => $request->link]
            );
            
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('case_study'), $file_name); // move files to destination folder
            $affected = DB::table('case_study')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'page_id' => $request->page_id, 'name' => $request->name, 'title' => $request->title, 'short_description' => $request->short_description, 'link' => $request->link]
            );
            
        }

        if($request->service != NULL){
            for ($i = 0; $i < count($request->service); $i++) {
    
                DB::table('case_study_services')->insert(
                    [
                        'case_study_id' => $request->id,
                        'service_id' => $data['service'][$i],
                        'sub_service_id' => $data['sub_category'][$i]]
                );
            }
        }
    
        if($request->industry != NULL){
    
            for ($i = 0; $i < count($request->industry); $i++) {
    
                DB::table('case_study_industries')->insert(
                    [
                        'case_study_id' => $request->id,
                        'industry_id' => $data['industry'][$i]]
                );
            }
    
        }
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_case_study($id) {
        DB::table('case_study')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Client and Partner
    public function store_client_and_partner(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->clientAndParter_image); $i++) {

            $file = $data['clientAndParter_image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('client_and_partner'), $file_name); // move files to destination folder
            DB::table('clientandparterimage')->insert(
                    [
                        'image' => $file_name,
                        'name' => $data['name'],
                        'padding_top' => $data['padding_top'],
                        'padding_bottom' => $data['padding_bottom']
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_client_and_partner(Request $request) {
        $file = $request->file('clientAndParter_image'); // will get all files
        if ($file == NULL) {
            $affected = DB::table('clientandparterimage')
                    ->where('id', $request->id)
                    ->update(
                    ['page_id' => $request->page_id, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top, ]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {
            $file = $request->file('clientAndParter_image'); // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('client_and_partner'), $file_name); // move files to destination folder
            $affected = DB::table('clientandparterimage')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top,  'page_id' => $request->page_id]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_client_and_partner($id) {
        DB::table('clientandparterimage')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Industry Section
    public function store_industries(Request $request) {
        $data = $request->all();
        $file = $data['industry_image']; // will get all files
        $background_file = $data['industry_background_image']; // will get all files
        
        $file_name = $file->getClientOriginalName(); //Get file original name
        $file->move(public_path('industries'), $file_name); // move files to destination folder

        $background_file_name = $background_file->getClientOriginalName(); //Get file original name
        $background_file->move(public_path('background_industries'), $background_file_name); // move files to destination folder

            $id = DB::table('industries')->insertGetId(
                    [
                        'image' => $file_name,
                        'background_image' => $background_file_name,
                        'page_id' => $request->page_id,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'name' => $request->name,
                        'link' => $request->link,
                        'slug' => Str::slug($data['title'], '-'),
                        'title' => $data['title']
                    ]
            );
            $message = 'Saved Successfully';
            return redirect()->back()->with('success_message', $message);
    }

    public function edit_industry(Request $request) {
        
        $file = $request->file('industry_image'); // will get all files
        $background_file = $request->file('industry_background_image'); // will get all files
        if ($file == NULL) {
            $affected = DB::table('industries')
                    ->where('id', $request->id)
                    ->update(
                    ['name' => $request->name, 'slug' => Str::slug($request->title, '-'), 'title' => $request->title, 'link' => $request->link, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top, 'slug' => Str::slug($request->name, '-'), 'page_id' => $request->page_id]
            );
            
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('industries'), $file_name); // move files to destination folder
            
            $affected = DB::table('industries')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'slug' => Str::slug($request->title, '-'), 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top,  'name' => $request->name, 'page_id' => $request->page_id]
            );
            
        }

        if ($background_file == NULL) {
            $affected = DB::table('industries')
                    ->where('id', $request->id)
                    ->update(
                    ['name' => $request->name, 'slug' => Str::slug($request->title, '-'),  'title' => $request->title, 'link' => $request->link, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top, 'slug' => Str::slug($request->name, '-'), 'page_id' => $request->page_id]
            );
            
        } else {

            $background_file_name = $background_file->getClientOriginalName(); //Get file original name
            $background_file->move(public_path('background_industries'), $background_file_name); // move files to destination folder
            
            $affected = DB::table('industries')
                    ->where('id', $request->id)
                    ->update(
                    ['background_image' => $background_file_name, 'slug' => Str::slug($request->title, '-'), 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top,  'name' => $request->name, 'page_id' => $request->page_id]
            );
            
        }

        
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_industry($id) {
        DB::table('industries')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Team Member Section
    public function store_team(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->team_member_title); $i++) {
            $file = $data['team_member_image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('team'), $file_name); // move files to destination folder
            DB::table('teams')->insert(
                    ['image' => $file_name,'section_name' => $request->name, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top,  'section_name' => $data['name'], 'name' => $data['team_member_title'][$i], 'designation' => $data['team_member_designation'][$i]]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_team(Request $request) {
        $file = $request->file('team_member_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('teams')
                    ->where('id', $request->id)
                    ->update(
                    ['page_id' => $request->page_id, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top,  'name' => $request->team_member_title, 'designation' => $request->team_member_designation]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('team'), $file_name); // move files to destination folder
            $affected = DB::table('teams')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'page_id' => $request->page_id, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top,  'name' => $request->team_member_title, 'designation' => $request->team_member_designation]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_team($id) {
        DB::table('teams')->where('id', '=', $id)->delete();

        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // News and Opinions Industry Section
    public function store_news(Request $request) {
        $file_industries = $request->file('news_image'); // will get all files
        $file_name_file_industries = $file_industries->getClientOriginalName(); //Get file original name
        $file_industries->move(public_path('news_and_opinions'), $file_name_file_industries); // move files to destination folder
        DB::table('news_and_opinions')->insert([
            'image' => $file_name_file_industries,
            'page_id' => $request->page_id,
            'title' => $request->news_title,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'description' => $request->news_short_description,
            'link' => $request->link]
        );
        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_news(Request $request) {
        $file = $request->file('news_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('news_and_opinions')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->news_title,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'description' => $request->news_short_description,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('news_and_opinions'), $file_name); // move files to destination folder
            $affected = DB::table('news_and_opinions')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'title' => $request->news_title,
                'description' => $request->news_short_description,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_news($id) {
        DB::table('news_and_opinions')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Request  Section
    public function store_request(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->request_title); $i++) {
            DB::table('requests')->insert(
                    [
                        // 'image' => $file_name,
                        'style' => $data['style'],
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'btn_label' => $data['button_label'][$i],
                        'name' => $data['name'],
                        'title' => $data['request_title'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_request(Request $request) {

        $affected = DB::table('requests')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'btn_label' => $request->button_label,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'title' => $request->title,
            'style' => $request->style,
            'name' => $request->name]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_request($id) {
        DB::table('requests')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 1  Section
    public function store_para_style_1(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->title); $i++) {

            $file = $data['image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_1'), $file_name); // move files to destination folder
            DB::table('para_style_1')->insert(
                    [
                        'image' => $file_name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'title' => $data['title'][$i],
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        //return dd($data);
        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_para_style_1(Request $request) {
        $file = $request->file('image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('news_and_opinions')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->news_title,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'description' => $request->news_short_description,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_1'), $file_name); // move files to destination folder
            DB::table('para_style_1')->insert([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'title' => $request->title,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_para_style_1($id) {
        DB::table('para_style_1')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 2  Section
    public function store_para_style_2(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->title); $i++) {

            $file = $data['image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_2'), $file_name); // move files to destination folder
            DB::table('para_style_2')->insert(
                    [
                        'image' => $file_name,
                        'page_id' => $request->page_id,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'flex_row_reverse' => $data['flex_row_reverse'][$i],
                        'name' => $request->name,
                        'title' => $data['title'][$i],
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_para_style_2(Request $request) {

        $file = $request->file('image'); // will get all files

        if ($file == NULL) {

            $affected = DB::table('para_style_2')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->title,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_2'), $file_name); // move files to destination folder
            $affected = DB::table('para_style_2')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_para_style_2($id) {
        DB::table('para_style_2')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 3  Section
    public function store_para_style_3(Request $request) {

        $data = $request->all();
        for ($i = 0; $i < count($request->title); $i++) {

            $file = $data['image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_3'), $file_name); // move files to destination folder
            DB::table('para_style_3')->insert(
                    [
                        'image' => $file_name,
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'title' => $data['title'][$i],
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_para_style_3(Request $request) {

        $file = $request->file('image'); // will get all files

        if ($file == NULL) {

            $affected = DB::table('para_style_3')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->title,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {


            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_3'), $file_name); // move files to destination folder
            $affected = DB::table('para_style_3')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_para_style_3($id) {
        DB::table('para_style_3')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 4  Section
    public function store_para_style_4(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->paragraph); $i++) {
            DB::table('para_style_4')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'title' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_para_style_4(Request $request) {
        $affected = DB::table('para_style_4')
                ->where('id', $request->id)
                ->update([
            'name' => $request->name,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'title' => $request->paragraph]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_para_style_4($id) {
        DB::table('para_style_4')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 5  Section
    public function store_para_style_5(Request $request) {
        $data = $request->all();
        
            DB::table('para_style_5')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'style' => $request->style,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'heading_size' => 'h4',
                        'heading' => $data['heading'],
                        'text_left' => $data['text_left'],
                        'text_right' => $data['text_right']
                    ]
            );
        

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_para_style_5(Request $request) {
        $affected = DB::table('para_style_5')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'style' => $request->style,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'heading_size' => 'h4',
            'heading' => $request->heading,
            'text_left' => $request->text_left,
            'text_right' => $request->text_right,
                ]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_para_style_5($id) {
        DB::table('para_style_5')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function page_section_id($id) {

        if ($id == 1) {
            return $this->getObjectValues("sliders", "name");
        } else if ($id == 2) {
            return $this->getObjectValues("videos", "video_title");
        } else if ($id == 3) {
            return $this->getObjectValues("teams", "section_name");
        } else if ($id == 4) {
            return $this->getObjectValues("case_study", "name");
        } else if ($id == 5) {
            //it is for services
            return $this->getObjectValues("services", "name");
        } else if ($id == 6) {
            return $this->getObjectValues("clientandparterimage", "name");
        } else if ($id == 7) {
            return $this->getObjectValues("industries", "name");
        } else if ($id == 8) {
            return $this->getObjectValues("news_and_opinions", "name");
        } else if ($id == 9) {
            return $this->getObjectValues("requests", "name", "style");
        } else if ($id == 10) {
            return $this->getObjectValues("para_style_1", "name");
        } else if ($id == 11) {
            return $this->getObjectValues("para_style_2", "name");
        } else if ($id == 12) {
            return $this->getObjectValues("para_style_3", "name");
        } else if ($id == 13) {
            return $this->getObjectValues("para_style_4", "name");
        } else if ($id == 14) {
            return $this->getObjectValues("para_style_5", "name", "style");
        } else if ($id == 15) {
            return $this->getObjectValues("section_15", "name", "style");
        } else if ($id == 16) {
            return $this->getObjectValues("section_16", "name");
        } else if ($id == 17) {
            return $this->getObjectValues("section_17", "name");
        } else if ($id == 18) {
            return $this->getObjectValues("section_18", "name");
        } else if ($id == 19) {
            return $this->getObjectValues("section_19", "name");
        } else if ($id == 20) {
            return $this->getObjectValues("section_20", "name");
        } else if ($id == 21) {
            return $this->getObjectValues("section_21", "name");
        } else if ($id == 22) {
            return $this->getObjectValues("section_22", "name", "style");
        } else if ($id == 23) {
            return $this->getObjectValues("section_23", "name");
        }
        
    }

    private function getObjectValues($table = '', $attribute = '', $style = '') {
        if (empty($table)) {
            return;
        }

        if (empty($attribute)) {
            return;
        }

        $rows = DB::table($table)->get();
        $Array = [];
        
        foreach ($rows->unique($attribute) as $row) {
            if (!empty($row->{$style})) {
                $Array[] = '<option value="' . $row->{$attribute} . '">' . $row->{$attribute} . ' (' . $row->{$style} . ') </option>';
            } else {
                $Array[] = '<option value="' . $row->{$attribute} . '">' . $row->{$attribute} . ' </option>';
            }
        }
        
        $final_Result = $Array;
        return $final_Result;
    }



    public function page_section_id_for_component($id,$value) {

        if ($id == 1) {
            
            $sliders = DB::table('sliders')->where('name','=',$value)->get();
            $Array = [];
            foreach($sliders as $row_slider){
                $Array[] = '<tr><td><img style="width:200px;" src="http://localhost/creativedrop/public/slider/'.$row_slider->image.'"/></td><td>'.$row_slider->text1.'</td><td>'.$row_slider->text2.'</td></tr>';
            }
            $final_Result = $Array;
            return $final_Result;
            
            //return $this->getObjectValuesForComponent("sliders", "name", $value);
        } else if ($id == 2) {
            return $this->getObjectValuesForComponent("videos", "video_title");
        } else if ($id == 3) {
            return $this->getObjectValuesForComponent("teams", "section_name");
        } else if ($id == 4) {
            return $this->getObjectValuesForComponent("case_study", "name");
        } else if ($id == 5) {
            //it is for services
            return $this->getObjectValuesForComponent("services", "name");
        } else if ($id == 6) {
            return $this->getObjectValuesForComponent("clientandparterimage", "name");
        } else if ($id == 7) {
            return $this->getObjectValuesForComponent("industries", "name");
        } else if ($id == 8) {
            return $this->getObjectValuesForComponent("news_and_opinions", "name");
        } else if ($id == 9) {
            return $this->getObjectValuesForComponent("requests", "name", "style");
        } else if ($id == 10) {
            return $this->getObjectValuesForComponent("para_style_1", "name");
        } else if ($id == 11) {
            return $this->getObjectValuesForComponent("para_style_2", "name");
        } else if ($id == 12) {
            return $this->getObjectValuesForComponent("para_style_3", "name");
        } else if ($id == 13) {
            return $this->getObjectValuesForComponent("para_style_4", "name");
        } else if ($id == 14) {
            return $this->getObjectValuesForComponent("para_style_5", "name", "style");
        } else if ($id == 15) {
            return $this->getObjectValuesForComponent("section_15", "name", "style");
        } else if ($id == 16) {
            return $this->getObjectValuesForComponent("section_16", "name");
        } else if ($id == 17) {
            return $this->getObjectValuesForComponent("section_17", "name");
        } else if ($id == 18) {
            return $this->getObjectValuesForComponent("section_18", "name");
        } else if ($id == 19) {
            return $this->getObjectValuesForComponent("section_19", "name");
        } else if ($id == 20) {
            return $this->getObjectValuesForComponent("section_20", "name");
        } else if ($id == 21) {
            return $this->getObjectValuesForComponent("section_21", "name");
        } else if ($id == 22) {
            return $this->getObjectValuesForComponent("section_22", "name", "style");
        } else if ($id == 23) {
            return $this->getObjectValuesForComponent("section_23", "name");
        }
        
    }

    private function getObjectValuesForComponent($table = '', $attribute = '', $style = '',$value='') {
        if (empty($table)) {
            return;
        }

        if (empty($attribute)) {
            return;
        }

        if (empty($attribute)) {
            return;
        }

        $rows = DB::table($table)->where('name','=',$value)->get();
        $Array = [];
        
        foreach ($rows as $select_row) {
            
            $Array[] = '<option value="' . $select_row->{$attribute} . '">' . $select_row->{$attribute} . ' </option>';
            
        }
        
        $final_Result = $Array;
        return $final_Result;
    }

    // Para Style 15  Section
    public function store_section_15(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->image); $i++) {

            $file = $data['image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_15'), $file_name); // move files to destination folder

            DB::table('section_15')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'style' => $request->style,
                        'image' => $file_name,
                        'heading1' => $data['heading'][$i],
                        'flex_row_reverse' => $data['flex_row_reverse'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_15(Request $request) {

        $file = $request->file('image'); // will get all files
        if ($file == NULL) {
            $affected = DB::table('section_15')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'style' => $request->style,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'name' => $request->name,
                'heading1' => $request->heading,
                'flex_row_reverse' => $request->flex_row_reverse]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {
            $file = $request->file('image'); // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_15'), $file_name); // move files to destination folder
            $affected = DB::table('section_15')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'style' => $request->style,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'name' => $request->name,
                'heading1' => $request->heading,
                'flex_row_reverse' => $request->flex_row_reverse]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_section_15($id) {
        DB::table('section_15')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 16  Section
    public function store_section_16(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->text); $i++) {

            $file = $data['image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_16'), $file_name); // move files to destination folder

            DB::table('section_16')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'image' => $file_name,
                        'text' => $data['text'][$i],
                        'heading' => $data['heading'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_16(Request $request) {
        $affected = DB::table('section_16')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'text' => $request->text,
            'heading' => $request->heading
                ]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_section_16($id) {
        DB::table('section_16')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 17  Section
    public function store_section_17(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->paragraph); $i++) {
            DB::table('section_17')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        //  'image' => $file_name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_17(Request $request) {
        $affected = DB::table('section_17')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'paragraph' => $request->paragraph
                ]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_section_17($id) {
        DB::table('section_17')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 18  Section
    public function store_section_18(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->image); $i++) {

            $file = $data['image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_18'), $file_name); // move files to destination folder

            DB::table('section_18')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'image' => $file_name,
                        'headingone' => $data['headingone'],
                        'headingtwo' => $data['headingtwo']
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_18(Request $request) {
        $file = $request->file('image'); // will get all files

        if ($file == NULL) {

            $affected = DB::table('section_18')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'name' => $request->name,
                'headingone' => $request->headingone,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'headingtwo' => $request->headingtwo
                    ]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {


            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_18'), $file_name); // move files to destination folder
            $affected = DB::table('section_18')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'name' => $request->name,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'headingone' => $request->headingone,
                'headingtwo' => $request->headingtwo
                    ]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_section_18($id) {
        DB::table('section_18')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

// Store Social Media
    public function store_social_media(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->icon); $i++) {

            $file = $data['icon'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('social_media'), $file_name); // move files to destination folder
            DB::table('social_media')->insert(
                    [
                        'icon' => $file_name,
                        'name' => $data['name'][$i],
                        'link' => $data['link'][$i]
                    ]
            );
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function delete_social_media($id) {

        DB::table('social_media')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Store Social Media
    public function store_footer_section(Request $request) {
        $data = $request->all();

        if (isset($data['footer_section_1_menu'])) {
            for ($i = 0; $i < count($request->footer_section_1_menu); $i++) {
                DB::table('footer_sections')->insert(
                        [
                            'section_id' => $data['footer_section_1_id'],
                            'name' => $data['footer_section_name_1'],
                            'menu' => $data['footer_section_1_menu'][$i],
                            'link' => $data['footer_section_1_link'][$i]
                        ]
                );
            }
        }

        if (isset($data['footer_section_2_menu'])) {
            for ($i = 0; $i < count($request->footer_section_2_menu); $i++) {
                DB::table('footer_sections')->insert(
                        [
                            'section_id' => $data['footer_section_2_id'],
                            'name' => $data['footer_section_name_2'],
                            'menu' => $data['footer_section_2_menu'][$i],
                            'link' => $data['footer_section_2_link'][$i]
                        ]
                );
            }
        }

        if (isset($data['footer_section_3_menu'])) {
            for ($i = 0; $i < count($request->footer_section_3_menu); $i++) {
                DB::table('footer_sections')->insert(
                        [
                            'section_id' => $data['footer_section_3_id'],
                            'name' => $data['footer_section_name_3'],
                            'menu' => $data['footer_section_3_menu'][$i],
                            'link' => $data['footer_section_3_link'][$i]
                        ]
                );
            }
        }

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function delete_footer_section($id) {

        DB::table('footer_sections')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function store_logo(Request $request) {
        $data = $request->all();
        $file = $data['logo']; // will get all files
        $file_name = $file->getClientOriginalName(); //Get file original name
        $file->move(public_path('logo'), $file_name); // move files to destination folder

        DB::table('logo')->insert(
                ['logo' => $file_name]
        );

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function delete_logo($id) {

        DB::table('logo')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function store_system_user(Request $request) {
        $data = $request->all();
        DB::table('users')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id']
                ]
        );

        $message = 'Logo Inserted successfully';
        return redirect()->back()->with('message', $message);
    }

    public function edit_system_user(Request $request) {

        $data = $request->all();
        $affected = DB::table('users')
                ->where('id', $request->user_id)
                ->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id']
        ]);

        
        $message = 'User Updated successfully';
        return redirect('admin/user_profile/' . $request->user_id)->with('update_message', $message);
    }

    public function system_user_profile($id) {
        $users = DB::table('users')->where('id', '=', $id)->get();
        $main_menu_two = $main_menu_four = DB::table('menus')->get();
        $child_menu_four = $child_menus = DB::table('child_menus')->get();
        $sub_child_menus = DB::table('sub_child_menus')->get();
        return view('user_profile', Compact('users'));
    }

    // Para Style 19  Section
    public function store_section_19(Request $request) {
        $data = $request->all();

        DB::table('section_19')->insert(
                [
                    'name' => $request->name,
                    'padding_top' => $data['padding_top'],
                    'padding_bottom' => $data['padding_bottom']
                ]
        );

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_19(Request $request) {
        $affected = DB::table('section_19')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'padding_top' => $request->padding_top,
            'padding_bottom' => $request->padding_bottom
                ]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_section_19($id) {
        DB::table('section_19')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 20  Section
    public function store_section_20(Request $request) {
        $data = $request->all();

        

            //$file = $data['slider_image'][$i]; // will get all files
            //$file_name = $file->getClientOriginalName(); //Get file original name
            //$file->move(public_path('section_20_slider'), $file_name); // move files to destination folder
            DB::table('section_20')->insert(
                    [
                        'name' => $request->name,
            'heading_1' => $request->heading_1,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'heading_2' => $request->heading_2,
            'btn_class' => $request->btn_class,
            'btn_label' => $request->btn_label]
            );
        

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_20(Request $request) {

        $affected = DB::table('section_20')
                ->where('id', $request->id)
                ->update([
            'name' => $request->name,
            'heading_1' => $request->heading_1,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'heading_2' => $request->heading_2,
            'btn_class' => $request->btn_class,
            'btn_label' => $request->btn_label
                ]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_section_20($id) {
        DB::table('section_20')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // Para Style 21  Section
    public function store_section_21(Request $request) {
        $data = $request->all();

        DB::table('section_21')->insert(
                [
                    'name' => $request->name,
                    'padding_bottom' => $request->padding_bottom,
                    'padding_top' => $request->padding_top, 
                    'slider_name' => $data['slider_name'],
                    'video_name' => $data['video_name']
                ]
        );

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_21(Request $request) {

        $affected = DB::table('section_21')
                ->where('id', $request->id)
                ->update([
            'name' => $request->name,
            'slider_name' => $request->slider_name,
            'padding_bottom' => $request->padding_bottom,
            'padding_top' => $request->padding_top, 
            'video_name' => $request->video_name
                ]
        );
        $message = 'Updated Successfully';
        return redirect()->back()->with('update_message', $message);
    }

    public function delete_section_21($id) {
        DB::table('section_21')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    // 22  Section
    public function store_section_22(Request $request) {
        $data = $request->all();

        if (!empty($request->file('image'))) {
            $file = $request->file('image'); // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_22'), $file_name); // move files to destination folder
        } else {
            $file_name = "";
        }

        DB::table('section_22')->insert(
                [
                    'name' => $request->name,
                    'padding_bottom' => $request->padding_bottom,
                    'padding_top' => $request->padding_top, 
                    'heading_1' => $data['heading_1'],
                    'heading_2' => $data['heading_2'],
                    'image' => $file_name,
                    'video' => $data['video'],
                    'text' => $data['text']
                ]
        );

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);
    }

    public function edit_section_22(Request $request) {
        $file = $request->file('image'); // will get all files

        if ($file == NULL) {

            $affected = DB::table('section_22')
                    ->where('id', $request->id)
                    ->update([
                'name' => $request->name,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'heading_1' => $request->heading_1,
                'heading_2' => $request->heading_2,
                'video' => $request->video,
                'text' => $request->text
                    ]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_22'), $file_name); // move files to destination folder
            $affected = DB::table('section_22')
                    ->where('id', $request->id)
                    ->update([
                'name' => $request->name,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'heading_1' => $request->heading_1,
                'heading_2' => $request->heading_2,
                'image' => $file_name,
                'video' => $request->video,
                'text' => $request->text
                    ]
            );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
        }
    }

    public function delete_section_22($id) {
        DB::table('section_22')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function store_service(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->service); $i++) {
            DB::table('services')->insert(
                    [
                        'name' => $data['name'],
                        'padding_bottom' => $request->padding_bottom,
                        'padding_top' => $request->padding_top, 
                        'main_service' => $data['service'][$i],
                        'bootstra_class_name' => $data['class_name'],
                        'sub_service' => $data['sub_category'][$i],
                        'sub_service_link' => $data['sub_service_link'][$i],
                        'third_service' => $data['third_category'][$i],
                        'third_service_link' => $data['third_service_link'][$i]
                    ]
            );
        }

        $message = 'Services Inserted successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_service(Request $request) {
        $data = $request->all();
        $affected = DB::table('services')
                ->where('id', $request->id)
                ->update(
                ['name' => $request->name, 'padding_bottom' => $request->padding_bottom, 'padding_top' => $request->padding_top,  'main_service' => $request->main_service, 'bootstra_class_name' => $request->class_name, 'sub_service' => $request->sub_service, 'sub_service_link' => $request->sub_service_link]
        );

        $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
    }

    public function delete_service($id) {
        DB::table('services')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function store_footer_bottom(Request $request) {
        DB::table('footer_bottoms')->insert(
                ['city' => $request->city, 'address' => $request->address, 'copyright' => $request->copyright]
        );
        return redirect()->back();
    }



    // 23  Section
    public function store_section_23(Request $request) {
        $data = $request->all();

        if (!empty($request->file('image'))) {
            $file = $request->file('image'); // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_23'), $file_name); // move files to destination folder
        } else {
            $file_name = "";
        }

        DB::table('section_23')->insert(
                [
                    'name' => $request->name,
                    'padding_bottom' => $request->padding_bottom,
                    'padding_top' => $request->padding_top, 
                    'heading' => $data['heading'],
                    'title' => $data['title']
                ]
        );

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);

        
    }

    public function edit_section_23(Request $request) {
        
            $affected = DB::table('section_23')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'heading' => $request->heading,
                'title' => $request->title
                    ]
                );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
    }

    public function delete_section_23($id) {
        DB::table('section_23')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }


    
    // 23  Section Headings
    public function store_section_heading(Request $request) {
        $data = $request->all();

        if (!empty($request->file('image'))) {
            $file = $request->file('image'); // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_23'), $file_name); // move files to destination folder
        } else {
            $file_name = "";
        }

        DB::table('headings')->insert(
                [
                    'name' => $request->name,
                    'padding_bottom' => $request->padding_bottom,
                    'padding_top' => $request->padding_top, 
                    'heading' => $data['heading'],
                    'title' => $data['title']
                ]
        );

        $message = 'Saved Successfully';
        return redirect()->back()->with('success_message', $message);

        
    }

    public function edit_section_heading(Request $request) {
        
            $affected = DB::table('headings')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'padding_bottom' => $request->padding_bottom,
                'padding_top' => $request->padding_top, 
                'heading' => $request->heading,
                'title' => $request->title
                    ]
                );
            $message = 'Updated Successfully';
            return redirect()->back()->with('update_message', $message);
    }

    public function delete_section_heading($id) {
        DB::table('headings')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    public function slider_innerpage($id){
        
        $row_sliders = DB::table('sliders')->where('id','=',$id)->first();

        if($row_sliders == null){
            return redirect('admin/page_sections');
        }
        
        
        return view('backend.slider_detail', Compact('row_sliders'));
    }

    public function slide_delete($id){

        
        DB::table('sliders')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }

    


    public function team_innerpage($id){
        
        $row_team = DB::table('teams')->where('id','=',$id)->first();

        if($row_team == null){
            return redirect('admin/page_sections/team');
        }
        
        
        return view('backend.team_detail', Compact('row_team'));
    }

    public function team_delete($id){

        
        DB::table('team')->where('id', '=', $id)->delete();
        $message = 'Successfully Deleted';
        return redirect()->back()->with('delete_message', $message);
    }


}


