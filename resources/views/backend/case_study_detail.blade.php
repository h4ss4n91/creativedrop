@extends('layouts.backend')


@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

<div class="app-content container center-layout mt-2">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
          <!-- ALERTS -->
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Case Study <strong>{{$case_study[0]->title}}</strong></h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a></li>
                <li class="breadcrumb-item">{{$case_study[0]->title}}</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
          <div class="media width-250 float-right">
            <div class="media-left media-middle">
              <div id="sp-bar-total-sales"><canvas width="152" height="30" style="display: inline-block; width: 152px; height: 30px; vertical-align: top;"></canvas></div>
            </div>
            <div class="media-body media-right text-right">
              <h3 class="m-0">&nbsp;</h3><span class="text-muted">Case Study</span>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- Description -->
        <div class="card">
        <div style="background-color:teal" class="card-header">
            <h4 style="color:#fff;" class="card-title"><strong>{{$case_study[0]->title}}</strong></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                            @if ($success_message = Session::get('success_message'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $success_message }}</strong>
                                </div>
                            @endif
                            @if ($delete_message = Session::get('delete_message'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $delete_message }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="card-text">
                            <p><strong>Title:</strong> {{$case_study[0]->title}}</p>
                            <p><strong>Short Description:</strong> {{$case_study[0]->short_description}}</p>
                            <p><strong>Services:</strong> @foreach($case_study_services as $row_case_study_services) {{$row_case_study_services->menu_name}}, @endforeach </p>
                            <p><strong>Sub Services:</strong> @foreach($case_study_sub_services as $row_case_study_sub_services) {{$row_case_study_sub_services->item_name}}, @endforeach</p>
                            <p><strong>Industries:</strong> @foreach($case_study_industries as $row_case_study_industries) {{$row_case_study_industries->title}}, @endforeach</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-text">
                            <a style="float:right;" data-toggle="modal" data-target="#caseStudyModalCenter{{$case_study[0]->id}}"> Edit</a>
                            <img style="width:50%" src="{{asset('public/case_study/'.$case_study[0]->image)}}" />
                        </div>
                                                            <div class="modal fade" id="caseStudyModalCenter{{$case_study[0]->id}}" tabindex="-1" role="dialog" aria-labelledby="caseStudyModalCenter{{$case_study[0]->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">Testing</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_case_study')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$case_study[0]->id}}" name="id">

                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Case Study Name</label>
                                                                                                    <input type="text" name="name" class="form-control" value="{{$case_study[0]->name}}" id="account-username">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-8">

                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Case Study Image</label>
                                                                                                    <input type="file" name="case_study_image" class="form-control" id="account-username"  data-validation-required-message="This username field is required">
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="col-4">
                                                                                            <img style="width:100px" src="{{asset('public/case_study/'.$case_study[0]->image)}}" />
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Title</label>
                                                                                                    <input type="text" name="title" value="{{$case_study[0]->title}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="controls">
                                                                                                    <label for="account-username">Short Description</label>
                                                                                                    <input type="text" name="short_description" value="{{$case_study[0]->short_description}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                
                                                                                                <div class="container pt-4">
                                                                                                    <button class="btn btn-md btn-warning" id="edit_caseStudyServicesaddBtn" type="button"> Edit Case Study Services </button>
                                                                                                    <div class="table-responsive">
                                                                                                        <table class="table table-bordered">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th class="text-center">Service</th>
                                                                                                                    <th class="text-center">Sub Category</th>
                                                                                                                    <th class="text-center"></th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody id="edit_caseStudyServicestbody">
                                                                                                                @foreach($cs_services as $row_case_study_services) 
                                                                                                                
                                                                                                                <tr>
                                                                                                                    <td class="row-index text-center">
                                                                                                                            {{$row_case_study_services->menu_name}}
                                                                                                                    </td>

                                                                                                                    <td class="row-index text-center">
                                                                                                                        {{$row_case_study_services->menu_name}}
                                                                                                                    </td>

                                                                                                                    <td class="text-center"><button class="btn btn-danger remove" type="button">x</button></td>
                                                                                                                </tr>

                                                                                                                
                                                                                                                
                                                                                                                @endforeach
                                                                                                                
                                
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                
                                                                                            <div class="col-12">
                                
                                                                                                <div class="container pt-4">
                                                                                                    <button class="btn btn-md btn-success" id="edit_caseStudyIndustryaddBtn" type="button"> Edit Case Study Industries </button>
                                                                                                    <div class="table-responsive">
                                                                                                        <table class="table table-bordered">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th class="text-center">Industry</th>
                                                                                                                    <th class="text-center"></th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody id="edit_caseStudyIndustrytbody">
                                                                                                                @foreach($case_study_industries as $row_case_study_services) 
                                                                                                                
                                                                                                                <tr>
                                                                                                                    <td class="row-index text-center">
                                                                                                                            {{$row_case_study_services->title}}
                                                                                                                    </td>
                                                                                                                    


                                                                                                                    <td class="text-center"><button class="btn btn-danger remove" type="button">x</button></td>
                                                                                                                </tr>

                                                                                                                
                                                                                                                
                                                                                                                @endforeach
                                
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>


                                                                                    
                                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Case Study</button>
                                                                                        <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
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
        </div>
        
        <div class="card">
            <div style="background-color:teal" class="card-header">
                <h4 style="color:#fff" class="card-title">Add New Content in Case Study </h4>
            </div>
            <div class="card-content">
                <form method="POST" action="{{url('admin/add_case_study_content')}}" enctype="multipart/form-data">
                    @csrf
                    <input name="case_study_id" type="hidden" value="{{$case_study[0]->id}}"/>
                <div class="card-body">
                    <div class="col-12">
            
                        <div class="container pt-0">
                            <button class="btn btn-md btn-primary" id="edit_caseStudyaddBtn" type="button"> Add Case Study Content </button>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Image Style</th>
                                            <th class="text-center">Video</th>
                                            <th class="text-center">Video Style</th>
                                            <th class="text-center">Video Background</th>
                                        </tr>
                                    </thead>
                                    <tbody id="edit_caseStudytbody">
            
                                    </tbody>
                                </table>
                            </div>
            
                        </div>
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Add Case Study Content</button>
                        </div>
                    </div>
                </div>

            </form>
            </div>
        </div>

            <div class="card">
            <div style="background-color:teal" class="card-header">
                <h4 style="color:#fff" class="card-title">Case Study Detail</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Video</th>
                                        <th>Video Background</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($case_study_detail as $row_case_study_detail)
                                        <tr>
                                            <td>
                                                @if($row_case_study_detail->image != NULL)
                                                    <img style="width:200px" src="{{asset('public/case_study_content/'.$row_case_study_detail->image)}}" />
                                                @endif
                                            </td>
                                            <td>
                                                @if($row_case_study_detail->video_link != NULL)
                                                    <iframe width="200" height="200" src="{{$row_case_study_detail->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                @endif
                                            </td>
                                            <td>
                                                @if($row_case_study_detail->video_background != NULL)
                                                <img style="width:200px" src="{{asset('public/case_study_video_background/'.$row_case_study_detail->video_background)}}" />
                                                @endif
                                            </td>
                                            <td>
                                                    <a href="{{url('admin/delete_case_study_content/'.$row_case_study_detail->id)}}"> Delete </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

      </div>
    </div>
  </div>

@endsection