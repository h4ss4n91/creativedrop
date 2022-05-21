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

                                                    <div class="tab-pane active" id="account-vertical-style_2" role="tabpanel" aria-labelledby="account-pill-style_2" aria-expanded="false">
                                                        <div class="media">
                                                            <div style="color:#fff; border-radius:5px; background-color:#0F69C9; padding:10px;" class="media-body mt-75">
                                                                Paragraph Right Image Left Text ( Para style 2 )
                                                                <span class="btn btn-primary btn-sm" 
                                                                data-toggle="modal" data-target="#mainMenuModel"
                                                                class="media-body mt-75"
                                                                style="border:1px solid #fff; float:right">Create ( Para style 2 ) </span>
																					<div class="modal fade" id="mainMenuModel" tabindex="-1" role="dialog" aria-labelledby="mainMenuModel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
																								<div class="modal-content">
																										<div class="btn btn-primary modal-header">
																											<h5 class="modal-title" id="exampleModalLongTitle">Create Services</h5>
																											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																												<span aria-hidden="true">&times;</span>
																											</button>
																										</div>
																										<div class="modal-body">
                                                                                                        <div class="row">
                                                                                                            <div class="col-12">
                                                                                                                @include('backend.flash_message')
                                                                                                                <form method="POST" action="{{url('admin/store_para_style_2')}}" enctype="multipart/form-data">
                                                                                                                    @csrf
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-12">
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
                                                                                                                            <div class="col-12">
                                                                                                                                <div class="row">
                                                                                                                                    @include('padding_top_and_bottom')
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-8">
                                                                                                                            <img style="width:100%" src="{{asset('public/page_sections/paragraph_right_image_left_text.png')}}" />
                                                                                                                        </div>

                                                                                                                        <div class="col-12">
                                                                                                                            <script>
                                                                                                                                $(document).ready(function() {
                                                                                                                                    // Denotes total number of rows
                                                                                                                                    var paraStyleTworowIdx = 0;
                                                                                                                                    // jQuery button click event to add a row
                                                                                                                                    $('#paraStyleTwoaddBtn').on('click', function() {
                                                                                                                                        // Adding a row inside the tbody.
                                                                                                                                        $('#paraStyleTwotbody').append(`<tr id="R${++paraStyleTworowIdx}">
                                                                                                                                            <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>
                                                                                                                                            <td class="row-index text-center"><input type="text" name="title[]" class="form-control"/></td>
                                                                                                                                            <td class="row-index text-center"><input type="text" name="paragraph[]" class="form-control"/></td>
                                                                                                                                            <td class="row-index text-center"><select name="flex_row_reverse" class="form-control"><option value="">No</option><option value="flex_row_reverse">Yes</option></select></td>
                                                                                                                                            <td class="text-center"><button class="btn btn-danger btn-sm remove" type="button">Remove</button></td>
                                                                                                                                            </tr>`);
                                                                                                                                    });
                                                                                                                                    // jQuery button click event to remove a row.
                                                                                                                                    $('#paraStyleTwotbody').on('click', '.remove', function() {
                                                                                                                                        // Getting all the rows next to the row
                                                                                                                                        // containing the clicked button
                                                                                                                                        var child = $(this).closest('tr').nextAll();
                                                                                                                                        // Iterating across all the rows 
                                                                                                                                        // obtained to change the index
                                                                                                                                        child.each(function() {
                                                                                                                                            // Getting <tr> id.
                                                                                                                                            var id = $(this).attr('id');
                                                                                                                                            // Getting the <p> inside the .row-index class.
                                                                                                                                            var idx = $(this).children('.row-index').children('p');
                                                                                                                                            // Gets the row number from <tr> id.
                                                                                                                                            var dig = parseInt(id.substring(1));
                                                                                                                                            // Modifying row index.
                                                                                                                                            idx.html(`Row ${dig - 1}`);
                                                                                                                                            // Modifying row id.
                                                                                                                                            $(this).attr('id', `R${dig - 1}`);
                                                                                                                                        });
                                                                                                                                        // Removing the current row.
                                                                                                                                        $(this).closest('tr').remove();
                                                                                                                                        // Decreasing total number of rows by 1.
                                                                                                                                        paraStyleTworowIdx--;
                                                                                                                                    });
                                                                                                                                });
                                                                                                                            </script>
                                                                                                                            <div class="container pt-4">
                                                                                                                                <button class="btn btn-md btn-primary" id="paraStyleTwoaddBtn" type="button"> Add Para Style Two </button>
                                                                                                                                <div class="table-responsive">
                                                                                                                                    <table class="table table-bordered">
                                                                                                                                        <thead>
                                                                                                                                            <tr>
                                                                                                                                                <th class="text-center">Image</th>
                                                                                                                                                <th class="text-center">Title</th>
                                                                                                                                                <th class="text-center">Paragraph</th>
                                                                                                                                                <th class="text-center">Change Position</th>
                                                                                                                                                <th class="text-center">Remove Row</th>
                                                                                                                                            </tr>
                                                                                                                                        </thead>
                                                                                                                                        <tbody id="paraStyleTwotbody">

                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"> Save </button>
                                                                                                                            
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
                                                        <hr />
                                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                                            <thead>
                                                                <tr>
                                                                    <th>Section Name</th>
                                                                    <th>Image</th>
                                                                    <th>Title</th>
                                                                    <th>Paragraph</th>
                                                                    <th>Change Position</th>
                                                                    <th>Padding</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($para_style_2->unique('name') as $row_para_style_2)
                                                                <tr>

                                                                    <td>
                                                                        {{$row_para_style_2->name}}
                                                                    </td>
                                                                    <td>
                                                                        <img style="width:100px" src="{{asset('public/para_style_2/'.$row_para_style_2->image)}}" />
                                                                    </td>


                                                                    <td>
                                                                        {{$row_para_style_2->title}}
                                                                    </td>
                                                                    <td style="width:300px;">
                                                                        {{$row_para_style_2->paragraph}}
                                                                    </td>
                                                                    <td>
                                                                        @if($row_para_style_2->flex_row_reverse == NULL) NO @else() YES @endif
                                                                    </td>
                                                                    <td>
                                                                        Top: {{$row_para_style_2->padding_top}}<br/>
                                                                        Bottom: {{$row_para_style_2->padding_bottom}}
                                                                    </td>

                                                                    <td> <a class="btn btn-danger btn-sm" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_2/'.$row_para_style_2->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>  <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#para_style_2_ModalCenter{{$row_para_style_2->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                                                                        <div class="modal fade" id="para_style_2_ModalCenter{{$row_para_style_2->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_2_ModalCenter{{$row_para_style_2->id}}" aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_2->title}}</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="POST" action="{{url('admin/edit_para_style_2')}}" enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <input type="hidden" value="{{$row_para_style_2->id}}" name="id">

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
                                                                                                            <input type="text" name="name" value="{{$row_para_style_2->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
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
                                                                                                                        <option value="{{$row_para_style_2->padding_top}}"> {{$row_para_style_2->padding_top}} </option>
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
                                                                                                                        <option value="{{$row_para_style_2->padding_bottom}}"> {{$row_para_style_2->padding_bottom}} </option>
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
                                                                                                            <label for="account-username">Title</label>
                                                                                                            <input type="text" name="title" value="{{$row_para_style_2->title}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">image</label>
                                                                                                            <input type="file" name="image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <img class="img-responsive" src="{{asset('public/para_style_2/'.$row_para_style_2->image)}}" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Paragraph</label>
                                                                                                            <input type="text" name="paragraph" value="{{$row_para_style_2->paragraph}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Link</label>
                                                                                                            <input type="text" name="link" value="{{$row_para_style_2->link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                    <button type="submit" class="btn btn-primary btn-sm mr-sm-1 mb-1 mb-sm-0">Edit Para Style 2</button>
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
                                                                    <th>Title</th>
                                                                    <th>Paragraph</th>
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





