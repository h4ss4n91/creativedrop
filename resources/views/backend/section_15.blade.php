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
                                    <div class="tab-pane active" id="account-vertical-image-bellow-text-and-button" role="tabpanel" aria-labelledby="account-pill-image-bellow-text-and-button" aria-expanded="false">
                                        <div class="media">
                                            <div style="color:#fff; border-radius:5px; background-color:#0F69C9; padding:10px;" class="media-body mt-75">
                                                Left Image Right Heading (Section 15 )

                                                <span class="btn btn-primary btn-sm" 
                                                                data-toggle="modal" data-target="#mainMenuModel"
                                                                class="media-body mt-75"
                                                                style="border:1px solid #fff; float:right">Create ( Section 15 ) </span>
																					<div class="modal fade" id="mainMenuModel" tabindex="-1" role="dialog" aria-labelledby="mainMenuModel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
																								<div class="modal-content">
																										<div class="btn btn-primary modal-header">
																											<h5 class="modal-title" id="exampleModalLongTitle">Create ( Section 15 )</h5>
																											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																												<span aria-hidden="true">&times;</span>
																											</button>
																										</div>
																										<div class="modal-body">
                                                                                                        <div class="row">
                                                                                                            <div class="col-6">
                                                                                                                <form method="POST" action="{{url('admin/store_section_15')}}" enctype="multipart/form-data">
                                                                                                                    @csrf
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
                                                                                                                                    <label for="account-username">Section Name</label>
                                                                                                                                    <input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                    
                                                                                                                        <div class="col-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <div class="controls">
                                                                                                                                    <label for="account-username">Select Style </label>
                                                                                                                                    <select id="style" name="style" class="form-control">
                                                                                                                                        <option value=""> -- Select Style -- </option>
                                                                                                                                        <option value="style1"> Style 1</option>
                                                                                                                                        <option value="style2"> Style 2</option>
                                                                                                                                        <option value="style3"> Style 3</option>
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
                                                                                                                                <button class="btn btn-md btn-primary" id="section15_addBtn" type="button"> Add Section 15 </button>
                                                                                                                                <div class="table-responsive">
                                                                                                                                    <table class="table table-bordered">
                                                                                                                                        <thead>
                                                                                                                                            <tr>
                                                                                                                                                <th class="text-center">Image</th>
                                                                                                                                                <th class="text-center">Heading</th>
                                                                                                                                                <th class="text-center">Change Position</th>
                                                                                                                                                <th class="text-center">Remove Row</th>
                                                                                                                                            </tr>
                                                                                                                                        </thead>
                                                                                                                                        <tbody id="section15_tbody">
                                                                                                    
                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                                                                </div>
                                                                                                    
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                    
                                                                                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save </button>
                                                                                                                            
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </form>
                                                                                                            </div>

                                                                                                            <div class="col-6">
                                                                                                                    <div id="style_content"></div>
                                                                                                            </div>
                                                                                                    
                                                                                                    
                                                                                                        </div>
																										</div>
																								</div>
                                                                                        </div>
                                                                                    </div>
                                            </div>
                                        </div>
                                    
                                    
                                        <hr />
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr>
                                    
                                                    <th>Section Name</th>
                                                    <th>Style</th>
                                                    <th>Image</th>
                                                    <th>Heading </th>
                                                    <th>Change Position </th>
                                                    <th>Padding</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($section_15 as $row_section_15)
                                                <tr>
                                                    <td>{{$row_section_15->name}}</td>
                                                    <td>{{$row_section_15->style}}</td>
                                                    <td>
                                                        <img style="width:100px" src="{{asset('public/section_15/'.$row_section_15->image)}}" />
                                                    </td>
                                                    <td>{{$row_section_15->heading1}}</td>
                                                    <td>
                                                        @if($row_section_15->flex_row_reverse == NULL)
                                                        NO
                                                        @else
                                                        YES
                                                        @endif
                                                    </td>
                                                    <td>
                                                        Top: {{$row_section_15->padding_top}}<br/>
                                                        Bottom: {{$row_section_15->padding_bottom}}
                                                    </td>
                                    
                                                    <td> <a class="btn btn-danger btn-sm" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_15/'.$row_section_15->id)}}"><i class="fa fa-trash-o admin-delete text-danger"></i> </a> <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#para_style_5_ModalCenter{{$row_section_15->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                                                        <div class="modal fade" id="para_style_5_ModalCenter{{$row_section_15->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_5_ModalCenter{{$row_section_15->id}}" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_15->text}}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="POST" action="{{url('admin/edit_section_15')}}" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" value="{{$row_section_15->id}}" name="id">
                                    
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
                                                                                            <label for="account-username">Section Name</label>
                                                                                            <input type="text" name="name" value="{{$row_section_15->name}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
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
                                                                                                        <option value="{{$row_section_15->padding_top}}"> {{$row_section_15->padding_top}} </option>
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
                                                                                                        <option value="{{$row_section_15->padding_bottom}}"> {{$row_section_15->padding_bottom}} </option>
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
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Select Style </label>
                                                                                            <select id="style" name="style" class="form-control">
                                                                                                <option value="{{$row_section_15->style}}"> {{$row_section_15->style}} </option>
                                                                                                <option value="style1"> Style 1</option>
                                                                                                <option value="style2"> Style 2</option>
                                                                                                <option value="style3"> Style 3</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Heading</label>
                                                                                            <input type="text" name="heading" value="{{$row_section_15->heading1}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                    
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">change Position</label>
                                    
                                                                                            <select class="form-control" name="flex_row_reverse">
                                                                                                @if($row_section_15->flex_row_reverse == NULL)
                                                                                                <option value="{{$row_section_15->flex_row_reverse}}"> NO </option>
                                                                                                @else
                                                                                                <option value="{{$row_section_15->flex_row_reverse}}"> YES </option>
                                                                                                @endif
                                    
                                                                                                <option value=""> NO </option>
                                                                                                <option value="flex_row_reverse"> Yes </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                    
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Logo Image</label>
                                                                                            <input type="file" name="image" value="{{$row_section_15->image}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <img style="width:90%" src="{{asset('public/section_15/'.$row_section_15->image)}}" />
                                    
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                    
                                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                    <button type="submit" class="btn btn-primary btn-sm mr-sm-1 mb-1 mb-sm-0">Edit Logo</button>
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
                                                    <th>Page Title</th>
                                                    <th>Section Name</th>
                                                    <th>Image</th>
                                                    <th>Text</th>
                                                    <th>Padding</th>
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











