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
                                        
                                    @include('backend.flash_message')

                                        <div class="tab-pane active" id="account-vertical-info-services" role="tabpanel" aria-labelledby="account-pill-info-services" aria-expanded="false">
                                            <div class="media">

                                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                    Services
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img style="width:70%" src="{{asset('public/page_sections/services.png')}}" />
                                                </div>
                                                <div class="col-md-8">
                                                    <form method="POST" action="{{url('admin/store_service')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">

                                                            {{-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Page Name</label>
                                                                        <select class="form-control" name="page_id">
                                                                            @foreach($pages as $row_page)
                                                                            <option value="{{$row_page->id}}"> {{$row_page->title}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Section Name</label>
                                                                        <input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">CLASS NAME</label>
                                                                        <select class="form-control" name="class_name">
                                                                            <option name="section-bg-white">section-bg-white</option>
                                                                            <option name="section-bg-white">section-bg-white</option>
                                                                            <option name="section-bg-grey-grad">section-bg-grey-grad</option>
                                                                        </select>
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
                                                                    <button class="btn btn-md btn-warning" id="ServiceaddBtn" type="button"> Add Services and Sub Services </button>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="text-center">Main Service</th>
                                                                                    <th class="text-center">2nd Level Service</th>
                                                                                    <th class="text-center">3rd Level Service</th>
                                                                                    <th class="text-center"></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="Servicetbody">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Services</button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>Section Name</th>
                                                            <th>CSS Class Name</th>
                                                            <th>Main Service</th>
                                                            <th>2nd Level Service</th>
                                                            <th>2nd Level Service Link</th>
                                                            <th>3rd Level Service</th>
                                                            <th>3rd Level Service Link</th>
                                                            <th>Padding</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($services as $row_services)
                                                        <tr>
                                                            <td>{{$row_services->name}}</td>
                                                            <td>{{$row_services->bootstra_class_name}}</td>
                                                            <td>{{$row_services->first_level_menu_name}}</td>
                                                            <td>{{$row_services->second_level_menu_name}}</td>
                                                            <td>{{$row_services->second_level_menu_link}}</td>
                                                            <td>{{$row_services->third_level_menu_name}}</td>
                                                            <td>{{$row_services->third_level_menu_link}}</td>
                                                            <td>Top: {{$row_services->padding_top}} <br/>
                                                                Bottom: {{$row_services->padding_bottom}} <br/>
                                                            </td>
                                                            <td> <a class="btn btn-danger" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_service/'.$row_services->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>  <a class="btn btn-primary" data-toggle="modal" data-target="#serviceModalCenter{{$row_services->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                                                                <div class="modal fade" id="serviceModalCenter{{$row_services->id}}" tabindex="-1" role="dialog" aria-labelledby="serviceModalCenter{{$row_services->id}}" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLongTitle">Testing</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST" action="{{url('admin/edit_service')}}" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{$row_services->id}}" name="id">

                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Page Name</label>
                                                                                                    <select class="form-control" name="page_id">
                                                                                                        @foreach($pages as $row_page)
                                                                                                                <option value="{{$row_page->id}}"> {{$row_page->title}} </option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Section Name</label>
                                                                                                    <input type="text" name="name" class="form-control" value="{{$row_services->name}}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">CLASS NAME</label>
                                                                                                    <select class="form-control" name="class_name">
                                                                                                        <option name="section-bg-white">section-bg-white</option>
                                                                                                        <option name="section-bg-white">section-bg-white</option>
                                                                                                        <option name="section-bg-grey-grad">section-bg-grey-grad</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Main Service</label>
                                                                                                    <select name="main_service" class="form-control">
                                                                                                        <option value="{{$row_services->main_service}}">{{$row_services->first_level_menu_name}} </option>
                                                                                                        @php
                                                                                                            $_menus = DB::table('menus')->get();
                                                                                                        @endphp
                                                                                                        @foreach($_menus as $row_menu)
                                                                                                            <option value="{{$row_menu->id}}"> {{$row_menu->menu_name}}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Sub Service</label>
                                                                                                    <select name="sub_service" class="form-control">
                                                                                                        <option value="{{$row_services->sub_service}}">{{$row_services->second_level_menu_name}} </option>
                                                                                                        @php
                                                                                                            $_child_menus = DB::table('child_menus')->get();
                                                                                                        @endphp
                                                                                                        @foreach($_child_menus as $row_child_menu)
                                                                                                            <option value="{{$row_child_menu->id}}"> {{$row_child_menu->item_name}}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username"> Sub Service Link</label>
                                                                                                    <input type="text" name="sub_service_link" value="{{$row_services->sub_service_link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Padding TOP  </label>
                                                                                                            <select name="padding_top" class="form-control">
                                                                                                                <option value="{{$row_services->padding_top}}"> {{$row_services->padding_top}} </option>
                                                                                                                <option value="0"> 0 </option>
                                                                                                                <option value="30"> 30 </option>
                                                                                                                <option value="50"> 50 </option>
                                                                                                                <option value="70"> 70 </option>
                                                                                                                <option value="100"> 100 </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Padding BOTTOM  </label>
                                                                                                            <select name="padding_bottom" class="form-control">
                                                                                                                <option value="{{$row_services->padding_bottom}}"> {{$row_services->padding_bottom}} </option>
                                                                                                                <option value="0"> 0 </option>
                                                                                                                <option value="30"> 30 </option>
                                                                                                                <option value="50"> 50 </option>
                                                                                                                <option value="70"> 70 </option>
                                                                                                                <option value="100"> 100 </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Service</button>
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
                                                            <th>CSS Class Name</th>
                                                            <th>Main Service</th>
                                                            <th>2nd Level Service</th>
                                                            <th>2nd Level Service Link</th>
                                                            <th>3rd Level Service</th>
                                                            <th>3rd Level Service Link</th>
                                                            <th>Padding</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>


                                            </div>

                                            <hr />

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


