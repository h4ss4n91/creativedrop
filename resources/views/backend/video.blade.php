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
                                        <div class="tab-pane active " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                            <!-- BEGIN: Content-->
                                            <div class="media">

                                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                    Create Video Section
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                @include('backend.flash_message')
                                                <div class="col-6">
                                                    <form method="POST" action="{{url('admin/store_video')}}">
                                                        @csrf
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
                                                                        <label for="account-username">Video Name</label>
                                                                        <input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Video Title</label>
                                                                        <input type="text" name="video_title" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Video Link</label>
                                                                        <input type="text" name="video_link" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Button Label</label>
                                                                        <input type="text" name="contact_button_label" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Button Link</label>
                                                                        <input type="text" name="contact_button_link" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                
                                                            @include('padding_top_and_bottom');
                                            
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Video</button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <hr />
                                                </div>

                                                <div class="col-6">
                                                    <img style="width:100%" src="{{asset('public/page_sections/video.png')}}" />
                                                </div>

                                            </div>

                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <th>Video Name</th>
                                                        <th>Video Title</th>
                                                        <th>Video Link</th>
                                                        <th>Button Label</th>
                                                        <th>Button Link</th>
                                                        <th>Padding</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($videos as $row_videos)
                                                    <tr>
                                                        <td>{{$row_videos->name}}</td>
                                                        <td>{{$row_videos->video_title}}</td>

                                                        <td>{{$row_videos->video_link}}</td>
                                                        <td>{{$row_videos->button_label}}</td>
                                                        <td>{{$row_videos->contact_button_link}}</td>
                                                        <td>Top: {{$row_videos->padding_top}} <br/>
                                                            Bottom: {{$row_videos->padding_bottom}} <br/>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-primary" data-toggle="modal" data-target="#videoModalCenter{{$row_videos->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a> 
                                                            <a class="btn btn-danger" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_video/'.$row_videos->id)}} "> <i class="fa fa-trash-o admin-delete text-danger"></i></a>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="videoModalCenter{{$row_videos->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModalCenter{{$row_videos->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$row_videos->video_title}}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_video')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$row_videos->id}}" name="id">

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
                                                                                                <label for="account-username">Video Name</label>
                                                                                                <input type="text" name="name" value="{{$row_videos->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Video Title</label>
                                                                                                <input type="text" name="video_title" value="{{$row_videos->video_title}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Video Link</label>
                                                                                                <input type="text" name="video_link" value="{{$row_videos->video_link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
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
                                                                                                            <option value="{{$row_videos->padding_top}}"> {{$row_videos->padding_top}} </option>
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
                                                                                                            <option value="{{$row_videos->padding_bottom}}"> {{$row_videos->padding_bottom}} </option>
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
                                                                                                <label for="account-username">Contact Button Link</label>
                                                                                                <input type="text" name="contact_button_link" value="{{$row_videos->contact_button_link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Button Label</label>
                                                                                                <input type="text" name="button_label" value="{{$row_videos->button_label}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Video</button>
                                                                                        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-light">Cancel</button>
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
                                                        <th>Page Name</th>
                                                        <th>Page Description</th>
                                                        <th>Page Slug</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <!-- END: Content-->
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

