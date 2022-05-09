@extends('layouts.frontend')
@section('content')

 
 
<section class="section-bg-grey section-padtop-100 section-padbottom-100 portfolio">
    <div class="web-container-fluid">
        <div class="row justify-content-center">
            <div class="text-center">
                <h4 class="web-h4">Portfolio</h4>
                <h2 class="web-h2 mb-0">Case Studies</h2>

                <div class="portfolio-filters">
                <div class="portfolio-filters">
                    <div class="text-center my-3">
                        <ul class="case-study-dropdown-ul list-inline p-0 m-0">
                        <li class="list-inline-item">
                            <div class="dropdown case-study-dropdown">
                                    <button class="btn btn-secondary case-study-dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Service Categories 
                                    </button>
                                    <div class="dropdown-menu case_study_page_sections" aria-labelledby="dropdownMenuButton">
                                            <form>
                                                    @foreach($main_menu as $row_main_menu)
                                                    <div class="custom-control custom-checkbox">
                                                        <input onclick="service_clicked(this);" type="checkbox" value="{{$row_main_menu->menu_link}}" class="custom-control-input" id="customCheck{{$row_main_menu->id}}">
                                                        <label class="custom-control-label" for="customCheck{{$row_main_menu->id}}">{{$row_main_menu->menu_name}}</label>
                                                    </div>
                                                    @endforeach
                                            </form>
                                    </div>
                            </div>
                        </li>
                        
                        <li style="display:none;" class="sub_category_new list-inline-item">
                            <div class="dropdown case-study-dropdown">
                                <button class="btn btn-secondary case-study-dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Service Sub Categories 
                                </button>
                                <div class="dropdown-menu case_study_page_sections_sub_service" id="sub_service_dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="sub_service_list">

                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li class="list-inline-item">
                        <div class="dropdown case-study-dropdown">
                        <button class="btn btn-secondary case-study-dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Industries 
                        </button>
                        <div class="dropdown-menu case_study_page_sections_industry" id="industry-dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form>
                                @php
                                $industries = DB::table('industries')->get();
                                @endphp
                                @foreach($industries as $row_industries)
                                <div class="custom-control custom-checkbox">
                                    <input onclick="industry_clicked(this);" type="checkbox" value="{{$row_industries->title}}" @if($row_industries->id == $industry_id)checked @endif class="custom-control-input" id="customCheck_b{{$row_industries->id}}">
                                    <label class="custom-control-label" for="customCheck_b{{$row_industries->id}}">{{$row_industries->title}}</label>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                        </li>
                    </ul>
                    </div>

                </div>


                </div>

                <div class="portfolio-filters-tags">

                    <ul id="industries" class="list-inline mt-4 mb-3 p-0">
                        <li class="main_service_tag list-inline-item">{{$industry_name}}<span><i id="customCheck_b{{$industry_id}}" onclick="remove_this_tag(this);" class="fas fa-times"></i></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center case_study_container">
            <div style="display:none;" id="if_all_zero" class="message-box error-box success-box text-center mb-4">
                <div><i class="far fa-exclamation-circle"></i></div>
                <h4 class="web-h4 web-grey web-bold mb-4">Sorry! We could not find any results against your search criteria.</h4>
                <p class="web-h4 web-light-grey mb-0">Please use other filters to redefine your search.</p>
            </div>
            <div class="message-box row">
                <img id="loading-image" src="{{asset('public/front_theme/loader.gif')}}" style="display:none;"/>
            </div>

            
            @foreach($case_study as $row_case_study)
            @php
            $services = DB::table('case_study_services')->where('case_study_id', '=', $row_case_study->id)->get();
            $industries = DB::table('case_study_industries')->where('case_study_id', '=', $row_case_study->id)->get();
            $industry = DB::table('industries')->get();
            @endphp

            <div id="yourID" name="check[]" class="@foreach($services->unique('service_id') as $row_services) @php $services_name = DB::table('menus')->where('id', '=', $row_services->service_id)->first(); @endphp @if($services_name->id == $row_services->service_id){{$services_name->menu_link}} @endif @endforeach @foreach($services->unique('sub_service_id') as $row_services) @php $sub_services_name = DB::table('child_menus')->where('id', '=', $row_services->sub_service_id)->first(); @endphp @if($sub_services_name->id == $row_services->sub_service_id){{$sub_services_name->item_link}} @endif @endforeach @foreach($industries->unique('industry_id') as $row_industries) @php $industry_name = DB::table('industries')->where('id', '=', $row_industries->industry_id)->first(); @endphp @if($row_industries->industry_id == $industry_name->id){{$industry_name->slug}} @endif @endforeach col-6 col-md-4 col-lg-3 mt-5">
                <div class="single-portfolio">
                    <a href="{{url('case-study',$row_case_study->slug)}}">
                        <div class="portfolio-img">
                            <div class="img-block web-border-radius-5">
                                <img src="{{asset('public/case_study/'.$row_case_study->image)}}" alt="" class="obj-cover">
                            </div>
                        </div>
                    </a>
                    <div class="web-border-bottom mt-4 mb-3">
                        <h5 class="web-h5">{{$row_case_study->title}}</h5>
                        <p class="mb-0 p-14 pb-3">{{$row_case_study->short_description}}</p>
                    </div>
                    @php
                    
                        $industry_id = DB::table('case_study_industries')->where('id','=',$row_case_study->industry_id)->first();
                        
                    @endphp
                    <ul id="industries_list" class="list-inline mt-4 mb-1 p-0">
                        
                            
                                @php
                                $industry_name = DB::table('industries')->where('id','=',$industry_id->id)->get();
                                @endphp
                                <li class="industries_tag list-inline-item">
                                    <a target="_blank" href="{{URL::to('work/',$industry_name[0]->slug)}}" class="badge badge-light">@if(!$industry_name->isEmpty()) {{$industry_name[0]->title}} @endif
                                    </a>
                                </li>
                            
                    </ul>

                </div>
            </div>
            @endforeach

            <div class="col-md-12">
                <ul class="list-inline mt-5 text-center">
                    <li class="list-inline-item"><a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                    <li class="list-inline-item"><a href="/work" class="blue-link web-h6">View more <i class="fas fa-chevron-right pl-1"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
</section>

@endsection




    
       
    
        
        
    


