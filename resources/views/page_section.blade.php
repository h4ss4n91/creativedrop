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
            <div class="content-header-left col-md-6 col-md-12 mb-2">
                <h3 class="content-header-title mb-0">Components</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Components </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-md-12 mb-md-0 mb-2">
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
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                <div style="color:#fff; border-radius:5px; background-color:#0F69C9; padding:10px;" class="media-body mt-75">
                                                    Slider List
                                                    <span class="btn btn-primary btn-sm" 
                                                                data-toggle="modal" data-target="#mainMenuModel"
                                                                class="media-body mt-75"
                                                                style="border:1px solid #fff; float:right">Create Slider </span>
                                                    

																					<div class="modal fade" id="mainMenuModel" tabindex="-1" role="dialog" aria-labelledby="mainMenuModel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
																								<div class="modal-content">
																										<div class="btn btn-primary modal-header">
																											<h5 class="modal-title" id="exampleModalLongTitle">Create Slider</h5>
																											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																												<span aria-hidden="true">&times;</span>
																											</button>
																										</div>
																										<div class="modal-body">
																										
																											<form method="POST" action="{{url('admin/store_slider')}}" enctype="multipart/form-data">
																												@csrf
																												<div class="row">
																													<div class="col-md-6">
																														<img style="width:100%" src="{{asset('public/page_sections/slider.png')}}" />
																													</div>
																													<div class="col-md-6">
																														<div class="col-md-12">
																																<div class="row">
																																	<div class="col-md-12">
																																		<div class="form-group">
																																			<div class="controls">
																																				<label for="account-username">Slider Name</label>
																																				<input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
																																			</div>
																																		</div>
																																	</div>
																																</div>
																															<div class="row">
																																@include('padding_top_and_bottom')
																															</div>
																														</div>
																													</div>
																												</div>
																												<div class="row">
																													<div class="col-md-12">
																														
																														<div class="container pt-4">
																															<button class="btn btn-md btn-primary" id="slideraddBtn" type="button"> Add new Slider Row </button>
																															<div class="table-responsive">
																																<table class="table table-bordered">
																																	<thead>
																																		<tr>
																																			<th class="text-center">Slider Image</th>
																																			<th class="text-center">Heading 1</th>
																																			<th class="text-center">Heading 2</th>
																																			<th class="text-center">Button Link</th>
																																			<th class="text-center">Button Style</th>
																																			<th class="text-center">Status</th>
																																			<th class="text-center">Remove Row</th>
																																		</tr>
																																	</thead>
																																	<tbody id="slidertbody">

																																	</tbody>
																																</table>
																															</div>

																														</div>
																													</div>


																													<div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
																														<button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Save</button>
																														<button type="reset" class="btn btn-light">Cancel</button>
																													</div>
																												</div>
																											</form>
																										</div>
																								</div>
                                                                                        </div>
                                                                                    </div>
                                                </div>
                                                <hr/>
                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <th>Slider Name</th>
                                                        <th>Slider Image</th>
                                                        <th>Slider Heading 1</th>
                                                        <th>Slider Heading 2</th>
                                                        <th>Status</th>
                                                        <th>Padding</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sliders->unique('name') as $row_sliders)
                                                    <tr>
                                                        <td>{{$row_sliders->name}}</td>
                                                        <td>
                                                            <img style="width:100px" src="{{asset('public/slider/'.$row_sliders->image)}}" />
                                                        </td>
                                                        <td>{{$row_sliders->text1}}</td>
                                                        <td>{{$row_sliders->text2}}</td>
                                                        <td>{{$row_sliders->status}}</td>
                                                        <td>Top: {{$row_sliders->padding_top}} <br/>
                                                            Bottom: {{$row_sliders->padding_bottom}} <br/>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewsliderModalCenter{{$row_sliders->id}}"> <i class="fa fa-eye admin-edit"></i></a> 
                                                                @include('modal.slider_first_modal')
                                                               <!-- Modal -->
                                                              @include('modal.slider_second_modal')
                                                            <a class="btn btn-danger btn-sm" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_slider/'.$row_sliders->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>

                                                            

                                                        </td>
                                                    </tr>

                                                    @endforeach

                                                </tbody>
                                                <tfoot>
                                                    <tr>

                                                        <th>Slider Name</th>
                                                        <th>Slider Image</th>
                                                        <th>Slider Heading 1</th>
                                                        <th>Slider Heading 2</th>
                                                        <th>Status</th>
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
        </div>
        </section>
        <!-- account setting page end -->
    </div>
</div>
</div>
<!-- END: Content-->

@endsection