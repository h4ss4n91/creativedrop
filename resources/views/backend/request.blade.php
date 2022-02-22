<div class="tab-pane fade" id="account-vertical-request" role="tabpanel" aria-labelledby="account-pill-request" aria-expanded="false">
    <div class="media">
        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
            Request a Meeting
        </div>
    </div>
    <hr />

    <div class="row">
        <div class="col-6">
            <form method="POST" action="{{url('admin/store_request')}}" enctype="multipart/form-data">
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
                                <select id="request_style" name="style" class="form-control">
                                    <option value=""> --- Select Style --- </option>
                                    <option value="style1"> Style 1</option>
                                    <option value="style2"> Style 2</option>
                                    <option value="style3"> Style 3</option>
                                    <option value="style4"> Style 4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        

                        <div class="container pt-4">
                            <button class="btn btn-md btn-primary" id="requestaddBtn" type="button"> Add Request Meeting </button>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Button Label</th>
                                            <th class="text-center">Remove Row</th>
                                        </tr>
                                    </thead>
                                    <tbody id="requesttbody">
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Request a Meeting </button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-6">
            <div class="col-6">
                <div id="request_style_content">
                </div>
            </div>
        </div>
    </div>

    <hr />
    <table class="table table-striped table-bordered dom-jQuery-events">
        <thead>
            <tr>
                <th>Section Name</th>
                <th>Request A Meeting Title</th>
                <th>Button Label</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($request as $row_request)
            <tr>
                <td>
                    {{$row_request->name}} - {{$row_request->style}}
                </td>
                <td>
                    {{$row_request->title}}
                </td>
                <td>
                    {{$row_request->btn_label}}
                </td>
                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_request/'.$row_request->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a> | <a data-toggle="modal" data-target="#requestModalCenter{{$row_request->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                    <div class="modal fade" id="requestModalCenter{{$row_request->id}}" tabindex="-1" role="dialog" aria-labelledby="requestModalCenter{{$row_request->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_request->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('admin/edit_request')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row_request->id}}" name="id">

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
                                                        <input type="text" name="name" value="{{$row_request->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Select Style </label>
                                                        <select name="style" class="form-control">
                                                            <option value="{{$row_request->style}}"> {{$row_request->style}}</option>
                                                            <option value="style1"> Style 1</option>
                                                            <option value="style2"> Style 2</option>
                                                            <option value="style3"> Style 3</option>
                                                            <option value="style4"> Style 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Button Label</label>
                                                        <input type="text" name="button_label" value="{{$row_request->btn_label}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Title</label>
                                                        <input type="text" name="title" value="{{$row_request->title}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Request a Meeting</button>
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
                <th>Request A Meeting Title</th>
                <th>Button Label</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>