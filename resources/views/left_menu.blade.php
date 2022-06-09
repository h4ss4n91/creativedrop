<style>
    .nav-item:hover{
        background-color:#fff;
        color:#000 !important;
    }
    .nav-item > a:hover{
        color:#000 !important;
    }
    </style>
    <ul class="nav nav-pills flex-column mt-md-0 mt-1">
        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'heading') active @endif"  href="{{url('admin/page_sections/heading')}}">
                
                <i class="fa fa-text-height"></i>
                Heading
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex  @if(last(request()->segments()) == 'slider') active @endif"  href="{{url('admin/page_sections/slider')}}">
                
                <i class="fa fa-file-image-o"></i>
                Slider
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex  @if(last(request()->segments()) == 'video') active @endif" href="{{url('admin/page_sections/video')}}">
                
                <i class="fa fa-play-circle"></i>Video
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex  @if(last(request()->segments()) == 'services') active @endif" href="{{url('admin/page_sections/services')}}">
                
                <i class="fa fa-cogs"></i>
                Services
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'industries') active @endif" href="{{url('admin/page_sections/industries')}}">
                
                <i class="fa fa-industry"></i>
                Industries
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'case_study') active @endif" href="{{url('admin/page_sections/case_study')}}">
                <!-- <i class="feather icon-info"></i>  -->
                <i class="fa fa-info-circle"></i>
                Case Study
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'team') active @endif" href="{{url('admin/page_sections/team')}}">
                <i class="fa fa-users"></i> Team
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'client_and_partner') active @endif" href="{{url('admin/page_sections/client_and_partner')}}">
                <!-- <i class="feather icon-camera"></i>  -->
                <i class="fa fa-handshake-o"></i>
                Clients & Partners
            </a>
        </li>

        <!-- li class="nav-item">
            <a class="nav-link d-flex>
                <i class="fa fa-newspaper-o"></i>
                News & Opinions
            </a>
        </!-->

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'request') active @endif" href="{{url('admin/page_sections/request')}}">
                <i class="fa fa-headphones"></i>
                Request for Meeting
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'para_style_1') active @endif" href="{{url('admin/page_sections/para_style_1')}}">
                <i class="fa fa-paragraph"></i>
                Paragraph Style 1
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'para_style_2') active @endif" href="{{url('admin/page_sections/para_style_2')}}">
                <i class="fa fa-paragraph"></i> Paragraph Style 2
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'para_style_3') active @endif" href="{{url('admin/page_sections/para_style_3')}}">
                <i class="fa fa-paragraph"></i> Paragraph Style 3
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'para_style_4') active @endif" href="{{url('admin/page_sections/para_style_4')}}">
                <i class="fa fa-paragraph"></i> Paragraph Style 4
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'para_style_5') active @endif" href="{{url('admin/page_sections/para_style_5')}}">
                <i class="fa fa-paragraph"></i> Paragraph Style 5
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_15') active @endif" href="{{url('admin/page_sections/section_15')}}">
                <i class="feather icon-type"></i> Section 15 (Left Image Right Heading)
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_16') active @endif" href="{{url('admin/page_sections/section_16')}}">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-pencil"></i>
                Section 16 (Paragraph with icon)
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_17') active @endif" href="{{url('admin/page_sections/section_17')}}">
                <i class="feather icon-type"></i> Section 17
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_18') active @endif" href="{{url('admin/page_sections/section_18')}}">
                <i class="feather icon-type"></i> Section 18
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_19') active @endif" href="{{url('admin/page_sections/section_19')}}">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-arrows-v"></i>
                Padding Bottom and Padding TOP
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_20') active @endif" href="{{url('admin/page_sections/section_20')}}">
                <i class="feather icon-type"></i> Background Image with Heading
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_21') active @endif" href="{{url('admin/page_sections/section_21')}}">
                <i class="feather icon-type"></i> Slider with Video
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_22') active @endif" href="{{url('admin/page_sections/section_22')}}">
                <i class="feather icon-type"></i> Two Headings with Video or Image and Title
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_23') active @endif" href="{{url('admin/page_sections/section_23')}}">
                <i class="feather icon-type"></i> Left Text Heading and Right Image
            </a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'section_24') active @endif" href="{{url('admin/page_sections/section_24')}}">
                <i class="feather icon-type"></i> 3rd Level Navigation
            </a>
        </li> -->

    </ul>
