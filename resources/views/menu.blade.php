@extends('layouts.backend')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@section('content')
<!-- BEGIN: Content-->

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-md-12 mb-2">
                <h3 class="content-header-title mb-0">Navigation Setting</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin//')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Navigation setting </li>
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
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                            <li class="nav-item">
                                <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i class="fa fa-bars"></i>
                                    Main Navigation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i class="fa fa-bars"></i>
                                    2nd Level Menu
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link d-flex" id="account-pill-connections" data-toggle="pill" href="#account-vertical-connections" aria-expanded="false">
                                    <i class="fa fa-bars"></i>
                                    3rd Level Menu
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                                    Create Main Menu
                                                </div>
                                            </div>
                                        <br>

                                            <form method="POST" action="{{url('admin/store_main_menu')}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Name Main Menu</label>
                                                                <input type="text" name="main_menu" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Menu Link</label>
                                                                <input type="text" name="menu_link" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Sorting</label>
                                                                <input type="text" name="sorting" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                            Menu</button>
                                                        <button type="reset" class="btn btn-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="card-title">Main Menu List</h4>
                                                    </div>
                                                    
                                                        <div class="card-body card-dashboard">
                                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Main Menu</th>
                                                                        <th>Menu Link</th>
                                                                        <th>Sorting</th>
                                                                        <th>Created at</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($main_menu as $row_main_menu)
                                                                    <tr>
                                                                        <td>{{$row_main_menu->menu_name}}</td>
                                                                        <td>{{$row_main_menu->menu_link}}</td>
                                                                        <td>{{$row_main_menu->sorting}}</td>
                                                                        <td>{{$row_main_menu->created_at}}</td>
                                                                        <td>

                                                                            <a  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$row_main_menu->id}}"><i class="fa fa-pencil-square-o admin-edit"></i></a> <a  class="btn btn-danger" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_main_menu/'.$row_main_menu->id)}} "> <i class="fa fa-trash-o admin-delete text-danger"></i></a>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="exampleModalCenter{{$row_main_menu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle{{$row_main_menu->id}}" aria-hidden="true">
                                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$row_main_menu->menu_name}}</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form method="POST" action="{{url('admin/edit_main_menu')}}">
                                                                                                @csrf
                                                                                                <input type="hidden" value="{{$row_main_menu->id}}" name="id">

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <div class="controls">
                                                                                                                <label for="account-username">Menu Name</label>
                                                                                                                <input type="text" value="{{$row_main_menu->menu_name}}" name="menu_name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <div class="controls">
                                                                                                                <label for="account-username">Menu Link / Page Link</label>
                                                                                                                <input type="text" value="{{$row_main_menu->menu_link}}" name="menu_link" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <div class="controls">
                                                                                                                <label for="account-username">Sorting</label>
                                                                                                                <input type="text" name="sorting" value="{{$row_main_menu->sorting}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>



                                                                                                    <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                                                                            Menu</button>
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                                        <th>Main Menu</th>
                                                                        <th>Menu Link</th>
                                                                        <th>Sorting</th>
                                                                        <th>Created at</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                                    Create 2nd Level Menu
                                                </div>
                                            </div>
                                            <hr>
                                            <form method="POST" action="{{url('admin/store_child_menu')}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Select Main Menu</label>
                                                                <select name="main_menu_id" class="form-control">
                                                                    @foreach($main_menu as $main_menu_row)
                                                                    <option value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Name 2nd Level Menu</label>
                                                                <input type="text" name="child_menu" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">2nd Level Menu Link</label>
                                                                <input type="text" name="child_menu_link" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Sorting</label>
                                                                <input type="text" name="sorting" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                            Menu</button>
                                                        <button type="reset" class="btn btn-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="card-title">2nd Level Menu List</h4>
                                                    </div>
                                                    <div class="card-body card-dashboard">
                                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                                            <thead>
                                                                <tr>
                                                                    <th>Main Menu ID</th>
                                                                    <th>2nd Level Menu Name</th>
                                                                    <th>2nd Level Menu Link</th>
                                                                    <th>Sorting</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($child_menus as $row_child_menus)
                                                                @php
                                                                $main_menuID = DB::table('menus')->where('id', '=', $row_child_menus->menu_id)->get();
                                                                @endphp
                                                                <tr>
                                                                    <td>
                                                                        @if(!$main_menuID->isEmpty())
                                                                        {{$main_menuID[0]->menu_name}}
                                                                        @endif
                                                                    </td>
                                                                    <td>{{$row_child_menus->item_name}}</td>
                                                                    <td>{{$row_child_menus->item_link}}</td>
                                                                    <td>{{$row_child_menus->sorting}}</td>
                                                                    <td>
                                                                        <a class="btn btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#childMenuModal{{$row_child_menus->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>  <a class="btn btn-danger" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_child_menu/'.$row_child_menus->id)}} "> <i class="fa fa-trash-o admin-delete text-danger"></i></a>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="childMenuModal{{$row_child_menus->id}}" tabindex="-1" role="dialog" aria-labelledby="childMenuModal{{$row_child_menus->id}}" aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_child_menus->item_name}}</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="POST" action="{{url('admin/edit_child_menu')}}">
                                                                                            @csrf
                                                                                            <input type="hidden" value="{{$row_child_menus->id}}" name="id">
        
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Main Menu Name</label>
        
                                                                                                            <select name="main_menu_id" class="form-control">
                                                                                                                @foreach($main_menu_four as $main_menu_row)
                                                                                                                @if($row_child_menus->menu_id == $main_menu_row->id)
                                                                                                                <option selected value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>
                                                                                                                @endif
                                                                                                                <option value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>
                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
        
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Child Menu Name</label>
                                                                                                            <input type="text" value="{{$row_child_menus->item_name}}" name="item_name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
        
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Menu Link / Page Link</label>
                                                                                                            <input type="text" value="{{$row_child_menus->item_link}}" name="item_link" class="form-control" id="account-username"  data-validation-required-message="This username field is required">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
        
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="account-username">Sorting : {{$row_child_menus->sorting}}</label>
                                                                                                            <input type="text" class="form-control" name="sorting" value="{{$row_child_menus->sorting}}" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
        
        
        
                                                                                                <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                                                                        Menu</button>
                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </tr>
                                                                @endforeach
        
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>Main Menu ID</th>
                                                                    <th>2nd Level Menu Name</th>
                                                                    <th>2nd Level Menu Link</th>
                                                                    <th>Featured Service</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                            
                                        </div>
                                        
                                        <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel" aria-labelledby="account-pill-connections" aria-expanded="false">
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                                    Create 3rd Level Menu
                                                </div>
                                            </div>
                                            <hr>
                                            <form method="POST" action="{{url('admin/store_sub_child_menu')}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Select Main Menu</label>
                                                                <select name="main_menu_id" id="main_menu" class="form-control">
                                                                    @foreach($main_menu_two as $main_menu_row)
                                                                    <option value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Select 2nd Level Menu</label>
                                                                <select name="child_menu_id" id="sub_menu" class="form-control">
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">3rd Level Menu Name</label>
                                                                <input type="text" name="sub_child_item_name" id="3rd_menu_navigation" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">3rd Level Menu Link</label>
                                                                <input type="text" name="sub_child_item_link" id="3rd_menu_navigation_slug" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Sorting</label>
                                                                <input type="text" name="sorting" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                            Menu</button>
                                                        <button type="reset" class="btn btn-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                            
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="card-title">3rd Level Menu List</h4>
                                                        </div>
                                                        
                                                            <div class="card-body card-dashboard">
                                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>2nd Level Menu Name</th>
                                                                            <th>3rd Level Menu Name</th>
                                                                            <th>3rd Level Menu Link</th>
                                                                            <th>Sorting</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($sub_child_menus as $row_sub_child_menus)
                                                                        @php
                                                                        $child_menu_three = DB::table('child_menus')->where('id', '=', $row_sub_child_menus->child_menu_id)->get();
                                                                        @endphp
                                                                        <tr>
                                                                            <td>{{$child_menu_three[0]->item_name}}</td>
                                                                            <td>{{$row_sub_child_menus->item_name}}</td>
                                                                            <td>{{$row_sub_child_menus->item_link}}</td>
                                                                            <td>{{$row_sub_child_menus->sorting}}</td>
                                                                            <td>

                                                                                <a class="btn btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#subChildMenuModal{{$row_sub_child_menus->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>  <a  class="btn btn-danger" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_sub_child_menu/'.$row_sub_child_menus->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="subChildMenuModal{{$row_sub_child_menus->id}}" tabindex="-1" role="dialog" aria-labelledby="subChildMenuModal{{$row_sub_child_menus->id}}" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$row_sub_child_menus->item_name}}</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form method="POST" action="{{url('admin/edit_sub_child_menu')}}">
                                                                                                    @csrf
                                                                                                    <input type="hidden" value="{{$row_sub_child_menus->id}}" name="id">

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <div class="controls">
                                                                                                                    <label for="account-username">2nd Level Menu Name</label>

                                                                                                                    <select name="main_menu_id" class="form-control">
                                                                                                                        @foreach($child_menu_four as $main_menu_row)
                                                                                                                        @if($row_sub_child_menus->child_menu_id == $main_menu_row->id)
                                                                                                                        <option selected value="{{$main_menu_row->id}}"> {{$main_menu_row->item_name}} </option>
                                                                                                                        @endif
                                                                                                                        <option value="{{$main_menu_row->id}}"> {{$main_menu_row->item_name}} </option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <div class="controls">
                                                                                                                    <label for="account-username">3rd Level Menu Name</label>
                                                                                                                    <input type="text" value="{{$row_sub_child_menus->item_name}}" name="edit_sub_child_item_name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <div class="controls">
                                                                                                                    <label for="account-username">3rd Level Menu Link / Page Link</label>
                                                                                                                    <input type="text" value="{{$row_sub_child_menus->item_link}}" name="edit_sub_child_item_link" class="form-control" id="account-username"  data-validation-required-message="This username field is required">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <div class="controls">
                                                                                                                    <label for="account-username">Sorting</label>
                                                                                                                    <input type="text" value="{{$row_sub_child_menus->sorting}}" name="sorting" class="form-control"  data-validation-required-message="This username field is required">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>



                                                                                                        <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                                                                                Menu</button>
                                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                                            <th>2nd Level Menu Name</th>
                                                                            <th>3rd Level Menu Name</th>
                                                                            <th>3rd Level Menu Name Link</th>
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- account setting page end -->
        </div>
    </div>
</div>
<!-- END: Content-->
<script>
    $("#main_menu").change(function(){
        var page_section = $(this).children("option:selected").val();
          
         $.ajax({
                              type:'GET',
                              url:'services_by_id/'+page_section,
                              success:function(data){
                                   console.log(data);
                                 $('#sub_menu').html(data);

                                 
                              }
                          });
       
    });

    $("#3rd_menu_navigation").keyup(function() {
    var Text = $(this).val();
    Text = Text.toLowerCase();
    Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
    $("#3rd_menu_navigation_slug").val(Text);
});



</script>
@endsection