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

                                        <div class="tab-pane active" id="account-vertical-connections" role="tabpanel" aria-labelledby="account-pill-connections" aria-expanded="false">
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                    Create Industries Section
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-12">

                                                    @include('backend.flash_message')

                                                    <form method="POST" action="{{url('admin/store_industries')}}" enctype="multipart/form-data">
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
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Industry Name</label>
                                                                        <input type="text" name="title" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Industry Image</label>
                                                                        <input type="file" name="industry_image" class="form-control" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        @include('padding_top_and_bottom')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <img style="width:100%" src="{{asset('public/page_sections/industries.png')}}" />
                                                            </div>

                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Industries </button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            <hr />
                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <th>Section Name</th>
                                                        <th>Industry Name</th>
                                                        <th>Industry Image</th>
                                                        <th>Services</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($industries->unique('title') as $row_industries)
                                                    <tr>
                                                        <td>
                                                            {{$row_industries->name}}
                                                        </td>

                                                        <td>
                                                            {{$row_industries->title}}
                                                        </td>
                                                        <td>
                                                            <img style="width:100px;" src="{{asset('public/industries/'.$row_industries->image)}}" />
                                                        </td>
                                                        <td>
                                                            @php
                                                            $industries_services = DB::table('industries')
                                                            ->join('menus', 'menus.id', '=', 'industries.service_id')
                                                            ->join('child_menus', 'child_menus.id', '=', 'industries.sub_category_id')
                                                            ->where('industries.name', '=', $row_industries->name)->get();
                                                            @endphp
                                                            <table>
                                                                <tr>
                                                                    <th>Services</th>
                                                                    <th>Sub Services</th>
                                                                </tr>

                                                                @foreach($industries_services as $row_industries_services)
                                                                <tr>
                                                                    <td>{{$row_industries_services->menu_name}}</td>
                                                                    <td>{{$row_industries_services->item_name}}</td>
                                                                </tr>

                                                                @endforeach
                                                            </table>

                                                        </td>
                                                        <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_industry/'.$row_industries->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a> | <a data-toggle="modal" data-target="#industryModalCenter{{$row_industries->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                                                            <div class="modal fade" id="industryModalCenter{{$row_industries->id}}" tabindex="-1" role="dialog" aria-labelledby="industryModalCenter{{$row_industries->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">Industry Edit</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_industry')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$row_industries->id}}" name="id">

                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username"> Section Name</label>
                                                                                                <input type="text" name="name" value="{{$row_industries->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username"> Industry Name</label>
                                                                                                <input type="text" name="name" value="{{$row_industries->title}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-8">

                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Industry Image</label>
                                                                                                <input type="file" name="industry_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-4">
                                                                                        <img style="width:100px" src="{{asset('public/industries/'.$row_industries->image)}}" />
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username"> Button Link</label>
                                                                                                <input type="text" name="contact_button_link" value="{{$row_industries->link}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        @include('button_style')
                                                                                    </div>

                                                                                    <div class="col-12">

                                                                                        <div class="container pt-4">
                                                                                            <button class="btn btn-md btn-primary" id="edit_industryaddBtn" type="button"> Edit Services for Industry </button>
                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-bordered">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th class="text-center">Service</th>
                                                                                                            <th class="text-center">Sub Category</th>
                                                                                                            <th class="text-center">Remove Row</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody id="edit_industrytbody">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Industry</button>
                                                                                        <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>

                                                    @endforeach

                                                </tbody>
                                                <tfoot>
                                                    <tr>

                                                        <th>Section Name</th>
                                                        <th>Industry Name</th>
                                                        <th>Industry Image</th>
                                                        <th>Services</th>
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

