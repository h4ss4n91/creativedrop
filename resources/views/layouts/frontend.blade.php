<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="@yield('meta_description', 'We build e-commerce site, management site, Android, iOS apps.Laravel, Java, NodeJs, PHP technology, React js, Vue js, React Native, Flutter.')">
  <meta name="keywords" content="@yield('meta_keywords', 'We build e-commerce site, management site, Android, iOS apps.Laravel, Java, NodeJs, PHP technology, React js, Vue js, React Native, Flutter.')">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="{{ asset('public/front_theme/images/favicon.png')}}" type="image/png">
  <link rel="stylesheet" href="{{ asset('public/front_theme/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/front_theme/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/front_theme/css/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/front_theme/css/ekko-lightbox.css')}}">
  <link rel="stylesheet" href="{{ asset('public/front_theme/css/jquery.mCustomScrollbar.min.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="{{ asset('public/front_theme/css/theme.css')}}">

  <link rel="stylesheet" href="{{ asset('public/login/dist/style.css')}}"/>

  
  <style>

@font-face {
font-family: "CustomFont";
src: url("./././public/Lato/Lato-Black.ttf");
src: url("./././public/Lato/Lato-Bold.ttf"),
url("https://yoursite.com/css/fonts/CustomFont.otf") format("opentype"),
url("https://yoursite.com/css/fonts/CustomFont.svg#filename") format("svg");
}

    .fa-plus{
      text-align:center;

    }
    .add_component{
      text-align:center;
      border:1px solid #000;
      background-color:#fff;
      padding-top:10px;
      padding-bottom:10px;
    }
    .fa-trash{
      border:1px solid #fff;
      border-radius: 50%;
      padding:5px;
      background:#fff;
    }
    .fa-edit{
      border:1px solid #fff;
      border-radius: 50%;
      padding:5px;
      background:#fff;
    }
    

    .contact-form-left {
      background-image: url("{{asset('public/front_theme/images/contact-form.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      width: 100%;
      /*margin-top: -1px;*/
      /*margin-bottom: -1px;*/
    }

    .signup-form .form-control::placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #000;
      opacity: 1;
      /* Firefox */
    }

    .signup-form .form-control:-ms-input-placeholder {
      /* Internet Explorer 10-11 */
      color: #000;
    }

    .signup-form .form-control::-ms-input-placeholder {
      /* Microsoft Edge */
      color: #000;
    }

    #creativeModal .form-control,
    #creativeModal .form-control:focus {
      border-radius: 0 !important;
      border: none !important;
      border-bottom: 1px solid #000 !important;
      color: #000 !important;
      font-size: 14px !important;
      font-family: 'CustomFont regular' !important;
      padding-left: 0px !important;
      background-color: transparent !important;
    }

    .signup-form .button {
      border: 0px !important;
    }

    #creativeModal .modal-content {
      border: 0;
      /*width: 95% !important;*/
    }


    i.fa.fa-times-circle {
      position: absolute;
      top: -15px;
      right: -25px;
    }
  </style>


</head>

<body>
  <!-- Return to Top -->
  <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up fa-lg"></i></a>
  <header class="web-border-bottom">

    <nav class="navbar navbar-expand-lg navbar-light section-bg-white mobile-navbar">
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="Creative Drop" class="img-fluid"></a>
      <button type="button" id="sidebarCollapse" class="btn"><i class="fas fa-bars fa-lg"></i></button>
    </nav>
    @php
    $page = DB::table('page')->where('title','=',Request::segment(1))->get();
    if(count($page)>0){
    $child_menu = DB::table('child_menus')->where('menu_id','=',$page[0]->menu_id)->orderBy('sorting','ASC')->get();
    }
    $main_menu = DB::table('menus')->orderBy('sorting','ASC')->get();
    @endphp

    <nav class="navbar navbar-expand-xl navbar-light sticky-top desktop-navbar">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="web-container-fluid">
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> -->

          <button type="button" id="sidebarCollapse" class="btn"><i class="fas fa-bars fa-lg"></i></button>


          <ul class="navbar-nav navbar-light mr-auto">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="Creative Drop" class="img-fluid"></a>

            @php
              $segment = \Request::segment(1);
              
              $menu_name = DB::table('sub_child_menus')
                  ->join('child_menus', 'child_menus.id', '=', 'sub_child_menus.child_menu_id')
                  ->join('menus', 'menus.id', '=', 'child_menus.menu_id')
                  ->where('sub_child_menus.item_link','=',$segment)
                  ->get();
                
            @endphp
                @foreach($menu_name as $row)
                @php
                  $segment_two = $row->menu_name;
                @endphp
                @endforeach
            <li class="nav-item @if($segment == 'work') active @endif"><a class="nav-link" href="{{url('work')}}">Work</a></li>

            @foreach($main_menu as $row_main_menu)

            <li class="nav-item @if(isset($segment_two)) @if($segment_two == $row_main_menu->menu_name) active @endif @endif  dropdown megamenu-li dmenu">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" aria-haspopup="true" aria-expanded="false">{{$row_main_menu->menu_name}}</a>
              <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01" style="display: none;">
                <section class="design-menu section-padtop-50 section-padbottom-50">
                  <div class="web-container-fluid">
                    <div class="row">

                      @php
                      $sub_menu = DB::table('child_menus')->where('menu_id','=',$row_main_menu->id)->orderBy('sorting','ASC')->get();
                      @endphp

                      @foreach($sub_menu as $row_sub_menu)

                      <div class="col-md">
                        <div class="sub-links">
                          <h6 class="web-h6 web-border-bottom pb-4 mb-0"><a href="{{URL::to($row_sub_menu->item_link)}}" class="web-bold">{{$row_sub_menu->item_name}}</a></h6>
                          <ul class="mt-3">
                            @php
                            $sub_child_menu = DB::table('sub_child_menus')->where('child_menu_id','=',$row_sub_menu->id)->orderBy('sorting','ASC')->get();
                            @endphp
                            @foreach($sub_child_menu as $row_sub_child_menu)
                            <li><a href="{{URL::to($row_sub_child_menu->item_link)}}" class="p-14">{{$row_sub_child_menu->item_name}}</a></li>
                            @endforeach
                          </ul>
                        </div>
                      </div>

                      @endforeach

                      <div class="col-md">
                        <div class="sub-links">
                          <h3 class="web-h3">Get a Quote</h3>
                          <p class="p-14">Do not hesitate to contact us for any questions or queries you might have.</p>
                          <p class="p-14">You can reach us through email, phone or on WhatsApp.</p>
                          <ul>

                            <li class="mb-2"><a href="mailto:info@creativedrop.com" class="btn web-btn web-btn-white">Email</a></li>
                            <li class="mb-2"><a href="tel:+971503119300" class="btn web-btn web-btn-blue">Call Now</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=+971503119300" class="btn web-btn" target="_blank"><i class="fab fa-whatsapp fa-lg pr-2"></i>Whatsapp</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </li>

            @endforeach
            <!--====-->
            <li class="nav-item @if($segment == 'work') Agency @endif"><a class="nav-link" href="{{url('agency')}}">Agency</a></li>
            <li class="nav-item @if($segment == 'work') Contact us @endif"><a class="nav-link" href="{{url('contact')}}">Contact us</a></li>
            <form class="form-inline my-2 my-lg-0 ml-auto">

              <a href="mailto:info@creativedrop.com" class="btn web-btn web-btn-white">Email</a>
              <a href="tel:+971503119300" class="btn web-btn web-btn-blue">Call Now</a>
              <a href="https://api.whatsapp.com/send?phone=+971503119300" class="text-white whatsapp-link" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
            </form>
            @guest
            

            @else
            <li class="nav-item dropdown">
              &nbsp; <a class="btn web-btn web-btn-white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('admin/home') }}"><i class="fa fa-home nav-reg-sec"></i> Dashboard </a>
                <a class="dropdown-item" href="{{ url('admin/system') }}"><i class="fa fa-cogs nav-reg-sec"></i> System Setting </a>
                {{-- <a onclick="frontend_editor();" class="dropdown-item"><i class="fa fa-edit"></i> Frontend Editor </a> --}}
                <a class="dropdown-item" href="{{ url('admin/user_profile',Auth::user()->id) }}"><i class="fa fa-user nav-reg-sec"></i> Profile </a>


                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <!-- <i class="fa fa-home nav-reg-sec"></i> -->
                  <i class="fa fa-lock nav-reg-sec"></i>

                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @endguest

          </ul>
        </div>
      </div>
    </nav>


    @if(count($page)>0)
    @php
    $child_menu = DB::table('sub_child_menus')->where('child_menu_id','=',$page[0]->sub_menu_id)->orderBy('sorting','ASC')->get();
    @endphp

    @if(!$child_menu->isEmpty())

    <section class="section-bg-white design-page-menu web-border-bottom">
      <div class="web-container">
        <!-- Swiper -->
        <div class="sub-nav">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @foreach($child_menu as $row_child_menu)
                <div class="swiper-slide"><a href="{{$row_child_menu->item_link}}" class="p-14">{{$row_child_menu->item_name}}</a></div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    @endif


    @endif


  </header>

  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      

      <div class="sidebar-header">
        <a href="index.html"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="Logo"></a>
        <button id="dismiss" class="btn float-right">
          <i class="fas fa-arrow-left"></i>
        </button>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="{{url('/')}}">Home</a>
        </li>

        @foreach($main_menu as $row_main_menu)
        @php
        $link = $row_main_menu->menu_link;
        @endphp
        <li> <a href="#homeSubmenu{{$row_main_menu->id}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">{{$row_main_menu->menu_name}}</a> </li>
        @php $sub_menu = DB::table('child_menus')->where('menu_id','=',$row_main_menu->id)->get(); @endphp
            <ul class="collapse list-unstyled" id="homeSubmenu{{$row_main_menu->id}}">
              @foreach($sub_menu as $row_sub_menu)
              <li> <a href="#homeSubmenuMulti{{$row_sub_menu->id}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">{{$row_sub_menu->item_name}}</a> </li>
              <ul class="collapse list-unstyled" id="homeSubmenuMulti{{$row_sub_menu->id}}">
                @php
                $child_sub_menu = DB::table('sub_child_menus')->where('child_menu_id','=',$row_sub_menu->id)->get(); @endphp
                  <li>
                      @foreach($child_sub_menu as $row_child_sub_menu)
                        @php
                        $sub_child_menu_link = $row_child_sub_menu->item_link;
                        @endphp
                      <a href="{{ URL::to($sub_child_menu_link) }}">{{$row_child_sub_menu->item_name}}</a>
                      @endforeach
                  </li>
              </ul>
              @endforeach
            </ul>
        @endforeach

        @guest
        

        @else
        <li class="nav-item dropdown">
          &nbsp; <a class="btn web-btn web-btn-white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('admin/home') }}"><i class="fa fa-home nav-reg-sec"></i> Dashboard </a>
            <a class="dropdown-item" href="{{ url('admin/system') }}"><i class="fa fa-cogs nav-reg-sec"></i> System Setting </a>
            <a class="dropdown-item" href="{{ url('admin/user_profile',Auth::user()->id) }}"><i class="fa fa-user nav-reg-sec"></i> Profile </a>


            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
              <!-- <i class="fa fa-home nav-reg-sec"></i> -->
              <i class="fa fa-lock nav-reg-sec"></i>

              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest

      </ul>

      <div class="sidebar-links">
        <a href="mailto:info@creativedrop.com"><i class="fas fa-envelope fa-2x"></i></a>
        <a href="tel:+971503119300"><i class="fas fa-phone-alt fa-2x"></i></a>
        <a href="https://api.whatsapp.com/send?phone=+971503119300"><i class="fab fa-whatsapp fa-2x"></i></a>
      </div>

    </nav>

  </div>

  <div class="overlay"></div>
  <div class="main-wrap">

    @yield('content')
  </div>
  <footer class="section-bg-white">
    <section class="footer-links section-padtop-50 section-padbottom-50">
      <div class="web-container">
        <div class="row">
          <div class="col-6 col-md-3">
            <div class="foot">
              @php
              $footer_section_1 = DB::table('footer_sections')->where('section_id','=','1')->get();
              @endphp
              <h5 class="web-h5 web-border-bottom pb-3 mb-0">{{$footer_section_1[0]->name}}</h5>
              <ul class="mt-2">
                @foreach($footer_section_1 as $row_fs_1)
                <li><a href="{{URL::to($row_fs_1->link)}}">{{$row_fs_1->menu}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="foot">
              @php
              $footer_section_2 = DB::table('footer_sections')->where('section_id','=','2')->get();
              @endphp
              <h5 class="web-h5 web-border-bottom pb-3 mb-0">{{$footer_section_2[0]->name}}</h5>
              <ul class="mt-2">
                @foreach($footer_section_2 as $row_fs_2)
                <li><a href="{{URL::to($row_fs_2->link)}}">{{$row_fs_2->menu}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="foot">
              @php
              $footer_section_3 = DB::table('footer_sections')->where('section_id','=','3')->get();
              $footer_bottom = DB::table('footer_bottoms')->first();
              $social_media = DB::table('social_media')->get();
              @endphp
              <h5 class="web-h5 web-border-bottom pb-3 mb-0">{{$footer_section_3[0]->name}}</h5>
              <ul class="mt-2">
                @foreach($footer_section_3 as $row_fs_3)
                <li><a href="{{URL::to($row_fs_3->link)}}">{{$row_fs_3->menu}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="foot">
              <h5 class="web-h5 web-border-bottom pb-3 mb-0">We are social</h5>
              <ul class="list-inline mt-2">
                @foreach($social_media as $row_social_media)
                <li class="list-inline-item"><a target="_blank" href="{{$row_social_media->link}}" class="web-black"><i class="fab fa-{{$row_social_media->name}} fa-lg"></i></a></li>
                @endforeach
              </ul>
              <p class="p-14 web-grey web-bold mt-4">{{$footer_bottom->city}}</p>
              <p class="p-14 web-grey">{!!$footer_bottom->address!!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="footer-end">
      <div class="web-container-fluid section-padtop-30 section-padbottom-30">
        <div class="row">
          <div class="col-12 col-md-4 col-lg-2">
            <div class="footer-logo">
              <a href="#"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="logo" class="w-75"></a>
            </div>
          </div>
          <div class="col-12 col-md-8 col-lg-5">
            <p class="p-14 web-grey mb-0">{!!$footer_bottom->copyright!!}</p>
          </div>
          <div class="col-12 col-md-12 col-lg-5">
            <ul>
              <li><a href="mailto:info@creativedrop.com" class="btn web-btn web-btn-white">Email</a></li>
              <li><a href="tel:+971503119300" class="btn web-btn web-btn-blue">Call Now</a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+971503119300" class="btn web-btn" target="_blank"><i class="fab fa-whatsapp fa-lg pr-2"></i>Whatsapp</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- The Modal -->
  <div class="modal" id="creativeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="row g-0">
          <div class="col-md-6 contact-form-left">
            <div class="modal-body p-5">
              <div id="get-in-touch" class="text w-100">
                <h1 class="text-white web-h1">
                  Get In<br />
                  Touch
                </h1>
                <p class="p-14 pt-4 text-white">
                  If you have any question please feel free to leave me a
                  line. Just fill the entries that are given and press the
                  button
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 bg-white">
            <div class="modal-body pt-5">

              <div id="right_content" class="text w-100">
                <form class="signup-form" method="post" action="javascript:void(0)" id="contact_us">
                  <h1 class="web-h1 pb-5">Contact</h1>
                  <input type="hidden" name="url" value="{{url()->full()}}" />
                  <div class="form-group row mb-0">
                    <div class="col-md-6 mb-5 col-sm-12 col-12">
                      <input type="text" name="first_name" class="form-control" required placeholder="First Name" />
                      <div style="width:100%;" id="first_name_error_message"> </div>
                    </div>
                    <div class="col-md-6 mb-5 col-sm-12 col-12">
                      <input type="text" name="last_name" class="form-control" required placeholder="Last Name" />
                    </div>
                  </div>
                  <div class="form-group mb-5">
                    <input type="text" name="phone" class="form-control" required placeholder="Phone" />
                    <div style="width:100%;" id="phone_number_error_message"> </div>
                  </div>
                  <div class="form-group mb-5">
                    <input type="email" name="email" class="form-control" placeholder="Email" required />
                    <div style="width:100%;" id="email_error_message"> </div>
                  </div>
                  <div class="form-group mb-5">
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea2" rows="1" placeholder="Please Type your Message" required></textarea>
                  </div>

                  <div class="form-group text-center">
                    <button type="submit" id="send_form" class="btn web-btn web-btn-blue">
                      Submit </button>
                    <img id="loader" style="width:50px;" src="{{url('public/spinner.gif')}}" />

                  </div>
                </form>
              </div>

              <div id="right_content_two" style="height:500px !important;" class="col-md-12 text-center">

                <img src="{{asset('public/front_theme/tick.svg') }}" alt="" class="img-responsive" />

                <div style="width:100%;" id="res_message"> </div>
              </div>
            </div>
          </div>
        </div>
        <!--button-->
        <div class="modal-button">
          <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times-circle" aria-hidden="true"></i>
            <!--<i class="bi bi-x-circle-fill"></i>-->
            <!--<i class="far fa-times-circle fa-lg"></i>-->
          </button>
        </div>
      </div>
    </div>
  </div>
              @php
              $industries = DB::table('industries')->select('background_image')->get();
              $Array = [];
                      $Array['background_0'] = $industries[0]->background_image;
                      $Array['background_1'] = $industries[1]->background_image;
                      $Array['background_2'] = $industries[2]->background_image;
                      $Array['background_3'] = $industries[3]->background_image;
                      $Array['background_4'] = $industries[4]->background_image;
                      $Array['background_5'] = $industries[5]->background_image;
                      $Array['background_6'] = $industries[6]->background_image;
                      $Array['background_7'] = $industries[7]->background_image;
                      $Array['background_8'] = $industries[8]->background_image;
                      $Array['background_9'] = $industries[9]->background_image;
                      $Array['background_10'] = $industries[10]->background_image;
                      $Array['background_11'] = $industries[11]->background_image;
                      $Array['background_12'] = $industries[12]->background_image;
                      $Array['background_13'] = $industries[13]->background_image;
                      $Array['background_14'] = $industries[14]->background_image;
                      $Array['background_15'] = $industries[15]->background_image;
                      $Array['background_16'] = $industries[16]->background_image;
                      

              $final_Result = $Array;
              $industries_json = json_encode($final_Result);
              $url = env('APP_URL');
            @endphp

            <script>
                var industries_js_var = '<?php echo $industries_json; ?>';
                var app_url = '<?php echo $url; ?>';
            </script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  
  <script src="{{ asset('public/front_theme/js/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('public/front_theme/js/jquery.waypoints.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
  <script src="{{ asset('public/front_theme/js/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('public/front_theme/js/ekko-lightbox.min.js')}}"></script>
  <script src="{{ asset('public/front_theme/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="{{ asset('public/front_theme/js/theme.js')}}"></script>



  <script>
    //-----------------
    $(document).ready(function() {
      
      $('.edit_delete_add_component').hide();
      

      $('#right_content_two').hide();
      $('#loader').hide();

      $('#send_form').click(function(e) {
        e.preventDefault();

        var f = $("#form");
        var formData = f.serialize();

        /*Ajax Request Header setup*/
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $('.thankyou').hide();
        $('#send_form').html('Submit');
        /* Submit form data using ajax*/
        $.ajax({
          url: "{{ url('ajax_post')}}",
          method: 'post',
          data: $('form').serialize(),
          success: function(response) {
            //------------------------
            if (response.msg) {
              //console.log(response);
              $('#send_form').html('Submit');
              $('#right_content_two').show();

              $('#get-in-touch').hide();
              $('#right_content').hide();
              $('#res_message').show();

              $('form').hide();
              $('#res_message').html(response.msg);

              $('#msg_div').removeClass('d-none');
            }
            if (response.first_name_error_msg) {
              $('#first_name_error_message').html(response.first_name_error_msg);
              $('#loader').show();
            }

            if (response.phone_number_error_msg) {
              $('#phone_number_error_message').html(response.phone_number_error_msg);
              $('#loader').show();
            }

            if (response.email_error_msg) {
              $('#email_error_message').html(response.email_error_msg);
              $('#loader').show();
            }


            document.getElementsByTagName("form").reset();
            setTimeout(function() {
              $('#creativeModal').hide();
            }, 1000);
            //--------------------------
          }
        });

      });
    });
    //-----------------
  </script>
</body>

</html>