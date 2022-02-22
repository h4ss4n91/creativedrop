
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
            <a class="nav-link d-flex @if(last(request()->segments()) == 'client_and_partner') active @endif" href="{{url('admin/page_sections/team')}}">
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
            <a class="nav-link d-flex @if(last(request()->segments()) == 'request') active @endif" href="{{url('admin/page_sections/team')}}">
                <i class="fa fa-headphones"></i>
                Request for Meeting
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex @if(last(request()->segments()) == 'para_style_1') active @endif" href="{{url('admin/page_sections/team')}}">
                <i class="fa fa-paragraph"></i>
                Paragraph Style 1
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-style_2" data-toggle="pill" href="#account-vertical-style_2" aria-expanded="false">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-paragraph"></i> Paragraph Style 2
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-style_3" data-toggle="pill" href="#account-vertical-style_3" aria-expanded="false">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-paragraph"></i> Paragraph Style 3
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-style_4" data-toggle="pill" href="#account-vertical-style_4" aria-expanded="false">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-paragraph"></i> Paragraph Style 4
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-style_5" data-toggle="pill" href="#account-vertical-style_5" aria-expanded="false">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-paragraph"></i> Paragraph Style 5
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-image-bellow-text-and-button" data-toggle="pill" href="#account-vertical-image-bellow-text-and-button" aria-expanded="false">
                <i class="feather icon-type"></i> Section 15 (Left Image Right Heading)
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-paragraph-with-icon" data-toggle="pill" href="#account-vertical-paragraph-with-icon" aria-expanded="false">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-pencil"></i>
                Section 16 (Paragraph with icon)
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-section_17" data-toggle="pill" href="#account-vertical-section_17" aria-expanded="false">
                <i class="feather icon-type"></i> Section 17
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-section-18" data-toggle="pill" href="#account-vertical-section_18" aria-expanded="false">
                <i class="feather icon-type"></i> Section 18
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-section-19" data-toggle="pill" href="#account-vertical-section_19" aria-expanded="false">
                <!-- <i class="feather icon-type"></i>  -->
                <i class="fa fa-arrows-v"></i>
                Padding Bottom and Padding TOP
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-section-20" data-toggle="pill" href="#account-vertical-section_20" aria-expanded="false">
                <i class="feather icon-type"></i> Background Image with Heading
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-section-21" data-toggle="pill" href="#account-vertical-section_21" aria-expanded="false">
                <i class="feather icon-type"></i> Slider with Video
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-section-22" data-toggle="pill" href="#account-vertical-section_22" aria-expanded="false">
                <i class="feather icon-type"></i> Two Headings with Video or Image and Title
            </a>
        </li>

    </ul>
