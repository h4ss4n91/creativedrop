<div class="tab-pane fade " id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">

    <div class="media">

        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
            Create Clients and Partners
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-6">
            <form method="POST" action="{{url('admin/store_client_and_partner')}}" enctype="multipart/form-data">
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
                                <label for="account-username">Name Section</label>
                                <input type="text" name="name" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">

                        <div class="container pt-4">
                            <button class="btn btn-md btn-primary" id="clientaddBtn" type="button"> Add Client and Partner </button>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Client and Partner Image</th>
                                            <th class="text-center">Remove Row</th>
                                        </tr>
                                    </thead>
                                    <tbody id="clienttbody">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Client and Partner Image </button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="col-6">
            <img style="width:100%" src="{{asset('public/page_sections/client_and_partner.png')}}" />
        </div>

    </div>

    <hr />
    <table class="table table-striped table-bordered dom-jQuery-events">
        <thead>
            <tr>
                <th>Section Name</th>
                <th>Client and Parter Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientandpartnerimage as $row_clientandpartnerimage)
            <tr>
                <td>
                    {{$row_clientandpartnerimage->name}}
                </td>
                <td>
                    <img style="width:100px;" src="{{asset('public/client_and_partner/'.$row_clientandpartnerimage->image)}}" />
                </td>
                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_client_and_partner/'.$row_clientandpartnerimage->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a> | <a data-toggle="modal" data-target="#clientAndPartnerModalCenter{{$row_clientandpartnerimage->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                    <div class="modal fade" id="clientAndPartnerModalCenter{{$row_clientandpartnerimage->id}}" tabindex="-1" role="dialog" aria-labelledby="clientAndPartnerModalCenter{{$row_clientandpartnerimage->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Client and Partner</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('admin/edit_client_and_partner')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row_clientandpartnerimage->id}}" name="id">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-8">

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Client and Partner Image</label>
                                                        <input type="file" name="clientAndParter_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-4">
                                                <img style="width:100px" src="{{asset('public/client_and_partner/'.$row_clientandpartnerimage->image)}}" />
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username"> Button Link</label>
                                                        <input type="text" name="contact_button_link" value="{{$row_sliders->contact_button_link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Client and Partner</button>
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
                <th>Client and Parter Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>