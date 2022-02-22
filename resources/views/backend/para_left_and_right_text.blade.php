<div class="tab-pane fade" id="account-vertical-style_5" role="tabpanel" aria-labelledby="account-pill-style_5" aria-expanded="false">
    <div class="media">
        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
            Paragraph with main heading left right text
        </div>
    </div>
    <hr />

    <div class="row">
        <div class="col-12">

            <form method="POST" action="{{url('admin/store_para_style_5')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">

                            </div>
                        </div>
                    </div>

                    <div class="col-6">
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
                                    <select id="para_style_5_style" name="style" class="form-control">
                                        <option value=""> --- Select Style --- </option>
                                        <option value="style1"> Style 1</option>
                                        <option value="style2"> Style 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div id="para_style_5_style_content"> </div>
                    </div>


                    <div class="col-12">

                        <div class="container pt-4">
                            <button class="btn btn-md btn-primary" id="paraStyleFiveaddBtn" type="button"> Add Para Style Five </button>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Heading Size</th>
                                            <th class="text-center">Heading</th>
                                            <th class="text-center">Text Left</th>
                                            <th class="text-center">Text Right</th>
                                            <th class="text-center">Remove Row</th>
                                        </tr>
                                    </thead>
                                    <tbody id="paraStyleFivetbody">

                                    </tbody>
                                </table>
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

    <hr />
    <table class="table table-striped table-bordered dom-jQuery-events">
        <thead>
            <tr>

                <th>Section Name</th>
                <th>Heading Size</th>
                <th>Heading</th>
                <th>Text Left</th>
                <th>Text Right</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($para_style_5 as $row_para_style_5)
            <tr>
                <td>{{$row_para_style_5->name}} ({{$row_para_style_5->style}})</td>
                <td>
                    {{$row_para_style_5->heading_size}}
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

                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_5/'.$row_para_style_5->id)}}"><i class="fa fa-trash-o admin-delete text-danger"></i> </a> | <a data-toggle="modal" data-target="#para_style_5_ModalCenter{{$row_para_style_5->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                    <div class="modal fade" id="para_style_5_ModalCenter{{$row_para_style_5->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_5_ModalCenter{{$row_para_style_5->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_5->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('admin/edit_para_style_5')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row_para_style_5->id}}" name="id">

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
                                                        <input type="text" name="name" value="{{$row_para_style_5->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Select Style </label>
                                                        <select id="para_style_5_style" name="style" class="form-control">
                                                            <option value="{{$row_para_style_5->style}}"> {{$row_para_style_5->style}} </option>
                                                            <option value="style1"> Style 1</option>
                                                            <option value="style2"> Style 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Heading Size</label>
                                                        <select class="form-control" name="heading_size"> 
                                                            <option value="h1"> h1 </option> 
                                                            <option value="h2"> h2 </option>
                                                            <option value="h3"> h3 </option>
                                                            <option value="h4"> h4 </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Heading</label>
                                                        <input type="text" name="heading" value="{{$row_para_style_5->heading}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Paragraph Right</label>
                                                        <input type="text" name="text_right" value="{{$row_para_style_5->text_right}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Paragraph Left</label>
                                                        <input type="text" name="text_left" value="{{$row_para_style_5->text_left}}" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Para Style 5</button>
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

                <th>Image</th>
                <th>Title</th>
                <th>Paragraph</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>