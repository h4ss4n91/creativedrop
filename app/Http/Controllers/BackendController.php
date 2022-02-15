<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeEmail;

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
        return redirect()->back()->with('message', $message);
    }

    public function index() {
        $main_menu = $main_menu_two = $main_menu_four = DB::table('menus')->get();
        $child_menu_four = DB::table('child_menus')->get();
        $child_menus = DB::table('child_menus')->get();
        $sub_child_menus = DB::table('sub_child_menus')->get();
        return view('menu', Compact('main_menu', 'child_menus', 'sub_child_menus', 'main_menu_two', 'main_menu_four', 'child_menu_four'));
    }

    public function system() {
        $social = DB::table('social_media')->get();
        $footer_section = DB::table('footer_sections')->get();
        $logo = DB::table('logo')->get();
        $system_user = DB::table('users')->get();
        return view('system', Compact('social', 'footer_section', 'logo', 'system_user'));
    }

    public function delete_page($id) {

        DB::table('page')->where('id', '=', $id)->delete();

        return redirect()->back();
    }

    public function create_page(Request $request) {
        $data = $request->all();

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

        return redirect()->back();
    }

    public function edit_page_content($id) {
        $main_menu = DB::table('menus')->where('menu_link', '!=', '#')->get();
        $page = DB::table('page')
                ->join('page_detail', 'page_detail.page_id', '=', 'page.id')
                ->where('page.id', '=', $id)
                ->orderBy('page_detail.section_no', 'ASC')
                ->get();
        $count = count($page);
        $page_section = DB::table('page_section')->get();
        return view('edit_page', Compact('page', 'page_section', 'main_menu', 'count'));
    }

    public function edit_page(Request $request) {
        $id = $request->id;
        $data = $request->all();
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

        return redirect()->back();
    }

    public function pages() {
        $main_menu = DB::table('menus')->where('menu_link', '!=', '#')->orderBy('sorting', 'ASC')->get();
        $pages = DB::table('page')->get();
        $page_section = DB::table('page_section')->get();
        return view('pages', Compact('pages', 'main_menu', 'page_section'));
    }

    public function sections_1() {
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
        return redirect()->back();
    }

    public function edit_main_menu(Request $request) {

        $affected = DB::table('menus')
                ->where('id', $request->id)
                ->update([
            'menu_name' => $request->menu_name,
            'menu_link' => $request->menu_link,
            'sorting' => $request->sorting
        ]);

        return redirect()->back();
    }

    public function delete_main_menu($id) {

        DB::table('menus')->where('id', '=', $id)->delete();

        return redirect()->back();
    }

    public function store_child_menu(Request $request) {
        DB::table('child_menus')->insert(
                ['menu_id' => $request->main_menu_id, 'item_name' => $request->child_menu, 'sorting' => $request->sorting, 'featured_service' => $request->featured_service, 'item_link' => $request->child_menu_link]
        );
        return redirect()->back();
    }

    public function edit_child_menu(Request $request) {

        $affected = DB::table('child_menus')
                ->where('id', $request->id)
                ->update([
            'menu_id' => $request->main_menu_id,
            'item_name' => $request->item_name,
            'sorting' => $request->sorting,
            'featured_service' => $request->featured_service,
            'item_link' => $request->item_link
        ]);

        return redirect()->back();
    }

    public function delete_child_menu($id) {

        DB::table('child_menus')->where('id', '=', $id)->delete();

        return redirect()->back();
    }

    // Sub Child Menu

    public function store_sub_child_menu(Request $request) {
        DB::table('sub_child_menus')->insert(
                ['menu_id' => $request->main_menu_id, 'child_menu_id' => $request->child_menu_id, 'sorting' => $request->sorting, 'item_name' => $request->sub_child_item_name, 'item_link' => $request->sub_child_item_link]
        );
        return redirect()->back();
    }

    public function edit_sub_child_menu(Request $request) {

        $affected = DB::table('sub_child_menus')
                ->where('id', $request->id)
                ->update([
            'child_menu_id' => $request->main_menu_id,
            'item_name' => $request->edit_sub_child_item_name,
            'sorting' => $request->sorting,
            'item_link' => $request->edit_sub_child_item_link
        ]);

        return redirect()->back();
    }

    public function delete_sub_child_menu($id) {

        DB::table('sub_child_menus')->where('id', '=', $id)->delete();

        return redirect()->back();
    }

    public function store_slider(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->text_1); $i++) {
            $file = $data['slider_image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('slider'), $file_name); // move files to destination folder
            DB::table('sliders')->insert(
                    [
                        'image' => $file_name,
                        'name' => $data['name'],
                        'status' => $data['status'][$i],
                        'text1' => $data['text_1'][$i],
                        'text2' => $data['text_2'][$i],
                        'contact_button_link' => $data['link'][$i]]
            );
        }

        $message = 'Sliders Inserted successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_slider(Request $request) {
        $file = $request->file('slider_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('sliders')
                    ->where('id', $request->id)
                    ->update(
                    ['page_id' => $request->page_id, 'name' => $request->name, 'status' => $request->status, 'text1' => $request->text1, 'text2' => $request->text2, 'contact_button_link' => $request->contact_button_link]
            );

            return redirect()->back();
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('slider'), $file_name); // move files to destination folder
            $affected = DB::table('sliders')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'page_id' => $request->page_id, 'name' => $request->name, 'status' => $request->status, 'text1' => $request->text1, 'text2' => $request->text2, 'contact_button_link' => $request->contact_button_link]
            );

            return redirect()->back();
        }
    }

    public function delete_slider($id) {
        DB::table('sliders')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Video Section

    public function store_video(Request $request) {

        DB::table('videos')->insert([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'video_title' => $request->video_title,
            'video_link' => $request->video_link,
            'contact_button_link' => $request->contact_button_link,
            'button_label' => $request->button_label
        ]);
        return redirect()->back();
    }

    public function edit_video(Request $request) {

        $affected = DB::table('videos')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'video_title' => $request->video_title,
            'video_link' => $request->video_link,
            'contact_button_link' => $request->contact_button_link,
            'button_label' => $request->button_label
        ]);
        return redirect()->back();
    }

    public function delete_video($id) {

        DB::table('videos')->where('id', '=', $id)->delete();

        return redirect()->back();
    }

    // Case Study Section
    public function store_case_study(Request $request) {

        $data = $request->all();
        

            $file = $data['case_study_image']; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('case_study'), $file_name); // move files to destination folder
        
            $id = DB::table('case_study')->insertGetId([
                        'name' => $request->name,
                        'image' => $file_name,
                        'title' => $request->case_study_name,
                        'short_description' => $request->short_description]
            );


        for ($i = 0; $i < count($request->type); $i++) {

            if($data['type'][$i] == "image"){

                $file_content = $data['case_study_image_content'][$i]; // will get all files
                $file_content_name = $file_content->getClientOriginalName(); //Get file original name
                $file_content->move(public_path('case_study_content'), $file_content_name); // move files to destination folder


                DB::table('case_study_content')->insert(
                    [
                        'case_study_id' => $id,
                        'image' => $file_content,
                        'type' => $data['type'][$i],
                        'image_style' => $data['select_style_for_image'][$i],
                        'video_link' => $data['video'][$i]]
                );

            }else{

                if ($data['select_style_for_video'][$i] != NULL) {

                    $file_video_bg_content = $data['case_study_video_background'][$i]; // will get all files
                    $file_video_bg_content_name = $file_video_bg_content->getClientOriginalName(); //Get file original name
                    $file_video_bg_content->move(public_path('case_study_video_background'), $file_video_bg_content_name); // move files to destination folder

                    DB::table('case_study_content')->insert(
                        [
                            'case_study_id' => $id,
                            'type' => $data['type'][$i],
                            'video_background' => $file_video_bg_content,
                            'video_style' => $data['select_style_for_video'][$i],
                            'video_link' => $data['video'][$i]]
                    );
                }else{

                    DB::table('case_study_content')->insert(
                        [
                            'case_study_id' => $id,
                            'type' => $data['type'][$i],
                            'video_style' => $data['select_style_for_video'][$i],
                            'video_link' => $data['video'][$i]]
                    );
                }
            }

        
    }


    

    

    for ($i = 0; $i < count($request->service); $i++) {

        DB::table('case_study_services')->insert(
            [
                'case_study_id' => $id,
                'service_id' => $data['service'][$i],
                'sub_service_id' => $data['sub_category'][$i]]
        );
    }

    for ($i = 0; $i < count($request->industry); $i++) {

        DB::table('case_study_industries')->insert(
            [
                'case_study_id' => $id,
                'industry_id' => $data['industry'][$i]]
        );
    }





        $message = 'Case Study Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_case_study(Request $request) {
        $file = $request->file('case_study_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('case_study')
                    ->where('id', $request->id)
                    ->update(
                    ['page_id' => $request->page_id, 'name' => $request->name, 'title' => $request->title, 'short_description' => $request->short_description, 'link' => $request->link]
            );
            return redirect()->back();
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('case_study'), $file_name); // move files to destination folder
            $affected = DB::table('case_study')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'page_id' => $request->page_id, 'name' => $request->name, 'title' => $request->title, 'short_description' => $request->short_description, 'link' => $request->link]
            );
            return redirect()->back();
        }
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
                        'name' => $data['name']
                    ]
            );
        }

        $message = 'Case Study Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_client_and_partner(Request $request) {
        $file = $request->file('clientAndParter_image'); // will get all files
        if ($file == NULL) {
            $affected = DB::table('clientandparterimage')
                    ->where('id', $request->id)
                    ->update(
                    ['page_id' => $request->page_id]
            );
            return redirect()->back();
        } else {
            $file = $request->file('clientAndParter_image'); // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('client_and_partner'), $file_name); // move files to destination folder
            $affected = DB::table('clientandparterimage')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'page_id' => $request->page_id]
            );
            return redirect()->back();
        }
    }

    public function delete_client_and_partner($id) {
        DB::table('clientandparterimage')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Industry Section
    public function store_industries(Request $request) {
        $data = $request->all();
        $file = $data['industry_image']; // will get all files
        $file_name = $file->getClientOriginalName(); //Get file original name
        $file->move(public_path('industries'), $file_name); // move files to destination folder

            $id = DB::table('industries')->insertGetId(
                    [
                        'image' => $file_name,
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'title' => $data['title']
                    ]
            );
        return redirect()->back();
    }

    public function edit_industry(Request $request) {
        $file = $request->file('industry_image'); // will get all files
        if ($file == NULL) {
            $affected = DB::table('industries')
                    ->where('id', $request->id)
                    ->update(
                    ['name' => $request->name, 'page_id' => $request->page_id]
            );
            return redirect()->back();
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('industries'), $file_name); // move files to destination folder
            $affected = DB::table('industries')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'name' => $request->name, 'page_id' => $request->page_id]
            );
            return redirect()->back();
        }
    }

    public function delete_industry($id) {
        DB::table('industries')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Team Member Section
    public function store_team(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->team_member_title); $i++) {

            $file = $data['team_member_image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('team'), $file_name); // move files to destination folder
            DB::table('teams')->insert(
                    ['image' => $file_name, 'section_name' => $data['name'], 'name' => $data['team_member_title'][$i], 'designation' => $data['team_member_designation'][$i]]
            );
        }

        return redirect()->back();
    }

    public function edit_team(Request $request) {
        $file = $request->file('team_member_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('teams')
                    ->where('id', $request->id)
                    ->update(
                    ['page_id' => $request->page_id, 'name' => $request->team_member_title, 'designation' => $request->team_member_designation]
            );
            return redirect()->back();
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('team'), $file_name); // move files to destination folder
            $affected = DB::table('teams')
                    ->where('id', $request->id)
                    ->update(
                    ['image' => $file_name, 'page_id' => $request->page_id, 'name' => $request->team_member_title, 'designation' => $request->team_member_designation]
            );
            return redirect()->back();
        }
    }

    public function delete_team($id) {
        DB::table('teams')->where('id', '=', $id)->delete();
        return redirect()->back();
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
            'description' => $request->news_short_description,
            'link' => $request->link]
        );
        return redirect()->back();
    }

    public function edit_news(Request $request) {
        $file = $request->file('news_image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('news_and_opinions')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->news_title,
                'description' => $request->news_short_description,
                'link' => $request->link]
            );
            return redirect()->back();
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('news_and_opinions'), $file_name); // move files to destination folder
            $affected = DB::table('news_and_opinions')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'title' => $request->news_title,
                'description' => $request->news_short_description,
                'link' => $request->link]
            );
            return redirect()->back();
        }
    }

    public function delete_news($id) {
        DB::table('news_and_opinions')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Request  Section
    public function store_request(Request $request) {

        $data = $request->all();

        for ($i = 0; $i < count($request->request_title); $i++) {
            DB::table('requests')->insert(
                    [
                        // 'image' => $file_name,
                        'style' => $data['style'],
                        'btn_label' => $data['button_label'][$i],
                        'name' => $data['name'],
                        'title' => $data['request_title'][$i]
                    ]
            );
        }

        $message = 'Request for Meeting Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_request(Request $request) {

        $affected = DB::table('requests')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'btn_label' => $request->button_label,
            'title' => $request->title,
            'style' => $request->style,
            'name' => $request->name]
        );
        return redirect()->back();
    }

    public function delete_request($id) {
        DB::table('requests')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'title' => $data['title'][$i],
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        //return dd($data);
        $message = 'Request for Meeting Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_para_style_1(Request $request) {
        $file = $request->file('image'); // will get all files
        if ($file == NULL) {

            $affected = DB::table('news_and_opinions')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->news_title,
                'description' => $request->news_short_description,
                'link' => $request->link]
            );
            return redirect()->back();
        } else {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_1'), $file_name); // move files to destination folder
            DB::table('para_style_1')->insert([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            return redirect()->back();
        }
    }

    public function delete_para_style_1($id) {
        DB::table('para_style_1')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                        'flex_row_reverse' => $data['flex_row_reverse'][$i],
                        'name' => $request->name,
                        'title' => $data['title'][$i],
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Request for Meeting Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_para_style_2(Request $request) {

        $file = $request->file('image'); // will get all files

        if ($file == NULL) {

            $affected = DB::table('para_style_2')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            return redirect()->back();
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_2'), $file_name); // move files to destination folder
            $affected = DB::table('para_style_2')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            return redirect()->back();
        }
    }

    public function delete_para_style_2($id) {
        DB::table('para_style_2')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                        'title' => $data['title'][$i],
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Para Style Three  Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_para_style_3(Request $request) {

        $file = $request->file('image'); // will get all files

        if ($file == NULL) {

            $affected = DB::table('para_style_3')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            return redirect()->back();
        } else {


            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('para_style_3'), $file_name); // move files to destination folder
            $affected = DB::table('para_style_3')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'link' => $request->link]
            );
            return redirect()->back();
        }
    }

    public function delete_para_style_3($id) {
        DB::table('para_style_3')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Para Style 4  Section
    public function store_para_style_4(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->paragraph); $i++) {
            DB::table('para_style_4')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'title' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Para Style Four  Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_para_style_4(Request $request) {
        $affected = DB::table('para_style_4')
                ->where('id', $request->id)
                ->update([
            'name' => $request->name,
            'title' => $request->paragraph]
        );
        return redirect()->back();
    }

    public function delete_para_style_4($id) {
        DB::table('para_style_4')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Para Style 5  Section
    public function store_para_style_5(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->heading); $i++) {
            DB::table('para_style_5')->insert(
                    [
                        'page_id' => $request->page_id,
                        'name' => $request->name,
                        'style' => $request->style,
                        'heading_size' => $data['heading_size'][$i],
                        'heading' => $data['heading'][$i],
                        'text_left' => $data['text_left'][$i],
                        'text_right' => $data['text_right'][$i]
                    ]
            );
        }

        $message = 'Para Style Five  Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_para_style_5(Request $request) {
        $affected = DB::table('para_style_5')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'style' => $request->style,
            'heading_size' => $request->heading_size,
            'heading' => $request->heading,
            'text_left' => $request->text_left,
            'text_right' => $request->text_right,
                ]
        );
        return redirect()->back();
    }

    public function delete_para_style_5($id) {
        DB::table('para_style_5')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                        'style' => $request->style,
                        'image' => $file_name,
                        'heading1' => $data['heading'][$i],
                        'flex_row_reverse' => $data['flex_row_reverse'][$i]
                    ]
            );
        }

        $message = 'Section 15 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_section_15(Request $request) {

        $file = $request->file('image'); // will get all files
        if ($file == NULL) {
            $affected = DB::table('section_15')
                    ->where('id', $request->id)
                    ->update([
                'page_id' => $request->page_id,
                'style' => $request->style,
                'name' => $request->name,
                'heading1' => $request->heading,
                'flex_row_reverse' => $request->flex_row_reverse]
            );
            return redirect()->back();
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
                'name' => $request->name,
                'heading1' => $request->heading,
                'flex_row_reverse' => $request->flex_row_reverse]
            );
            return redirect()->back();
        }
    }

    public function delete_section_15($id) {
        DB::table('section_15')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                        'image' => $file_name,
                        'text' => $data['text'][$i],
                        'heading' => $data['heading'][$i]
                    ]
            );
        }

        $message = 'Section 16 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_section_16(Request $request) {
        $affected = DB::table('section_16')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'text' => $request->text,
            'heading' => $request->heading
                ]
        );
        return redirect()->back();
    }

    public function delete_section_16($id) {
        DB::table('section_16')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                        'paragraph' => $data['paragraph'][$i]
                    ]
            );
        }

        $message = 'Section 17 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_section_17(Request $request) {
        $affected = DB::table('section_17')
                ->where('id', $request->id)
                ->update([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'paragraph' => $request->paragraph
                ]
        );
        return redirect()->back();
    }

    public function delete_section_17($id) {
        DB::table('section_17')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                        'image' => $file_name,
                        'headingone' => $data['headingone'],
                        'headingtwo' => $data['headingtwo']
                    ]
            );
        }

        $message = 'Section 18 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
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
                'headingtwo' => $request->headingtwo
                    ]
            );
            return redirect()->back();
        } else {


            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_18'), $file_name); // move files to destination folder
            $affected = DB::table('section_18')
                    ->where('id', $request->id)
                    ->update([
                'image' => $file_name,
                'page_id' => $request->page_id,
                'name' => $request->name,
                'headingone' => $request->headingone,
                'headingtwo' => $request->headingtwo
                    ]
            );
            return redirect()->back();
        }
    }

    public function delete_section_18($id) {
        DB::table('section_18')->where('id', '=', $id)->delete();
        return redirect()->back();
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

        $message = 'Social Media Inserted successfully';
        return redirect('admin/system')->with('message', $message);
    }

    public function delete_social_media($id) {

        DB::table('social_media')->where('id', '=', $id)->delete();
        return redirect()->back();
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

        $message = 'Footer Section Inserted successfully';
        return redirect('admin/system')->with('message', $message);
    }

    public function delete_footer_section($id) {

        DB::table('footer_sections')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function store_logo(Request $request) {
        $data = $request->all();
        $file = $data['logo']; // will get all files
        $file_name = $file->getClientOriginalName(); //Get file original name
        $file->move(public_path('logo'), $file_name); // move files to destination folder

        DB::table('logo')->insert(
                ['logo' => $file_name]
        );

        $message = 'Logo Inserted successfully';
        return redirect('admin/system')->with('message', $message);
    }

    public function delete_logo($id) {

        DB::table('logo')->where('id', '=', $id)->delete();
        return redirect()->back();
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
        return redirect('admin/system')->with('message', $message);
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
        return redirect('admin/user_profile/' . $request->user_id)->with('message', $message);
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

        $message = 'Section 19 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
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
        return redirect()->back();
    }

    public function delete_section_19($id) {
        DB::table('section_19')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Para Style 20  Section
    public function store_section_20(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->text_1); $i++) {

            $file = $data['slider_image'][$i]; // will get all files
            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_20_slider'), $file_name); // move files to destination folder
            DB::table('sliders')->insert(
                    [
                        'image' => $file_name,
                        'name' => $data['name'],
                        'status' => $data['status'][$i],
                        'text1' => $data['text_1'][$i],
                        'text2' => $data['text_2'][$i],
                        'contact_button_link' => $data['link'][$i]]
            );
        }

        $message = 'Sliders Inserted successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_section_20(Request $request) {

        $affected = DB::table('section_20')
                ->where('id', $request->id)
                ->update([
            'name' => $request->name,
            'heading_1' => $request->heading_1,
            'heading_2' => $request->heading_2,
            'btn_class' => $request->btn_class,
            'btn_label' => $request->btn_label
                ]
        );
        return redirect()->back();
    }

    public function delete_section_20($id) {
        DB::table('section_20')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    // Para Style 21  Section
    public function store_section_21(Request $request) {
        $data = $request->all();

        DB::table('section_21')->insert(
                [
                    'name' => $request->name,
                    'slider_name' => $data['slider_name'],
                    'video_name' => $data['video_name']
                ]
        );

        $message = 'Section 21 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_section_21(Request $request) {

        $affected = DB::table('section_21')
                ->where('id', $request->id)
                ->update([
            'name' => $request->name,
            'slider_name' => $request->slider_name,
            'video_name' => $request->video_name
                ]
        );
        return redirect()->back();
    }

    public function delete_section_21($id) {
        DB::table('section_21')->where('id', '=', $id)->delete();
        return redirect()->back();
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
                    'heading_1' => $data['heading_1'],
                    'heading_2' => $data['heading_2'],
                    'image' => $file_name,
                    'video' => $data['video'],
                    'text' => $data['text']
                ]
        );

        $message = 'Section 22 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_section_22(Request $request) {
        $file = $request->file('image'); // will get all files

        if ($file == NULL) {

            $affected = DB::table('section_22')
                    ->where('id', $request->id)
                    ->update([
                'name' => $request->name,
                'heading_1' => $request->heading_1,
                'heading_2' => $request->heading_2,
                'video' => $request->video,
                'text' => $request->text
                    ]
            );
            return redirect()->back();
        } else {

            $file_name = $file->getClientOriginalName(); //Get file original name
            $file->move(public_path('section_22'), $file_name); // move files to destination folder
            $affected = DB::table('section_22')
                    ->where('id', $request->id)
                    ->update([
                'name' => $request->name,
                'heading_1' => $request->heading_1,
                'heading_2' => $request->heading_2,
                'image' => $file_name,
                'video' => $request->video,
                'text' => $request->text
                    ]
            );
            return redirect()->back();
        }
    }

    public function delete_section_22($id) {
        DB::table('section_22')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function store_service(Request $request) {
        $data = $request->all();

        for ($i = 0; $i < count($request->service); $i++) {
            DB::table('services')->insert(
                    [
                        'name' => $data['name'],
                        'main_service' => $data['service'][$i],
                        'bootstra_class_name' => $data['class_name'],
                        'sub_service' => $data['sub_category'][$i],
                        'sub_service_link' => $data['sub_service_link'][$i]
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
                ['name' => $request->name, 'main_service' => $request->main_service, 'bootstra_class_name' => $request->class_name, 'sub_service' => $request->sub_service, 'sub_service_link' => $request->sub_service_link]
        );

        return redirect()->back();
    }

    public function delete_service($id) {
        DB::table('services')->where('id', '=', $id)->delete();
        return redirect()->back();
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

        DB::table('section_23')->insert(
                [
                    'name' => $request->name,
                    'heading' => $request->heading,
                    'title' => $request->title
                    
                ]
        );

        $message = 'Section 23 Added successfully';
        return redirect('admin/page_sections')->with('message', $message);
    }

    public function edit_section_23(Request $request) {
        
            $affected = DB::table('section_23')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'heading' => $request->heading,
                'title' => $request->title
                    ]
                );
            return redirect()->back();
            

        



       
    }

    public function delete_section_23($id) {
        DB::table('section_23')->where('id', '=', $id)->delete();
        return redirect()->back();
    }


}
