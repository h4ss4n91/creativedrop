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
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Website Pages</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Website Pages </li>
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
                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                            <li class="nav-item">
                                <a class="nav-link d-flex @if(last(request()->segments()) == 'pages') active @endif" href="{{url('admin/pages')}}">

                                    <i class="fa fa-pencil"></i>
                                    Create Page
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex @if(last(request()->segments()) == 'pages_list') active @endif" href="{{url('admin/pages_list')}}">

                                    <i class="fa fa-eye"></i>
                                    View Pages List
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- right content section -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="tab-content">
                                        @include('backend.flash_message')
                                                        <div class="tab-pane active" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                            <!-- BEGIN: Content-->
                                                            <div class="app-content content">
                                                                <div class="content-overlay"></div>
                                                                <div class="content-wrapper">
                                                                    <div class="content-header row">
                                                                        <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                                                                            <div class="media width-250 float-right">
                                                                                <div class="media-left media-middle">
                                                                                    <div id="sp-bar-total-sales"></div>
                                                                                </div>
                                                                                <div class="media-body media-right text-right">
                                                                                    {{-- <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-body">
                                                                        <!-- DOM - jQuery events table -->
                                                                        <section id="dom">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="card">
                                                                                        <div class="card-header">
                                                                                            <h4 style="color:#fff; border-radius:5px; background-color:#0F69C9; padding:10px;" class="media-body mt-75" class="card-title">Pages List</h4>
                                                                                        </div>
                                                                                        <div class="card-content collapse show">
                                                                                            <div class="card-body card-dashboard">
                                                                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>Page Title</th>
                                                                                                            <th>Page Slug</th>
                                                                                                            <th>Status</th>
                                                                                                            <th>Action</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        @foreach($pages as $row_pages)
                                                                                                        <tr>
                                                                                                            <td>{{$row_pages->title}}</td>
                                                                                                            <td>{{$row_pages->slug}}</td>
                                                                                                            <td>{{$row_pages->status}}</td>
                                                                                                            <td>
                                                                                                                <a class="btn btn-primary btn-sm" href="{{url('admin/edit_page_content',$row_pages->id)}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>  <a class="btn btn-danger btn-sm" onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_page',$row_pages->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i> </a>
                                                                                                            </td>
                                                                                                            <!-- Modal -->
                                                                                                        </tr>

                                                                                                        @endforeach

                                                                                                    </tbody>
                                                                                                    <tfoot>
                                                                                                        <tr>
                                                                                                            <th>Page Title</th>
                                                                                                            <th>Page Slug</th>
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
                                                                        </section>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END: Content-->
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {

        $("#page_sections_1").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_1').html(data);


                }
            });

        });

        $("#page_sections_2").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_2').html(data);


                }
            });

        });

        $("#page_sections_3").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_3').html(data);


                }
            });

        });

        $("#page_sections_4").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_4').html(data);


                }
            });

        });

        $("#page_sections_5").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_5').html(data);


                }
            });

        });

        $("#page_sections_6").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_6').html(data);


                }
            });

        });

        $("#page_sections_7").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_7').html(data);


                }
            });

        });

        $("#page_sections_8").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_8').html(data);
                }
            });

        });

        $("#page_sections_9").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#dependent_page_sections_9').html(data);


                }
            });

        });










        $("#edit_page_sections_1").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_1').html(data);


                }
            });

        });

        $("#edit_page_sections_2").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_2').html(data);


                }
            });

        });

        $("#edit_page_sections_3").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_3').html(data);


                }
            });

        });

        $("#edit_page_sections_4").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_4').html(data);


                }
            });

        });

        $("#edit_page_sections_5").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_5').html(data);


                }
            });

        });

        $("#edit_page_sections_6").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_6').html(data);


                }
            });

        });

        $("#edit_page_sections_7").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_7').html(data);


                }
            });

        });

        $("#edit_page_sections_8").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_8').html(data);


                }
            });

        });

        $("#edit_page_sections_9").change(function() {
            var page_section = $(this).children("option:selected").val();
            //    alert(page_section);
            $.ajax({
                type: 'GET',
                url: 'page_section_id/' + page_section,
                success: function(data) {
                    console.log(data);
                    $('#edit_dependent_page_sections_9').html(data);


                }
            });

        });


    });


    $('#page_sections').change(function() {
        if ($(this).val() != '') {
            var select = $(this).attr("id");
            var value = $(this).val();

            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "services_by_id/" + value,
                method: "GET",
                success: function(result) {
                    console.log(result);
                    $('#dependent_page_sections').html(result);
                }

            })
        }

        if ($(this).val() == '#') {
            $('#dependent_page_sections').val('');
            $('#child_dependent_page_sections').val('');
        }

    });

    $('#dependent_page_sections').change(function() {
        if ($(this).val() != '') {
            var select = $(this).attr("id");
            var value = $(this).val();

            var dependent_page_sections = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "child_services_by_id/" + value,
                method: "GET",
                success: function(result) {
                    console.log(result);
                    $('#child_dependent_page_sections').html(result);
                }

            })
        }

    });
</script>

@endsection