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

                                    <div class="tab-pane active" id="account-vertical-paragraph-with-icon" role="tabpanel" aria-labelledby="account-pill-paragraph-with-icon" aria-expanded="false">
                                        <div class="media">
                                            <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                Paragraph with icon
                                            </div>
                                        </div>
                                        <hr />
                                    
                                        <div class="row">
                                            @include('backend.flash_message')
                                            <div class="col-4">
                                                <img style="width:100%" src="{{asset('public/page_sections/paragraph_with_icon.png')}}" />
                                            </div>
                                            <div class="col-8">
                                                
                                                <form method="POST" action="{{url('admin/store_section_16')}}" enctype="multipart/form-data">
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
                                    
                                                            <div class="container pt-4">
                                                                <button class="btn btn-md btn-primary" id="section16addBtn" type="button"> Add </button>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">Icon</th>
                                                                                <th class="text-center">Heading</th>
                                                                                <th class="text-center">Text</th>
                                    
                                                                                <th class="text-center">Remove Row</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="section16tbody">
                                    
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                    
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Section 16 </button>
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
                                                    <th>Icon</th>
                                                    <th>Heading</th>
                                                    <th>Text</th>
                                    
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($section_16 as $row_section_16)
                                                <tr>
                                                    <td>{{$row_section_16->name}}</td>
                                                    <td>
                                                        {{$row_section_16->image}}
                                                    </td>
                                                    <td>
                                                        {{$row_section_16->heading}}
                                                    </td>
                                                    <td>
                                                        {{$row_section_16->text}}
                                                    </td>
                                    
                                    
                                                    <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_16/'.$row_section_16->id)}}"><i class="fa fa-trash-o admin-delete text-danger"></i> </a> | <a data-toggle="modal" data-target="#section_15_ModalCenter{{$row_section_16->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                                                        <div class="modal fade" id="section_15_ModalCenter{{$row_section_16->id}}" tabindex="-1" role="dialog" aria-labelledby="section_15_ModalCenter{{$row_section_16->id}}" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_16->heading}}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="POST" action="{{url('admin/edit_section_16')}}" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" value="{{$row_section_16->id}}" name="id">
                                    
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
                                                                                            <label for="account-username">Heading</label>
                                                                                            <input type="text" name="title" value="{{$row_section_16->heading1}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Paragraph Right</label>
                                                                                            <input type="text" name="paragraph" value="{{$row_section_16->text}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                    
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Paragraph Left</label>
                                                                                            <input type="text" name="paragraph_left" value="" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                    
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Link</label>
                                                                                            <input type="text" name="link" value="" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                    
                                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Paragraph with Icon</button>
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
                                                    <th>Image</th>
                                                    <th>Heading</th>
                                                    <th>Text</th>
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











