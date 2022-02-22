<div class="tab-pane fade" id="account-vertical-style_4" role="tabpanel" aria-labelledby="account-pill-style_4" aria-expanded="false">
    <div class="media">
        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
            Paragraph with Button
        </div>
    </div>
    <hr />

    <div class="row">
        <div class="col-6">

            <form method="POST" action="{{url('admin/store_para_style_4')}}" enctype="multipart/form-data">
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
                    </div>



                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Paragraph style 4 </button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="col-6">
            <img style="width:100%" src="{{asset('public/page_sections/paragraph_with_button.png')}}" />
        </div>

    </div>

    <hr />
    <table class="table table-striped table-bordered dom-jQuery-events">
        <thead>
            <tr>
                <th>Page Section</th>
                <th>Text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($para_style_4 as $row_para_style_4)
            <tr>

                <td>
                    {{$row_para_style_4->name}}
                </td>

                <td>
                    {{$row_para_style_4->title}}
                </td>

                </td>
                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_4/'.$row_para_style_4->id)}}"><i class="fa fa-trash-o admin-delete text-danger"></i> </a> | <a data-toggle="modal" data-target="#para_style_4_ModalCenter{{$row_para_style_4->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                    <div class="modal fade" id="para_style_4_ModalCenter{{$row_para_style_4->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_4_ModalCenter{{$row_para_style_4->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_4->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('admin/edit_para_style_4')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row_para_style_4->id}}" name="id">

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
                                                        <input type="text" name="name" value="{{$row_para_style_4->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Title</label>
                                                        <input type="text" name="title" value="{{$row_para_style_4->title}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Text</label>
                                                        <input type="text" name="paragraph" value="{{$row_para_style_4->title}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Para Style 4</button>
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
                <th>Text</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>


</div>