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

                                    <div class="tab-pane active" id="account-vertical-style_4" role="tabpanel" aria-labelledby="account-pill-style_4" aria-expanded="false">
                                        <div class="media">
                                            <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                Para Style 5
                                            </div>
                                        </div>
                                        <hr />
                                    
                                        <div class="row">
                                            <div class="col-6">
                                                @include('backend.flash_message')
                                                <form method="POST" action="{{url('admin/store_para_style_5')}}" enctype="multipart/form-data">
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
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <select name="style" id="para_style_5_style" class="form-control">
                                                                            <option value="">--- Select Style ---</option>
                                                                            <option value="style1">Style 1</option>
                                                                            <option value="style2">Style 2</option>
                                                                    </select>
                                                                </div>
                                                            </div> <br/>
                                                            
                                                                <div class="row">
                                                                    @include('padding_top_and_bottom')
                                                                </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Top Paragraph</label>
                                                                        <textarea name="heading" class="form-control">

                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Left Paragraph</label>
                                                                        <textarea name="text_left" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                            
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Right Paragraph</label>
                                                                    
                                                                    <textarea name="text_right" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                    
                                    
                                                        {{-- <div class="col-12">
                                                            
                                                            <div class="container pt-4">
                                                                <button class="btn btn-md btn-primary" id="paraStyleFouraddBtn" type="button"> Add Para Style Four </button>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">TEXT</th>
                                                                                <th class="text-center">Remove Row</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="paraStyleFourtbody">
                                    
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                    
                                                            </div>
                                                        </div> --}}
                                    
                                    
                                    
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Paragraph style 5 </button>
                                                            <button type="reset" class="btn btn-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                    
                                            </div>
                                    
                                            <div class="col-6">
                                                {{-- <img style="width:100%" src="{{asset('public/page_sections/section_22_style2.png')}}" /> --}}
                                                
                                                <div id="para_style_5_style_content"> </div>
                                            </div>
                                    
                                        </div>
                                    
                                        <hr />
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Main Heading</th>
                                                    <th>Text Left</th>
                                                    <th>Text Right</th>
                                                    <th>Paddings</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($para_style_5 as $row_para_style_5)
                                                <tr>
                                    
                                                    <td>
                                                        {{$row_para_style_5->name}}
                                                    </td>
                                                    <td>
                                                        {{$row_para_style_5->heading}}
                                                    </td>
                                    
                                                    <td>
                                                        {{$row_para_style_5->text_left}}
                                                    </td>
                                                    <td>
                                                        {{$row_para_style_5->text_right}}
                                                    </td>
                                                    <td>
                                                        TOP: {{$row_para_style_5->padding_top}}
                                                        BOTTOM: {{$row_para_style_5->padding_bottom}}
                                                    </td>
                                    
                                                    </td>
                                                    <td style="width:50px;"> <a class="btn btn-sm btn-danger" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_5/'.$row_para_style_5->id)}}"><i class="fa fa-trash-o"></i> </a> | <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#para_style_5_ModalCenter{{$row_para_style_5->id}}"> <i class="fa fa-pencil"></i> </a>
                                                        <div class="modal fade" id="para_style_5_ModalCenter{{$row_para_style_5->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_5_ModalCenter{{$row_para_style_5->id}}" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_5->name}}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_para_style_5')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" name="id" value="{{$row_para_style_5->id}}"/>
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
                                                                                                <input type="text" name="name" class="form-control" id="account-username" value="{{$row_para_style_5->name}}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="row">
                                                                                                <select name="style" id="para_style_5_style" class="form-control">
                                                                                                        <option value="">{{$row_para_style_5->style}}</option>
                                                                                                        <option value="style1">Style 1</option>
                                                                                                        <option value="style2">Style 2</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div> <br/>
                                                                                        
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Padding TOP  </label>
                                                                                                            <select name="padding_top" class="form-control">
                                                                                                                <option value="{{$row_para_style_5->padding_top}}"> {{$row_para_style_5->padding_top}} </option>
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
                                                                                                                <option value="{{$row_para_style_5->padding_bottom}}"> {{$row_para_style_5->padding_bottom}} </option>
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
                                                                                        
                                                                                        
                                                                                        <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Top Paragraph</label>
                                                                                                    <textarea name="heading" class="form-control">{{$row_para_style_5->heading}}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Left Paragraph</label>
                                                                                                    <textarea name="text_left" class="form-control">{{$row_para_style_5->text_left}}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Right Paragraph</label>
                                                                                                
                                                                                                <textarea name="text_right" class="form-control">{{$row_para_style_5->text_right}}</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                
                                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Paragraph style 5 </button>
                                                                                        <button type="reset" class="btn btn-light">Cancel</button>
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
                                                    <th>Name</th>
                                                    <th>Main Heading</th>
                                                    <th>Text Left</th>
                                                    <th>Text Right</th>
                                                    <th>Paddings</th>
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









