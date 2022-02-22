@extends('layouts.backend')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@section('content')
<!-- BEGIN: Content-->
<style>
    .form-control {
        padding: 7px !important;
    }

    .table td,
    .table th {
        padding: 7px !important;
    }
</style>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Components</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Components </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                <div class="media width-250 float-right">
                    <div class="media-left media-middle">
                        <div id="sp-bar-total-sales"></div>
                    </div>
                    <div class="media-body media-right text-right">
                        <h3 class="m-0">20</h3><span class="text-muted">Components</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- account setting page start -->
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                <div class="col-md-2 mb-2 mb-md-0">
                   
    <ul class="nav nav-pills flex-column mt-md-0 mt-1">
        <li class="nav-item">
            <a class="nav-link d-flex"  href="{{url('admin/page_sections/heading')}}">
                <!-- <i class="feather icon-type"></i> -->
                <i class="fa fa-text-height"></i>
                Heading
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex active"  href="{{url('admin/page_sections')}}">
                <!-- <i class="feather icon-list"></i>  -->
                <!-- <i class="fa fa-rectangle-vertical-history"></i> -->
                <i class="fa fa-file-image-o"></i>
                Slider
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                <!-- <i class="feather icon-list"></i>  -->
                <i class="fa fa-play-circle"></i>

                Video
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-info-services" data-toggle="pill" href="#account-vertical-info-services" aria-expanded="false">
                <!-- <i class="feather icon-info"></i>  -->
                <i class="fa fa-cogs"></i>
                Services
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-connections" data-toggle="pill" href="#account-vertical-connections" aria-expanded="false">
                <!-- <i class="feather icon-feather"></i>  -->
                <i class="fa fa-industry"></i>
                Industries
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                <!-- <i class="feather icon-info"></i>  -->
                <i class="fa fa-info-circle"></i>
                Case Study
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-info-team" data-toggle="pill" href="#account-vertical-info-team" aria-expanded="false">
                <i class="fa fa-users"></i> Team
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                <!-- <i class="feather icon-camera"></i>  -->
                <i class="fa fa-handshake-o"></i>
                Clients & Partners
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-news" data-toggle="pill" href="#account-vertical-news" aria-expanded="false">
                <!-- <i class="feather icon-globe"></i>  -->
                <i class="fa fa-newspaper-o"></i>
                <!-- <i class="fa fa-globe"></i> -->
                News & Opinions
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-request" data-toggle="pill" href="#account-vertical-request" aria-expanded="false">
                <!-- <i class="feather icon-users"></i>  -->
                <i class="fa fa-headphones"></i>
                Request for Meeting
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" id="account-pill-style_1" data-toggle="pill" href="#account-vertical-style_1" aria-expanded="false">
                <!-- <i class="feather icon-type"></i>  -->
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

                </div>
                    <!-- right content section -->
                    <div class="col-md-10">
                        <div class="card">
                            @yeild('content');
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- account setting page end -->
    </div>
</div>
</div>
<!-- END: Content-->

@endsection