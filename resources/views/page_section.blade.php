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
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                    Create Slider
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">

                                                <div class="col-md-12">
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
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Slider</button>
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
                                                    @foreach($sliders as $row_sliders)
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
                                                            <a class="btn btn-success" data-toggle="modal" data-target="#sliderModalCenter{{$row_sliders->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a> 
                                                            <a class="btn btn-danger" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_slider/'.$row_sliders->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="sliderModalCenter{{$row_sliders->id}}" tabindex="-1" role="dialog" aria-labelledby="sliderModalCenter{{$row_sliders->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$row_sliders->text1}}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_slider')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$row_sliders->id}}" name="id">

                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Slider Name</label>
                                                                                                <input type="text" name="name" value="{{$row_sliders->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-8">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Slider Image : {{$row_sliders->image}}</label>
                                                                                                <input type="file" name="slider_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-4">
                                                                                        <img style="width:100px" src="{{asset('public/slider/'.$row_sliders->image)}}" />
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Status</label>
                                                                                                <input type="text" name="status" class="form-control" value="{{$row_sliders->status}}" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Padding TOP  </label>
                                                                                                            <select name="padding_top" class="form-control">
                                                                                                                <option value="{{$row_sliders->padding_top}}"> {{$row_sliders->padding_top}} </option>
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
                                                                                                                <option value="{{$row_sliders->padding_bottom}}"> {{$row_sliders->padding_bottom}} </option>
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
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Heading One</label>
                                                                                                <input type="text" name="text1" class="form-control" value="{{$row_sliders->text1}}" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Heading Two</label>
                                                                                                <input type="text" name="text2" value="{{$row_sliders->text2}}" class="form-control" value="heading2" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username"> Button Link</label>
                                                                                                <input type="text" name="contact_button_link" value="{{$row_sliders->contact_button_link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Slider</button>
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
                                        

                                        

                                        <div class="tab-pane fade" id="account-vertical-section_23" role="tabpanel" aria-labelledby="account-pill-section_23" aria-expanded="false">
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                    Heading
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img style="width:100%" src="{{asset('public/page_sections/heading.png')}}" />
                                                </div>
                                                <div class="col-md-6">
                                                    <form method="POST" action="{{url('admin/store_section_23')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="controls">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Section Name</label>
                                                                        <input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Heading </label>
                                                                        <select name="heading" class="form-control">
                                                                            <option value="h1"> H1 </option>
                                                                            <option value="h2"> H2 </option>
                                                                            <option value="h3"> H3 </option>
                                                                            <option value="h4"> H4 </option>
                                                                            <option value="h5"> H5 </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Title </label>
                                                                        <input type="text" name="title" name="title" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @include('padding_top_and_bottom')


                                                            <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Heading</button>
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
                                                        <th>Heading</th>
                                                        <th>Title</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($section_23 as $row_section_23)
                                                    <tr>
                                                        <td>{{$row_section_23->name}}</td>

                                                        <td>{{$row_section_23->heading}}</td>
                                                        <td>{{$row_section_23->title}}</td>

                                                        <td>

                                                            <a data-toggle="modal" data-target="#section_23_ModalCenter{{$row_section_23->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a> |
                                                            <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_section_23/'.$row_section_23->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="section_23_ModalCenter{{$row_section_23->id}}" tabindex="-1" role="dialog" aria-labelledby="section_23_ModalCenter{{$row_section_23->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="section_22_ModalLongTitle">{{$row_section_23->title}}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_section_23')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$row_section_23->id}}" name="id">

                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Section Name</label>
                                                                                                <input type="text" name="name" class="form-control" value="{{$row_section_23->name}}" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username"> Heading </label>
                                                                                                <select name="heading" class="form-control">
                                                                                                    <option value="{{$row_section_23->heading}}">{{$row_section_23->heading}}</option>
                                                                                                    <option value="h1"> H1 </option>
                                                                                                    <option value="h2"> H2 </option>
                                                                                                    <option value="h3"> H3 </option>
                                                                                                    <option value="h4"> H4 </option>
                                                                                                    <option value="h5"> H5 </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Title </label>
                                                                                                <input type="text" name="title" class="form-control" id="account-username" value="{{$row_section_23->title}}" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Heading</button>
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
                                                        <th>Heading</th>
                                                        <th>Title</th>
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