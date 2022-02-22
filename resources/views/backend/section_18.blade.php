<div class="tab-pane fade" id="account-vertical-section_18" role="tabpanel" aria-labelledby="account-pill-section_18" aria-expanded="false">
    <div class="media">
        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
            Section 18
        </div>
    </div>
    <hr />

    <div class="row">
        <div class="col-6">

            <form method="POST" action="{{url('admin/store_section_18')}}" enctype="multipart/form-data">
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
                                <label for="account-username">Heading One</label>
                                <input type="text" name="headingone" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">Heading Two</label>
                                <input type="text" name="headingtwo" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>



                    <div class="col-12">

                        <div class="container pt-4">
                            <button class="btn btn-md btn-primary" id="section_18_addBtn" type="button"> Add Section 18 </button>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Logo Image</th>
                                            <th class="text-center">Remove Row</th>
                                        </tr>
                                    </thead>
                                    <tbody id="section_18_tbody">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Section 18 </button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="col-6">
            <img style="width:100%" src="{{asset('public/page_sections/section_18.png')}}" />
        </div>
    </div>

    <hr />
    <table class="table table-striped table-bordered dom-jQuery-events">
        <thead>
            <tr>
                <th>Section Name</th>
                <th>Heading 1</th>
                <th>Heading 2</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($section_18 as $row_section_18)
            <tr>
                <td>
                    {{$row_section_18->name}}
                </td>
                <td>
                    {{$row_section_18->headingone}}
                </td>
                <td>
                    {{$row_section_18->headingtwo}}
                </td>
                <td style="width:200px;">
                    <img style="width:250px;" src="{{asset('public/section_18/'.$row_section_18->image)}}" />

                </td>

                </td>
                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_18/'.$row_section_18->id)}}"><i class="fa fa-trash-o admin-delete text-danger"></i> </a> | <a data-toggle="modal" data-target="#row_section_18_ModalCenter{{$row_section_18->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                    <div class="modal fade" id="row_section_18_ModalCenter{{$row_section_18->id}}" tabindex="-1" role="dialog" aria-labelledby="row_section_18_ModalCenter{{$row_section_18->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_18->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('admin/edit_section_18')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row_section_18->id}}" name="id">

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
                                                        <input type="text" name="name" value="{{$row_section_18->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Heading One</label>
                                                        <input type="text" name="headingone" value="{{$row_section_18->headingone}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Heading Two</label>
                                                        <input type="text" name="headingtwo" value="{{$row_section_18->headingtwo}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Image</label>
                                                        <input type="file" name="image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Section 18</button>
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