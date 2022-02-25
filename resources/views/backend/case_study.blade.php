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
                   @include('left_menu')
                </div>
                    <!-- right content section -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    
                                    <div class="tab-pane active" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                        <div class="media">
                                    
                                            <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                Create Case Study Section
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                @include('backend.flash_message')
                                                <form method="POST" action="{{url('admin/store_case_study')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Section Name</label>
                                                                    <input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Case Study Title</label>
                                                                        <input type="text" name="case_study_name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Case Study Image</label>
                                                                        <input type="file" name="case_study_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <img style="width:100%" src="{{asset('public/page_sections/case_study.png')}}" />
                                                        </div>
                                    
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Short Description</label>
                                                                    <input type="text" name="short_description" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="row">
                                                                @include('padding_top_and_bottom')
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col-12">
                                    
                                                            <div class="container pt-4">
                                                                <button class="btn btn-md btn-primary" id="caseStudyaddBtn" type="button"> Add Case Study Content </button>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">Image</th>
                                                                                <th class="text-center">Image Style</th>
                                                                                <th class="text-center">Video</th>
                                                                                <th class="text-center">Video Style</th>
                                                                                <th class="text-center">Video Background</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="caseStudytbody">
                                    
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                    
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col-6">
                                                            
                                                            <div class="container pt-4">
                                                                <button class="btn btn-md btn-warning" id="caseStudyServicesaddBtn" type="button"> Add Case Study Services </button>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">Service</th>
                                                                                <th class="text-center">Sub Category</th>
                                                                                <th class="text-center"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="caseStudyServicestbody">
                                    
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col-6">
                                    
                                                            <div class="container pt-4">
                                                                <button class="btn btn-md btn-success" id="caseStudyIndustryaddBtn" type="button"> Add Case Study Industries </button>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">Industry</th>
                                                                                <th class="text-center"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="caseStudyIndustrytbody">
                                    
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                    
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Case Study</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                    
                                    
                                        </div>
                                    
                                        <hr />
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr>
                                                    <th>Case Study Image</th>
                                                    <th>Name</th>
                                                    <th>Case Study Title</th>
                                                    <th>Case Study Short Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($case_study as $case_study_row)
                                                <tr>
                                                    <td>
                                                        <img style="width:100px;" src="{{asset('public/case_study/'.$case_study_row->image)}}" />
                                                    </td>
                                                    <td>{{$case_study_row->name}}</td>
                                                    <td>{{$case_study_row->title}}</td>
                                                    <td>{{$case_study_row->short_description}}</td>
                                                    <td> <a href="{{url('admin/detail_case_study/'.$case_study_row->id)}}"> <i class="fa fa-eye text-success"></i> </a> | <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_case_study/'.$case_study_row->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i> </a>  </td>
                                                </tr>
                                    
                                                @endforeach
                                    
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Case Study Image</th>
                                                    <th>Case Study Title</th>
                                                    <th>Case Study Short Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
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



