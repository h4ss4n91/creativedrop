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
                <div class="col-md-3 mb-2 mb-md-0">
                   @include('left_menu')
                </div>
                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                @include('backend.flash_message')
                                    <!-- team -->
                                    <div class="tab-pane active" id="account-vertical-info-team" role="tabpanel" aria-labelledby="account-pill-info-team" aria-expanded="false">
                                        <div class="media">

                                            <div style="color:#fff; border-radius:5px; background-color:#0F69C9; padding:10px;" class="media-body mt-75">
                                                Team List

                                                <span class="btn btn-primary btn-sm" 
                                                                data-toggle="modal" data-target="#mainMenuModel"
                                                                class="media-body mt-75"
                                                                style="border:1px solid #fff; float:right">Create Team </span>
                                                    

																					<div class="modal fade" id="mainMenuModel" tabindex="-1" role="dialog" aria-labelledby="mainMenuModel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
																								<div class="modal-content">
																										<div class="btn btn-primary modal-header">
																											<h5 class="modal-title" id="exampleModalLongTitle">Create Team</h5>
																											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																												<span aria-hidden="true">&times;</span>
																											</button>
																										</div>
																										<div class="modal-body">
                                                                                                        <div class="row">
                                                                                                            
                                                                                                            <div class="col-12">

                                                                                                                <form method="POST" action="{{url('admin/store_team')}}" enctype="multipart/form-data">
                                                                                                                    @csrf
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <div class="controls">

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="col-6">
                                                                                                                            <div class="form-group">
                                                                                                                                <div class="controls">
                                                                                                                                    <label for="account-username">Name Section</label>
                                                                                                                                    <input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-12">
                                                                                                                                <div class="row">
                                                                                                                                    @include('padding_top_and_bottom')
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        
                                                                                                                        <div class="col-6">
                                                                                                                            <img style="width:100%" src="{{asset('public/page_sections/team.png')}}" />
                                                                                                                        </div>

                                                                                                                        <div class="col-12">

                                                                                                                            <div class="container pt-4">
                                                                                                                                <button class="btn btn-md btn-primary" id="teamaddBtn" type="button"> Add Team Member </button>
                                                                                                                                <div class="table-responsive">
                                                                                                                                    <table class="table table-bordered">
                                                                                                                                        <thead>
                                                                                                                                            <tr>
                                                                                                                                                <th class="text-center">Profile Image</th>
                                                                                                                                                <th class="text-center">Name</th>
                                                                                                                                                <th class="text-center">Designation</th>
                                                                                                                                                <th class="text-center">Remove Row</th>
                                                                                                                                            </tr>
                                                                                                                                        </thead>
                                                                                                                                        <tbody id="teamtbody">

                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save</button>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                        </div>
																										</div>
																								</div>
                                                                                        </div>
                                                                                    </div>
                                            </div>
                                        </div>
                                        <hr>
                                       
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr>
                                                    <th>Section Name</th>
                                                    <th>Team Member Image</th>
                                                    <th>Team Member Title</th>
                                                    <th>Team Member Designation</th>
                                                    <th>Padding</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($team as $case_study_row)
                                                <tr>
                                                    <td>{{$case_study_row->section_name}}</td>
                                                    <td>
                                                        <img style="width:100px;" src="{{asset('public/team/'.$case_study_row->image)}}" />
                                                    </td>
                                                    <td>{{$case_study_row->name}}</td>
                                                    <td>{{$case_study_row->designation}}</td>
                                                    <td>Top: {{$case_study_row->padding_top}} <br/>
                                                        Bottom: {{$case_study_row->padding_bottom}} <br/>
                                                    </td>
                                                    <td>
                                                              
                                                        <a class="btn btn-danger btn-sm" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_team/'.$case_study_row->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>  <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#teamStudyModalCenter{{$case_study_row->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                                                        <div class="modal fade" id="teamStudyModalCenter{{$case_study_row->id}}" tabindex="-1" role="dialog" aria-labelledby="teamStudyModalCenter{{$case_study_row->id}}" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$case_study_row->name}}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="POST" action="{{url('admin/edit_team')}}" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" value="{{$case_study_row->id}}" name="id">

                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Section Name</label>
                                                                                            <input type="text" name="section_name" class="form-control" value="{{$case_study_row->section_name}}" id="account-username" data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-8">

                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Team Member Image</label>
                                                                                                <input type="file" name="team_member_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-4">
                                                                                    <img style="width:100px" src="{{asset('public/team/'.$case_study_row->image)}}" />
                                                                                </div>

                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Team Member Name</label>
                                                                                            <input type="text" name="team_member_title" value="{{$case_study_row->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Team Member Designation</label>
                                                                                            <input type="text" name="team_member_designation" value="{{$case_study_row->designation}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
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
                                                                                                        <option value="{{$case_study_row->padding_top}}"> {{$case_study_row->padding_top}} </option>
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
                                                                                                        <option value="{{$case_study_row->padding_bottom}}"> {{$case_study_row->padding_bottom}} </option>
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
                                                                                    <button type="submit" class="btn btn-primary btn-sm mr-sm-1 mb-1 mb-sm-0">Edit Team</button>
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
                                                    <th>Team Member Image</th>
                                                    <th>Team Member Name</th>
                                                    <th>Team Member Designation</th>
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





