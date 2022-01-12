

    @if( $row_pages->section== '1' )
<section class="banner-with-video">
    @php
        $sliders = DB::table('sliders')->where('name', '=', $row_pages->section_type)->get();
    @endphp
    
            <section class="home-slider section-bg-black creative-banner">
                <!-- Images slider - Start -->
                <div class="web-container">
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
                                                        <li class="list-inline-item"><a id="contact_us" href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                                                        <li class="list-inline-item"><a href="#" class="blue-link">Learn more <i class="fas fa-chevron-right pl-1"></i></a></li>
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
    
    @elseif( $row_pages->section== '2' )
    @php
        $videos = DB::table('videos')->where('video_title', '=', $row_pages->section_type)->get();
    @endphp
    @foreach($videos as $row_video)

        <section class="section-bg-white section-padbottom-100 home-video-with-banner">
            <div class="web-container">
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

    <section class="our-team section-bg-white section-padtop-70 section-padbottom-70">
        <div class="web-container">
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

            <section class="section-bg-grey section-padtop-50 section-padbottom-50 portfolio">
                <div class="web-container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h4 class="web-h4">Portfolio</h4>
                                <h2 class="web-h2 mb-0">Case Studies</h2>

                                <div class="portfolio-filters">
                                    <ul class="list-inline my-4 p-0">
                                        <li class="list-inline-item">
                                            <select id="page_sections" class="form-control" name="section1">
                                                <option value="#">  --- Select Section --- </option>
                                                @foreach($main_menu as $row_main_menu)
                                                    <option value="{{$row_main_menu->id}}"> {{$row_main_menu->menu_name}} </option>
                                                @endforeach
                                            </select>
                                        </li>
                                        <li class="list-inline-item">
                                            <select id="dependent_page_sections" class="form-control" name="section1">
                                                <option></option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                            @foreach($case_study as $row_case_study)

                                <div class="col-6 col-md-4 col-lg-3 mt-5">
                                    <div class="single-portfolio">
                                        <a href="{{url('case_study',$row_case_study->title)}}">
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
                                        <a target="_blank" href="#" class="blue-link web-h6">Construction</a>
                                    </div>
                                </div>

                            @endforeach
                        
                        

                        <div class="col-md-12">
                            <ul class="list-inline mt-5 text-center">
                                <li class="list-inline-item"><a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                                <li class="list-inline-item"><a href="work.php" class="blue-link web-h6">View more <i class="fas fa-chevron-right pl-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

    @elseif( $row_pages->section== '5' )
    
    @php
        $services = DB::table('services')->where('name', '=', $row_pages->section_type)->get();
        
    @endphp
    
            <section id="section-2" class="section-bg-grey-grad section-padtop-70 section-padbottom-70 service-block">
                <div class="web-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="web-h4">Services</h4>
                            <h2 class="web-h2 mb-0">What We Do</h2>
                        </div>
                        
                        @foreach($services->unique('main_service')  as $row)
                        
                        <div class="col-6 col-md-6 col-lg-4">
                            <div class="service-links mt-5">
                                <h6 class="web-h6 web-border-bottom pb-4 mb-0">{{$row->main_service}}</h6>
                                <ul class="mt-3">
                                    @php
                                        $sub_services = DB::table('services')->where('main_service', '=', $row->main_service)->get();
                                    @endphp
                                    @foreach($sub_services as $row_sub_services)
                                        <li><a href="#">{{$row_sub_services->sub_service}}</a></li>
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

    <section class="section-bg-white section-padtop-50 section-padbottom-50 clients">
        <div class="web-container-fluid">
            
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

            <section class="section-bg-black section-padtop-70 section-padbottom-70 creative-slider">
                <div class="slide-container">
                    <div class="row">
                        <div class="col-10 col-md-12">
                            <p class="web-h5 text-white mb-0">Industries</p>
                            <h3 class="web-h3 text-white mb-0">Our experience spans every industry</h3>
                        </div>
                    </div>
            
                    <div class="swiper-container creative-slider-block">
                        <div class="swiper-wrapper">

                            @foreach($industries as $row_industries)

                            <div class="swiper-slide">
                                <div class="creative-box web-border-radius-10">
                                    <img src="{{asset('public/industries/'.$row_industries->image)}}" alt="" class="obj-cover web-border-radius-10">
                                    <div class="creative-overlay web-border-radius-5 text-white">
                                        <a href="javascript:void(0)" class="p-14 mb-0 text-white">{{$row_industries->title}}<i class="p-14 fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        
                        
                        <!-- <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div> -->
                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
            
            
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                                <li class="list-inline-item"><a href="#" class="blue-link">Learn more <i class="fas fa-chevron-right pl-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>




    @elseif( $row_pages->section== '8' )
        

    @php
        $news = DB::table('news_and_opinions')->where('name', '=', $row_pages->section_type)->get();
    @endphp

    <section class="section-bg-white section-padtop-50 section-padbottom-50 insight">
        <div class="web-container-fluid">
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
<div class="container">
            <section class="section-bg-dark-grey section-padtop-50 section-padbottom-50 discuss-block">
                <div class="web-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h4 class="web-h4 text-white mb-3">{{$requests[0]->title}}</h4>
                                <a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</div>

    @elseif( $row_pages->section== '10' )
    @php
        $para_style_1 = DB::table('para_style_1')->where('name', '=', $row_pages->section_type)->get();
    @endphp

    @foreach($para_style_1 as $row_para_style_1)

        <section class="creative-art section-bg-white section-padtop-70 section-padbottom-70">
            <div class="web-container">
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

    <section class="section-bg-white section-padtop-50 section-padbottom-50 brand-tile corporate-identity-tiles">
        <div class="web-container">
    
            @foreach($para_style_2 as $row_para_style_2)
                <div class="row section-padtop-50 section-padbottom-50 {{$row_para_style_2->flex_row_reverse}}">
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

<section class="section-bg-white section-padtop-50 section-padbottom-50 design-detail">
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


    <section class="section-bg-white section-padtop-100 center-detail-block">
        <div class="web-container">
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

    <section class="agency-brands section-bg-dark-grey section-padtop-70 section-padbottom-70">
        <div class="web-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="web-h2 mb-4 text-white text-center">
                        
                        {{$para_style_5[0]->heading}}
                    </h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 align-self-center">
                    <h3 class="web-h3 mb-0 text-white">
                        {{$para_style_5[0]->text_left}}</h3>
                </div>
                <div class="col-md-6 align-self-center">
                    <p class="web-light-grey web-h6 mb-0">{{$para_style_5[0]->text_right}}
                    </p>
                </div>
            </div>
        </div>
    </section>



    @elseif( $row_pages->section== '15' )
    
    @php
        $section_15 = DB::table('section_15')->where('name', '=', $row_pages->section_type)->get();
    @endphp


<section class="section-bg-white section-padtop-50 section-padbottom-50 design-banner">
	<div class="web-container">
		<div class="row no-gutters">
			<div class="col-md-12">
				<div class="design-banner-content text-center">
					<h1 class="web-h1 mb-0">{{$section_15[0]->heading1}}</h1>
					<h4 class="web-h4 mt-4 mb-4">{{$section_15[0]->heading2}}</h4>
					<a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
				</div>
				<div class="banner-image text-center mt-5 mb-3">
					<div class="img-block web-border-radius-5">
                        <img class="obj-cover" src="{{asset('public/section_15/'.$section_15[0]->image)}}" alt="">
					</div>
				</div>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-9 align-self-center">
				<h3 class="web-h3 mb-0">{{$section_15[0]->text}}</h3>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-3 align-self-center">
				<a href="javascript:void(0)" class="btn web-btn web-btn-blue float-right" data-toggle="modal" data-target="#creativeModal">Request for a meeting</a>
			</div>
		</div>
	</div>
</section>





    @elseif( $row_pages->section== '16' )
    
    @php
        $section_16 = DB::table('section_16')->where('name', '=', $row_pages->section_type)->get();
    @endphp


<section class="section-bg-white section-padtop-15 section-padbottom-50 logo-design-boxes">
	<div class="web-container">
		<div class="row">
            @php $num = 1; @endphp
            @foreach($section_16 as $row_section_16)

            <div class="col-sm-6 col-md-6">
				<div class="logo-design-box mt-5">
					<div class="box-img">
                        <img class="img-fluid" src="{{asset('public/section_16/'.$row_section_16->image)}}" alt="">
					</div>
					<h4 class="web-h4 mt-3 mb-4">{{$num}}.  {{$row_section_16->heading}}</h4>
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
                <div class="section-bg-dark-grey web-border-radius-5 section-padtop-50 section-padbottom-50 center-design-content">
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
            <section class="sample-one section-padtop-70 section-padbottom-70">
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
    
    
    <section class="banner-with-video">
	<section class="home-slider section-bg-black creative-banner">
		<!-- Images slider - Start -->

		<div class="web-container">
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
                                                        <li class="list-inline-item"><a id="contact_us" href="#" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a></li>
                                                        <li class="list-inline-item"><a href="#" class="blue-link">Learn more <i class="fas fa-chevron-right pl-1"></i></a></li>
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
    
            <section class="section-bg-white section-padbottom-100 home-video-with-banner">
    		<div class="web-container">
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
    


    @elseif( $row_pages->section== '22' )
    
    @php
        $section_22 = DB::table('section_22')->where('name', '=', $row_pages->section_type)->get();
        
    @endphp

    
    <section class="section-bg-white section-padtop-50 section-padbottom-50 design-banner">

	<div class="web-container">
		<div class="row no-gutters">
			<div class="col-md-12">
                
				
				 @if(!empty($section_22[0]->heading_1))

				<div class="design-banner-content text-center w-100">
					<h1 class="web-h1 mb-0">{{$section_22[0]->heading_1}}</h1>
					<h4 class="web-h4 mt-4 mb-4">{{$section_22[0]->heading_2}}</h4>
					<a href="javascript:void(0)" class="btn web-btn web-btn-blue" data-toggle="modal" data-target="#creativeModal">Contact Now</a>
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
    
    
    
    @endif