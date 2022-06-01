@if( $row_pages->section== '1' )
<section class="banner-with-video">
    @php
    $sliders = DB::table('sliders')->where('name', '=', $row_pages->section_type)->get();
    @endphp
    <div class="main-wrap">
            <section class="home-slider section-bg-black creative-banner">
                <!-- Images slider - Start -->
                <div class="web-container">
                    <div class="row">
                        <div class="col-12">
                            @guest
            
                            @else
                            
                            <div class="edit_delete_add_component" style="float:right">
                                <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                                    <i class="fa fa-edit"></i>
                                  </button>
                                  <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                               <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
                               <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
                                <i class="fa fa-plus"></i>
                              </button>
                              <!-- Modal -->
                                <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Select Page Section</label>
                                                                <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                                    @php
                                                                        $page_section = DB::table('page_section')->get();
                                                                    @endphp
                                                                    @foreach($page_section as $row_page_sections)
                                                                        <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="account-username">Select Page Section Component</label>
                                                                <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                                    
                                                                </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                                    </div>
                                            </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>    
                              
                            @endguest
                            <div id="carouselExampleIndicators" class="position-relative scrollto-section carousel slide" data-ride="carousel">
                                <a href="#section-2" id="sectionTwo" class="mouse" aria-hidden="true">
                                    <span class="mouse__wheel"></span>
                                    <span class="mouse__text">SCROLL TO EXPLORE</span>
                                </a>
                                <ol class="carousel-indicators">
                                    @php $num = 0; @endphp
                                    @foreach($sliders as $row_slider)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$num++}}" class="{{$row_slider->status}}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">

                                    @foreach($sliders as $row_slider)
                                    <div class="carousel-item {{$row_slider->status}}" style="background: url('{{asset('public/slider/'.$row_slider->image)}}') no-repeat center right;">
                                        <div class="slider-flex-wrap">
                                            <div class="homepage-banner-content">
                                                <p class="web-h5 text-white mb-0">{{$row_slider->text1}}</p>
                                                <h2 class="web-h2 text-white mb-4">{{$row_slider->text2}}</h2>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a id="contact_us" href="#" class="{{$row_slider->style}}" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                                                    <li class="list-inline-item"><a href="{{$row_slider->link}}" class="blue-link">Learn more <i class="fas fa-chevron-right pl-1"></i></a></li>
                                                </ul>

                                            </div>
                                            <div class="banner-img-mob">
                                                <img class="img-fluid" src="{{asset('public/slider/'.$row_slider->image)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Images slider - End -->
                
            </section>
    </div>

    @elseif( $row_pages->section== '2' )
    @php
    $videos = DB::table('videos')->where('video_title', '=', $row_pages->section_type)->get();
    @endphp
    @foreach($videos as $row_video)

    <section class="section-bg-white section-padtop-@if(!$videos->isEmpty()){{$videos[0]->padding_top}}@endif section-padbottom-@if(!$videos->isEmpty()){{$videos[0]->padding_bottom}}@endif home-video-with-banner">
        <div class="web-container">
            @guest
            
            @else
            
            <div class="edit_delete_add_component" style="float:right">
                <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                    <i class="fa fa-bars"></i>
                </button>
                 <!-- spacer Modal -->
                 <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                    <i class="fa fa-edit"></i>
                  </button>
                  <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            ...
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
               <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
               <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
                <i class="fa fa-plus"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Select Page Section</label>
                                                <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                    @php
                                                        $page_section = DB::table('page_section')->get();
                                                    @endphp
                                                    @foreach($page_section as $row_page_sections)
                                                        <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="account-username">Select Page Section Component</label>
                                                <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                    
                                                </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                    </div>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>    
              
            @endguest

            
            <div class="row">
                <div class="col-md-12">
                    <div style="margin-top:0px !important;" class="home-video-content text-center">
                        <h3 class="web-h3 text-black text-left">{{$row_video->video_title}}</h3>
                        <iframe class="w-100 web-border-radius-5" width="560" height="315" src="{{$row_video->video_link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @endforeach
</section>

@elseif( $row_pages->section== '3' )

@php
$team_section = DB::table('teams')->where('section_name', '=', $row_pages->section_type)->get();
@endphp

<section class="our-team section-bg-white section-padtop-@if(!$team_section->isEmpty()){{$team_section[0]->padding_top}}@endif section-padbottom-@if(!$team_section->isEmpty()){{$team_section[0]->padding_bottom}}@endif ">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
             <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            <div class="col-md-12">
                <h2 class="web-h2 text-center mb-5">Our Team & Leadership</h2>
            </div>
        </div>

        <div class="row">

            @foreach($team_section as $row_team_section)

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="team-box">
                    <div class="img-block web-border-radius-10">
                        <img src="{{asset('public/team/'.$row_team_section->image)}}" alt="" class="obj-cover">
                    </div>
                    <div class="team-overlay web-border-radius-10">
                        <h5 class="web-h5 text-white mb-0 w-75">{{$row_team_section->designation}}</h5>
                    </div>
                    <div class="team-hover">
                        <h2 class="web-h2 mb-0 text-white">{{$row_team_section->name}}</h2>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
   
</section>
@elseif( $row_pages->section== '4' )
@php
$case_study = DB::table('case_study')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-grey section-padtop-@if(!$case_study->isEmpty()){{$case_study[0]->padding_top}}@endif section-padbottom-@if(!$case_study->isEmpty()){{$case_study[0]->padding_bottom}}@endif portfolio">
    <div class="web-container-fluid">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
             <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row justify-content-center">
            <div class="text-center">
                <h4 class="web-h4">Portfolio</h4>
                <h2 class="web-h2 mb-0">Case Studies {{request('industry')}}</h2>

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
                                    <input onclick="industry_clicked(this);" type="checkbox" value="{{$row_industries->title}}" class="custom-control-input" id="customCheck_b{{$row_industries->id}}">
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
                        <p class="mb-0 p-14 mb-3">{{$row_case_study->short_description}}</p>
                    </div>
                    @php
                    $industry_id = DB::table('case_study_industries')->where('case_study_id','=',$row_case_study->id)->get();
                    @endphp
                    <ul id="industries_list" class="list-inline mt-4 mb-1 p-0">
                        
                            @foreach($industry_id as $row_industry_id)
                                @php
                                $industry_name = DB::table('industries')->where('id','=',$row_industry_id->industry_id)->get();
                                @endphp
                                <li class="industries_tag list-inline-item">
                                    <a target="_blank" href="{{url('work',$industry_name[0]->slug)}}" class="badge badge-light">@if(!$industry_name->isEmpty()) {{$industry_name[0]->title}} @endif
                                    </a>
                                </li>
                            @endforeach
                    </ul>

                </div>
            </div>
            @endforeach

            <div class="col-md-12">
                <ul class="list-inline mt-5 text-center">
                    <li class="list-inline-item"><a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                    <li class="list-inline-item"><a href="{{url('work')}}" class="blue-link web-h6">View more <i class="fas fa-chevron-right pl-1"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
</section>

@elseif( $row_pages->section== '5' )
@php
    $services = DB::table('services')
        ->join('child_menus','child_menus.id','=','services.sub_service')
        ->select('child_menus.id as second_level_menu_id','child_menus.item_name as second_level_menu_name','child_menus.item_link as second_level_menu_link','services.*')
        ->where('services.name', '=', $row_pages->section_type)
        ->get();
@endphp
<section id="section-2" class="@if(!$services->isEmpty()) {{$services[0]->bootstra_class_name}} @endif section-padtop-@if(!$services->isEmpty()){{$services[0]->padding_top}}@endif section-padbottom-@if(!$services->isEmpty()){{$services[0]->padding_bottom}}@endif service-block">
    <div class="web-container">
        
        <div class="row">
            
            <div class="col-md-12">
                <h4 class="web-h4">Services</h4>
                <h2 class="web-h2 mb-0">What We Do</h2>
            </div>
            @foreach($services->unique('sub_service') as $row)

            <div class="col-6 col-md-6 col-lg-3">
                <div class="service-links mt-5">
                    <h6 class="web-h6 web-border-bottom pb-4 mb-0">{{$row->second_level_menu_name}}</h6>
                    <ul class="mt-3">
                        @php
                                $third_level_services = DB::table('services')
                                    ->where('name', '=', $row_pages->section_type)
                                    ->where('sub_service', '=', $row->second_level_menu_id)
                                    ->get();

                        @endphp
                        @foreach($third_level_services as $third_row)
                            @php
                                $sub_child_menu = DB::table('sub_child_menus')
                                    ->where('id', '=', $third_row->third_service)
                                    ->get();
                            @endphp
                            @if(!$third_row)
                            <li><a href="{{url($third_row->third_service_link)}}">{{$sub_child_menu[0]->item_name}}</a></li>
                            @else

                            
                            @endif
                            
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    
</section>
@elseif( $row_pages->section== '6' )

@php
$client_and_partner = DB::table('clientandparterimage')->where('name', '=', $row_pages->section_type)->get();
@endphp

<section class="section-bg-white section-padtop-@if(!$client_and_partner->isEmpty()){{$client_and_partner[0]->padding_top}}@endif section-padbottom-@if(!$client_and_partner->isEmpty()){{$client_and_partner[0]->padding_bottom}}@endif  clients">
    <div class="web-container-fluid">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
             <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest

        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h4 class="web-h4">Featured</h4>
                    <h2 class="web-h2 mb-0">Clients & Partners</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5 no-gutters">
            @foreach($client_and_partner as $row_client_and_partner)
            <div class="col-4 col-md-2">
                <div class="client-box">
                    <img src="{{asset('public/client_and_partner/'.$row_client_and_partner->image)}}" alt="" class="w-75">
                </div>
            </div>
            @endforeach
        </div>
    </div>
  
</section>

@elseif( $row_pages->section== '7' )
@php
$industries = DB::table('industries')->where('name', '=', $row_pages->section_type)->get();
@endphp

<section class="section-bg-black section-padtop-@if(!$industries->isEmpty()){{$industries[0]->padding_top}}@endif section-padbottom-@if(!$industries->isEmpty()){{$industries[0]->padding_bottom}}@endif creative-slider" style="background: url('{{env('APP_URL')}}/public/industries/FMCG3.jpg') no-repeat center center;">
    <div class="creative-slider-blur"></div>
    <div class="slide-container">
        <div class="row">
            <div class="col-8 col-md-9 align-self-center">
                <p class="web-h5 text-white mb-0">Industries</p>
                <h3 class="web-h3 text-white mb-0">Our experience spans every industry</h3>
            </div>
            <div class="col-4 col-md-3 align-self-center text-right">
                <div class="swiper-nav-industries">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        
        <div class="swiper-container creative-slider-block">
            <div class="swiper-wrapper">
                @foreach($industries as $row_industries)
                <div class="swiper-slide">
                    <div class="creative-box web-border-radius-10">
                        <img src="{{asset('public/industries/'.$row_industries->image)}}" alt="" class="obj-cover web-border-radius-10">
                        <div class="creative-overlay web-border-radius-5 text-white">
                            <a href="{{$row_industries->link}}/{{$row_industries->slug}}" class="p-14 mb-0 text-white">{{$row_industries->title}}<i class="p-14 fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            
                @endforeach
            </div>
            
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                        {{-- <li class="list-inline-item"><a href="#" class="blue-link">Learn more <i class="fas fa-chevron-right pl-1"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        
</section>

@elseif( $row_pages->section== '8' )
@php
$news = DB::table('news_and_opinions')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-white section-padtop-@if(!$news->isEmpty()){{$news[0]->padding_top}}@endif section-padbottom-@if(!$news->isEmpty()){{$news[0]->padding_bottom}}@endif insight">
    <div class="web-container-fluid">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
             <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Select Page Section</label>
                                                <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                    @php
                                                        $page_section = DB::table('page_section')->get();
                                                    @endphp
                                                    @foreach($page_section as $row_page_sections)
                                                        <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="account-username">Select Page Section Component</label>
                                                <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                    
                                                </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                    </div>
                            </div>
                        
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table id="table_page_section"></table>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p class="web-h5 mb-0">Insight</p>
                <h2 class="web-h2 mb-0">News & Opinions</h2>
            </div>
            @foreach($news as $row_news)
            <div class="col-6 col-md-4 mt-5">
                <div class="news-box">
                    <div class="news-content">
                        <div class="news-img">
                            <div class="img-block web-border-radius-10">
                                <img src="{{asset('public/news_and_opinions/'.$row_news->image)}}" alt="" class="obj-cover">
                            </div>
                        </div>
                        <div class="mt-3 mb-3">
                            <p class="mb-2 p-14 web-light-grey">{{$row_news->created_at}}</p>
                            <h4 class="web-h4 m-0">{{$row_news->description}}</h4>
                            <p class="mt-2 p-14 mb-0 web-light-grey">{{$row_news->title}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <ul class="list-inline mt-5 text-center">
                    <li class="list-inline-item"><a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                    <li class="list-inline-item"><a href="#" class="blue-link">Learn more <i class="fas fa-chevron-right pl-1"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
</section>

@elseif( $row_pages->section== '9' )

@php
$requests = DB::table('requests')->where('name', '=', $row_pages->section_type)->get();
@endphp
@if(!$requests->isEmpty())


@if($requests[0]->style == 'style1')
<div class="web-container">
    @guest
            
    @else
    
    <div class="edit_delete_add_component" style="float:right">
        <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
            <i class="fa fa-bars"></i>
        </button>
         <!-- spacer Modal -->
         <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
            <i class="fa fa-edit"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
       <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
       <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
        <i class="fa fa-plus"></i>
      </button>
      <!-- Modal -->
        <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <table id="table_page_section"></table>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                </div>
            </div>
            </div>
        </div>
    </div>    
      
    @endguest
    <section class="section-bg-black section-padtop-@if(!$requests->isEmpty()){{$requests[0]->padding_top}}@endif section-padbottom-@if(!$requests->isEmpty()){{$requests[0]->padding_bottom}}@endif web-border-radius-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <div class="center-content text-center">
                    <h4 class="web-h4 text-white">{{$requests[0]->title}}</h4>
                    <a href="#" class="btn web-btn web-btn-blue mt-3" data-toggle="modal" data-target="#creativeModal">{{$requests[0]->btn_label}}</a>
                </div>
            </div>
        </div>
    </section>
    
</div>
@elseif($requests[0]->style == 'style2')
<div class="web-container-fluid">
    @guest
            
    @else
    
    <div class="edit_delete_add_component" style="float:right">
        <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
            <i class="fa fa-bars"></i>
        </button>
         <!-- spacer Modal -->
         <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
            <i class="fa fa-edit"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
       <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
       <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
        <i class="fa fa-plus"></i>
      </button>
      <!-- Modal -->
        <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-username">Select Page Section</label>
                                        <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                            @php
                                                $page_section = DB::table('page_section')->get();
                                            @endphp
                                            @foreach($page_section as $row_page_sections)
                                                <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="account-username">Select Page Section Component</label>
                                        <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                            
                                        </select>
                        </div>
                        <div class="col-md-6">
                            <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                            </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                </div>
            </div>
            </div>
        </div>
    </div>    
      
    @endguest
    <section class="section-bg-black section-padtop-@if(!$requests->isEmpty()){{$requests[0]->padding_top}}@endif section-padbottom-@if(!$requests->isEmpty()){{$requests[0]->padding_bottom}}@endif web-border-radius-5">
        <div class="web-container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-content text-center">
                        <h4 class="web-h4 text-white">{{$requests[0]->title}}</h4>
                        <a href="#" class="btn web-btn web-btn-blue mt-3" data-toggle="modal" data-target="#creativeModal">{{$requests[0]->btn_label}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@elseif($requests[0]->style == 'style3')

<section class="section-bg-dark-grey section-padtop-@if(!$requests->isEmpty()){{$requests[0]->padding_top}}@endif section-padbottom-@if(!$requests->isEmpty()){{$requests[0]->padding_bottom}}@endif discuss-block">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
             <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h4 class="web-h4 text-white mb-3">{{$requests[0]->title}}</h4>
                    <a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">{{$requests[0]->btn_label}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@elseif($requests[0]->style == 'style4')

<section class="section-bg-white section-padtop-@if(!$requests->isEmpty()){{$requests[0]->padding_top}}@endif section-padbottom-@if(!$requests->isEmpty()){{$requests[0]->padding_bottom}}@endif center-detail-block">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
             <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <h3 class="web-h3 mb-4">{{$requests[0]->title}}</h3>
                    <a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">{{$requests[0]->btn_label}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endif

@elseif( $row_pages->section== '10' )
@php
$para_style_1 = DB::table('para_style_1')->where('name', '=', $row_pages->section_type)->get();
@endphp

@foreach($para_style_1 as $row_para_style_1)
<section class="creative-art section-bg-white section-padtop-@if(!$para_style_1->isEmpty()){{$para_style_1[0]->padding_top}}@endif section-padbottom-@if(!$para_style_1->isEmpty()){{$para_style_1[0]->padding_bottom}}@endif">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
             <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <img src="{{asset('public/para_style_1/'.$row_para_style_1->image)}}" alt="" class="w-75">
            </div>
            <div class="col-sm-6 col-md-6 align-self-center">
                <h2 class="web-h2 mb-4">{{$row_para_style_1->title}}</h2>
                <p class="web-grey mb-4 mt-0 web-h6">{{$row_para_style_1->paragraph}}</p>
                <a href="javascript:void(0)" class="btn web-btn web-btn-trans" data-toggle="modal" data-target="#creativeModal">Contact now</a>
            </div>
        </div>
    </div>
</section>
@endforeach



@elseif( $row_pages->section== '11' )
@php
$para_style_2 = DB::table('para_style_2')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-white section-padtop-@if(!$para_style_2->isEmpty()){{$para_style_2[0]->padding_top}}@endif section-padbottom-@if(!$para_style_2->isEmpty()){{$para_style_2[0]->padding_bottom}}@endif brand-tile corporate-identity-tiles">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest

        @foreach($para_style_2 as $row_para_style_2)
        <div class="row section-padtop-@if(!$para_style_2->isEmpty()){{$para_style_2[0]->padding_top}}@endif section-padbottom-@if(!$para_style_2->isEmpty()){{$para_style_2[0]->padding_bottom}}@endif @if($row_para_style_2->flex_row_reverse != NULL)flex-row-reverse @endif">
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="brand-tile-content">
                    <p class="web-h5 mb-0"><b>{{$row_para_style_2->title}} –</b> {{$row_para_style_2->paragraph}}</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="corporate-tile-img">
                    <div class="img-block web-border-radius-5">
                        <img src="{{asset('public/para_style_2/'.$row_para_style_2->image)}}" alt="" class="obj-cover">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@elseif( $row_pages->section== '12' )
@php
$para_style_3 = DB::table('para_style_3')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-white section-padtop-@if(!$para_style_3->isEmpty()){{$para_style_3[0]->padding_top}}@endif section-padbottom-@if(!$para_style_3->isEmpty()){{$para_style_3[0]->padding_bottom}}@endif design-detail">
    <div class="web-container">
        
        <div class="row">
            @foreach($para_style_3 as $row_para_style_3)
            <div class="col-sm-6 col-md-6 mt-5">
                <div class="design-img">
                    <div class="img-block web-border-radius-5">
                        <img src="{{asset('public/para_style_3/'.$row_para_style_3->image)}}" alt="" class="obj-cover">
                    </div>
                </div>
                <div class="mt-3 mb-3">
                    <h3 class="web-h3 mt-4 mb-4">{{$row_para_style_3->title}}</h3>
                    <p class="p-14 m-0 web-grey">{{$row_para_style_3->paragraph}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@elseif( $row_pages->section== '13' )
@php
$para_style_4 = DB::table('para_style_4')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-white section-padtop-@if(!$para_style_4->isEmpty()){{$para_style_4[0]->padding_top}}@endif section-padbottom-@if(!$para_style_4->isEmpty()){{$para_style_4[0]->padding_bottom}}@endif center-detail-block">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            @foreach($para_style_4 as $row_para_style_4)

            <div class="col-md-12">
                <div class="text-center">
                    <h4 class="web-h4 mb-5">{{$row_para_style_4->title}}</h4>
                    <a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Meet Us</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@elseif( $row_pages->section== '14' )

@php
$para_style_5 = DB::table('para_style_5')->where('name', '=', $row_pages->section_type)->get();
@endphp

@if($para_style_5[0]->style == 'style1')

<section class="agency-brands section-bg-dark-grey section-padtop-@if(!$para_style_5->isEmpty()){{$para_style_5[0]->padding_top}}@endif section-padbottom-@if(!$para_style_5->isEmpty()){{$para_style_5[0]->padding_bottom}}@endif">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            <div class="col-md-12">
                <h2 class="web-h2 mb-4 text-white text-center">

                    {!!$para_style_5[0]->heading!!}
                </h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 align-self-center">
                <{{$para_style_5[0]->heading_size}} class="web-{{$para_style_5[0]->heading_size}} mb-0 text-white">
                    {!!$para_style_5[0]->text_left!!}</h3>
            </div>
            <div class="col-md-6 align-self-center">
                <p class="web-light-grey web-h6 mb-0">{!!$para_style_5[0]->text_right!!}
                </p>
            </div>
        </div>
    </div>
</section>

@elseif($para_style_5[0]->style == 'style2')

<section class="agency-brands section-bg-white section-padtop-@if(!$para_style_5->isEmpty()){{$para_style_5[0]->padding_top}}@endif section-padbottom-@if(!$para_style_5->isEmpty()){{$para_style_5[0]->padding_bottom}}@endif">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        @if($para_style_5[0]->heading != NULL)
        <div class="row">
            <div class="col-md-12">
                <h2 class="web-h2 mb-4 text-black text-center">
                    {!!$para_style_5[0]->heading!!}
                </h2>
            </div>
        </div>
        @endif

        <div class="row mt-5">
            <div class="col-md-6 align-self-center">
                <{{$para_style_5[0]->heading_size}} class="web-{{$para_style_5[0]->heading_size}} mb-0 text-black">
                    {!!$para_style_5[0]->text_left!!}</{{$para_style_5[0]->heading_size}}>
            </div>
            <div class="col-md-6 align-self-center">
                <p class="web-grey web-h6 mb-0">{!!$para_style_5[0]->text_right!!}
                </p>
            </div>
        </div>
    </div>
</section>
@endif

@elseif( $row_pages->section== '15' )

@php
$section_15 = DB::table('section_15')->where('name', '=', $row_pages->section_type)->orderBy('id','ASC')->get();
@endphp

@if($section_15[0]->style == 'style1')

@foreach($section_15 as $row_section_15)
<section class="section-bg-white section-padtop-@if(!$section_15->isEmpty()){{$section_15[0]->padding_top}}@endif section-padbottom-@if(!$section_15->isEmpty()){{$section_15[0]->padding_bottom}}@endif brand-tile book-design">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row @if($row_section_15->flex_row_reverse != NULL)flex-row-reverse @endif">
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="brand-tile-img">
                    <img src="{{asset('public/section_15/'.$row_section_15->image)}}" alt="" class="obj-cover">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="brand-tile-content">
                    <h3 class="web-h3">{{$row_section_15->heading1}}</h3>
                    <a href="javascript:void(0)" class="btn web-btn web-btn-trans mt-4" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

@elseif($section_15[0]->style == 'style2')

@foreach($section_15 as $row_section_15)

<section class="section-bg-white section-padtop-@if(!$section_15->isEmpty()){{$section_15[0]->padding_top}}@endif section-padbottom-@if(!$section_15->isEmpty()){{$section_15[0]->padding_bottom}}@endif brand-tile brand-title">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row @if($row_section_15->flex_row_reverse != NULL)flex-row-reverse @endif">
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="vehicle-tile-img">
                    <div class="img-block web-border-radius-5">
                        <img src="{{asset('public/section_15/'.$row_section_15->image)}}" alt="" class="obj-cover">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="brand-tile-content">
                    <h3 class="web-h3">{{$row_section_15->heading1}}</h3>
                    <a href="javascript:void(0)" class="btn web-btn web-btn-trans mt-4" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endforeach

@elseif($section_15[0]->style == 'style3')

@foreach($section_15 as $row_section_15)
<section class="section-bg-white section-padtop-@if(!$section_15->isEmpty()){{$section_15[0]->padding_top}}@endif section-padbottom-@if(!$section_15->isEmpty()){{$section_15[0]->padding_bottom}}@endif brand-tile">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row @if($row_section_15->flex_row_reverse != NULL)flex-row-reverse @endif">
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="uniform-tile-img">
                    <div class="img-block web-border-radius-5">
                        <img src="{{asset('public/section_15/'.$row_section_15->image)}}" alt="" class="obj-cover">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 align-self-center">
                <div class="brand-tile-content vehicle-content">
                    <h3 class="web-h3">{{$row_section_15->heading1}}</h3>
                    <a href="javascript:void(0)" class="btn web-btn web-btn-trans mt-4" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endif

@elseif( $row_pages->section== '16' )

@php
$section_16 = DB::table('section_16')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-white section-padtop-@if(!$section_16->isEmpty()){{$section_16[0]->padding_top}}@endif section-padbottom-@if(!$section_16->isEmpty()){{$section_16[0]->padding_bottom}}@endif logo-design-boxes">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            @php $num = 1; @endphp
            @foreach($section_16 as $row_section_16)

            <div class="col-sm-6 col-md-6">
                <div class="logo-design-box mt-5">
                    <div class="box-img">
                        <img class="img-fluid" src="{{asset('public/section_16/'.$row_section_16->image)}}" alt="">
                    </div>
                    <h4 class="web-h4 mt-3 mb-4">{{$num}}. {{$row_section_16->heading}}</h4>
                    <p class="p-14 web-grey mb-0">{{$row_section_16->text}}</p>
                </div>
            </div>
            @php $num++; @endphp
            @endforeach


        </div>
    </div>
</section>

@elseif( $row_pages->section== '17' )

@php
$section_17 = DB::table('section_17')->where('name', '=', $row_pages->section_type)->get();
@endphp

<section class="design-page-center">
    <div class="web-container-fluid">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="section-bg-dark-grey web-border-radius-5 section-padtop-@if(!$section_17->isEmpty()){{$section_17[0]->padding_top}}@endif section-padbottom-@if(!$section_17->isEmpty()){{$section_17[0]->padding_bottom}}@endif center-design-content">
            <div class="web-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="web-h3 text-white mb-3">{{$section_17[0]->paragraph}}</h3>
                        <a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Request for a meeting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@elseif( $row_pages->section== '18' )
@php
$section_18 = DB::table('section_18')->where('name', '=', $row_pages->section_type)->get();
@endphp

<section class="section-bg-grey creative-samples">
    <div class="slide-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <section class="sample-one section-padtop-@if(!$section_18->isEmpty()){{$section_18[0]->padding_top}}@endif section-padbottom-@if(!$section_18->isEmpty()){{$section_18[0]->padding_bottom}}@endif">
            <div class="row">
                <div class="col-md-12">
                    <div class="sample-content mb-3">
                        <h5 class="web-h5 mb-0">{{$section_18[0]->headingone}}</h5>
                        <h3 class="web-h3 mb-0">{{$section_18[0]->headingtwo}}</h3>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="col-md-12">
                    <div class="swiper-container logo-slider-block">
                        <div class="swiper-wrapper">

                            @foreach($section_18 as $row_section_18)

                            <div class="swiper-slide">
                                <div class="logo-box">
                                    <img src="{{asset('public/section_18/'.$row_section_18->image)}}" alt="" class="obj-cover">
                                </div>
                            </div>

                            @endforeach


                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>
@elseif( $row_pages->section== '19' )

@php
$section_19 = DB::table('section_19')->where('name', '=', $row_pages->section_type)->get();
@endphp

<section class="section-bg-white section-padtop-@if(!$section_19->isEmpty()){{$section_19[0]->padding_top}}@endif section-padbottom-@if(!$section_19->isEmpty()){{$section_19[0]->padding_bottom}}@endif design-detail">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
    </div>
</section>

@elseif( $row_pages->section== '20' )

@php
$section_20 = DB::table('section_20')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-black agency-banner">
    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row">
            <div class="col-md-10 col-lg-7 align-self-center">
                <div class="agency-banner-content">
                    <p class="web-h5 text-white mb-0">@if(!$section_20->isEmpty()) {{$section_20[0]->heading_1}} @endif</p>
                    <h2 class="web-h2 text-white mb-5">@if(!$section_20->isEmpty()) {{$section_20[0]->heading_2}} @endif</h2>
                    <a href="javascript:void(0)" class="@if(!$section_20->isEmpty()) {{$section_20[0]->btn_class}} @endif" data-toggle="modal" data-target="#creativeModal">@if(!$section_20->isEmpty()) {{$section_20[0]->btn_label}} @endif</a>
                </div>
            </div>
        </div>
    </div>
</section>

@elseif( $row_pages->section== '21' )

@php
$section_21 = DB::table('section_21')->where('name', '=', $row_pages->section_type)->get();
$sliders = DB::table('sliders')->where('name', '=', $section_21[0]->slider_name)->get();
$videos = DB::table('videos')->where('name', '=', $section_21[0]->video_name)->get();
@endphp
<div class="main-wrap">
<section class="banner-with-video">
    <section class="home-slider section-bg-black creative-banner">
        <!-- Images slider - Start -->
        <div class="web-container">
            @guest
            
            @else
            
            <div class="edit_delete_add_component" style="float:right">
                <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- spacer Modal -->
             <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                    <i class="fa fa-edit"></i>
                  </button>
                  <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            ...
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
               <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
               <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
                <i class="fa fa-plus"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Select Page Section</label>
                                                <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                    @php
                                                        $page_section = DB::table('page_section')->get();
                                                    @endphp
                                                    @foreach($page_section as $row_page_sections)
                                                        <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="account-username">Select Page Section Component</label>
                                                <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                    
                                                </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                    </div>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>   
              
            @endguest
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="position-relative scrollto-section carousel slide" data-ride="carousel">
                        <a href="#section-2" id="sectionTwo" class="mouse" aria-hidden="true">
                            <span class="mouse__wheel"></span>
                            <span class="mouse__text">SCROLL TO EXPLORE</span>
                        </a>
                        <ol class="carousel-indicators">
                            @php $num = 0; @endphp
                            @foreach($sliders as $row_slider)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$num++}}" class="{{$row_slider->status}}"></li>
                            @endforeach
                        </ol>

                        <div class="carousel-inner">

                            @foreach($sliders as $row_slider)
                            <div class="carousel-item {{$row_slider->status}}" style="background: url('{{asset('public/slider/'.$row_slider->image)}}') no-repeat center right;">
                                <div class="slider-flex-wrap">
                                    <div class="homepage-banner-content">
                                        <p class="web-h5 text-white mb-0">{{$row_slider->text1}}</p>
                                        <h2 class="web-h2 text-white mb-4">{{$row_slider->text2}}</h2>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a id="contact_us" href="#" class="{{$row_slider->style}}" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                                            <li class="list-inline-item"><a href="{{$row_slider->link}}" class="blue-link">Learn more <i class="fas fa-chevron-right pl-1"></i></a></li>
                                        </ul>

                                    </div>
                                    <div class="banner-img-mob">
                                        <img class="img-fluid" src="{{asset('public/slider/'.$row_slider->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Images slider - End -->
    </section>
    @foreach($videos as $row_video)

    <section class="section-bg-white section-padtop-@if(!$videos->isEmpty()){{$videos[0]->padding_top}}@endif section-padbottom-@if(!$videos->isEmpty()){{$videos[0]->padding_bottom}}@endif  home-video-with-banner">
        <div class="web-container">
            @guest
            
            @else
              
            @endguest
            <div class="row">
                <div class="col-md-12">
                    <div class="home-video-content text-center">
                        <h3 class="web-h3 text-white text-left">{{$row_video->video_title}}</h3>
                        <iframe class="w-100 web-border-radius-5" width="560" height="315" src="{{$row_video->video_link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <a href="javascript:void(0)" class="btn web-btn web-btn-blue mt-5" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

</section>
</div>
@elseif( $row_pages->section== '22' )
@php
$section_22 = DB::table('section_22')->where('name', '=', $row_pages->section_type)->get();
@endphp

<section class="section-bg-white section-padtop-@if(!$section_22->isEmpty()){{$section_22[0]->padding_top}}@endif section-padbottom-@if(!$section_22->isEmpty()){{$section_22[0]->padding_bottom}}@endif  design-banner">

    <div class="web-container">
        @guest
            
        @else
        
        <div class="edit_delete_add_component" style="float:right">
            <button type="button" data-toggle="modal" data-target="#lineheightModal{{$row_pages->id}}">
                <i class="fa fa-bars"></i>
            </button>
            <!-- spacer Modal -->
            <div class="modal fade" id="lineheightModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="lineheightModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="lineheightModalLabel">Add Space in this Section Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal{{$row_pages->id}}">
                <i class="fa fa-edit"></i>
              </button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
           <a  onclick='return confirm("Are you sure? You want to delete this Component")' href="{{url('delete_front_component/'.$row_pages->id)}}"  href=""> <i class="fa fa-trash"></i> </a>
           <button type="button" data-toggle="modal" data-target="#add_component{{$row_pages->id}}">
            <i class="fa fa-plus"></i>
          </button>
          <!-- Modal -->
            <div class="modal fade" id="add_component{{$row_pages->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Select Page Section</label>
                                            <select id="page_section_{{$row_pages->id}}" onchange="select_page_section(this);" name="page_section" class="form-control">
                                                @php
                                                    $page_section = DB::table('page_section')->get();
                                                @endphp
                                                @foreach($page_section as $row_page_sections)
                                                    <option value="{{$row_page_sections->id}}">{{$row_page_sections->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="account-username">Select Page Section Component</label>
                                            <select id="page_section_component_{{$row_pages->id}}" onchange="select_page_section_component(this);" name="page_section_component" class="page_section_component form-control">
                                                
                                            </select>
                            </div>
                            <div class="col-md-6">
                                <div class="image_page_section" id="image_page_section_{{$row_pages->id}}"></div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <table class="table_page_section" id="table_page_section_{{$row_pages->id}}"></table>
                                </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Add New Component</button>
                    </div>
                </div>
                </div>
            </div>
        </div>    
          
        @endguest
        <div class="row no-gutters">
            <div class="col-md-12">
                
                @if(!empty($section_22[0]->heading_1))
                <div class="design-banner-content text-center w-100">
                    <h1 class="web-h1 mb-0">{{$section_22[0]->heading_1}}</h1>
                    @if(!empty($section_22[0]->heading_2))
                    <h4 class="web-h4 mt-4 mb-4">{{$section_22[0]->heading_2}}</h4>
                    <a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
                    @endif
                </div>
                @endif
                @if(!empty($section_22[0]->image))

                <div class="banner-image text-center mt-5 mb-3">
                    <div class="img-block web-border-radius-5">

                        <img src="{{asset('public/section_22/'.$section_22[0]->image)}}" alt="{{$section_22[0]->heading_1}}" class="obj-cover">
                    </div>
                </div>

                @endif

                @if(!empty($section_22[0]->video))

                <div class="banner-video text-center mt-5 mb-3">
                    <iframe class="w-100 web-border-radius-5" width="560" height="315" src="{{$section_22[0]->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                @endif
            </div>

            @if(!empty($section_22[0]->text))

            <div class="col-sm-8 col-md-8 col-lg-9 align-self-center">
                <h3 class="web-h3 mb-0">{{$section_22[0]->text}}</h3>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 align-self-center">
                <a href="javascript:void(0)" class="btn web-btn web-btn-blue float-right" data-toggle="modal" data-target="#creativeModal">Request for a meeting</a>
            </div>
            @endif
        </div>
    </div>
</section>


@elseif( $row_pages->section== '23' )

@php
$section_23 = DB::table('section_23')->where('name', '=', $row_pages->section_type)->get();
@endphp
<section class="section-bg-white section-padtop-@if(!$section_23->isEmpty()){{$section_23[0]->padding_top}}@endif section-padbottom-@if(!$section_23->isEmpty()){{$section_23[0]->padding_bottom}}@endif  samples-heading">
    
 <br/><br/><br/><br/>
	<div class="web-container">
		<div class="row">
			<div class="col-md-7 align-self-center">
				<div class="homepage-banner-content w-100">
                @if(!empty($section_23[0]->heading_1))
                    <h1 class="web-h1 mb-4">{{$section_23[0]->heading_1}}</h1>
                @endif
                @if(!empty($section_23[0]->text))
					<h5 class="web-h5 mb-5 w-75">{{$section_23[0]->text}}</h5>
                @endif
					<ul class="list-inline">
						<li class="list-inline-item"><a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
						<!-- <li class="list-inline-item"><a href="#" class="blue-link video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/IP7uGKgJL8U" data-target="#videoModal">Watch <i class="far fa-play-circle fa-lg pl-1"></i></a></li> -->
						<li class="list-inline-item"><a href="#" class="blue-link video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/IP7uGKgJL8U" data-target="#videoModal{{$section_23[0]->id}}">Watch 
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.0005 20.625V21.625L12.8005 21.025L20.3005 15.4L20.8338 15L20.3005 14.6L12.8005 8.975L12.0005 8.375V9.375V20.625ZM3.00049 15C3.00049 8.37614 8.37663 3 15.0005 3C21.6243 3 27.0005 8.37614 27.0005 15C27.0005 21.6239 21.6243 27 15.0005 27C8.37663 27 3.00049 21.6239 3.00049 15Z" stroke="#0F69C9"></path>
						</svg>
						</a></li>

					</ul>
				</div>
			</div>
			<div class="col-md-5 align-self-center">
				<div class="">
                <img class="img-fluid" src="{{asset('public/section_23/'.$section_23[0]->image)}}" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
                            <div class="modal fade" id="videoModal{{$section_23[0]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modalCenter" role="document">
                                        <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>        
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        @if(!empty($section_23[0]->video))
                                                        <iframe class="embed-responsive-item" src="{{$section_23[0]->video}}" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                                        @endif
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                            </div>
<section class="section-bg-black section-padtop-30 section-padbottom-30 web-border-radius-5">
	<div class="web-container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="center-content text-center">
					<h4 class="web-h4 text-white">Meet our creative and expert team to assist you.</h4>
					<a href="#" class="btn web-btn web-btn-blue mt-3" data-toggle="modal" data-target="#creativeModal">Let's meet now</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-bg-white section-padtop-50 section-padbottom-100">
	<div class="web-container">
        @php
            $slug =  request()->segment(1);
            $child_menus = DB::table('child_menus')->where('item_link', '=', $slug)->first();
            $sub_child_menus = DB::table('sub_child_menus')->where('child_menu_id', '=', $child_menus->id)->get();
        @endphp
        @foreach($sub_child_menus as $row_sub_child_menus)

        <div class="row web-border-bottom section-padtop-50 section-padbottom-50">
			<div class="web-container-fluid">
				<div class="row">
					<div class="col-md-8 align-self-center">
						<div class="heading-link">
							<h2 class="web-h2 mb-0">{{$row_sub_child_menus->item_name}}</h2>
						</div>
					</div>
					<div class="col-md-4 align-self-center">
						<div class="heading-link float-right">
							<a href="{{ URL::to($row_sub_child_menus->item_link) }}" target="_blank" class="blue-link web-h6">Learn more <i class="fas fa-chevron-right pl-1"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

        @endforeach
		
		
	</div>
</section>



@elseif( $row_pages->section== '24' )

@php
$section_23 = DB::table('section_24')->get();
@endphp

<section class="contact-banner section-padtop-100 section-bg-black">
	<div class="web-container">
		<div class="row justify-content-between">
			<div class="col-md-6">
				<p class="web-h3 text-white mb-0">Contact us</p>
				<h2 class="web-h2 text-white mb-5">Want to discuss a project?</h2>
				<p class="text-white mb-5 web-h5">If you would like to get in touch with Creative Drop, please complete the form below, and we’ll get back to you as soon as we can.</p>
				<ul>
					<li class="pb-3 mb-3 w-75"><a href="tel:00971503119300" class="text-white"><i class="fas fa-phone-alt web-blue pr-3"></i> +971 50 3119300</a></li>
					<li class="pb-3 mb-3 w-75"><a href="mailto:info@creativedrop.com" class="text-white"><i class="fas fa-envelope web-blue pr-3"></i> info@creativedrop.com</a></li>
					<li class="pb-3 mb-3 w-75"><a href="https://www.google.com/maps/place/Creative+Drop/@25.0687866,55.1365733,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f6d537d73810d:0x2f2c1b581013609f!8m2!3d25.0687818!4d55.138762" target="_blank" class="text-white"><i class="fas fa-map-marker-alt web-blue pr-3"></i> Cluster R, JLT, Dubai - UAE</a></li>
				</ul>
			</div>
			<div class="col-md-5">
				<form action="{{url('submit_contact')}}" method="POST">
				    <input type="text" class="form-control top-radius" placeholder="Full Name" required="">
				  
				    <input type="email" class="form-control" placeholder="Work Email" required="">
				  
				    <input type="tel" class="form-control" placeholder="Phone Number" required="">
				  
				    <textarea class="form-control bottom-radius" placeholder="Message"></textarea>
				
				<div class="text-center">
					<a href="javascript:void(0)" class="btn web-btn web-btn-blue mt-4">Submit</a>
					<p class="p-14 web-grey mt-4">By submitting the form you agree to Creative Drop DMCC Privacy Policy, and you consent to receive marketing communications, including automated text messages, from Creative Drop DMCC.</p>
				</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="our-map section-bg-black section-padtop-50 section-padbottom-100 section-margbottom-50">
	<div class="web-container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="web-h2 text-white text-center mb-4">Our Global Presence</h2>
				
				@include('map')
				
			</div>
		</div>
	</div>
</section>

@else 

<h1>empty Page</h1>

@endif