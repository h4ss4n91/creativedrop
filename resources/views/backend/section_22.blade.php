<div class="tab-pane fade" id="account-vertical-section_22" role="tabpanel" aria-labelledby="account-pill-section_22" aria-expanded="false">
    <div class="media">
        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
            Two Headings with Video or Image and Title
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <img style="width:100%" src="{{asset('public/page_sections/Two_headings_withButton.png')}}" />
        </div>
        <div class="col-md-6">
            <form method="POST" action="{{url('admin/store_section_22')}}" enctype="multipart/form-data">
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
                                <label for="account-username">First Heading </label>
                                <input type="text" name="heading_1" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">Second Heading </label>
                                <input type="text" name="heading_2" class="form-control" id="account-username" data-validation-required-message="This username field is required">
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

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">Video Link</label>
                                <input type="text" name="video" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">Text</label>
                                <input type="text" name="text" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>





                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                            Section 22</button>
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
                <th>Frist Heading</th>
                <th>Second Heading</th>
                <th>Image</th>
                <th>Video</th>
                <th>Text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($section_22 as $row_section_22)
            <tr>
                <td>{{$row_section_22->name}}</td>

                <td>{{$row_section_22->heading_1}}</td>
                <td>{{$row_section_22->heading_2}}</td>
                <td>

                    @if(!empty($row_section_22->image))
                    <img style="width:100px" src="{{asset('public/section_22/'.$row_section_22->image)}}" /> @endif

                </td>

                <td>{{$row_section_22->video}}</td>
                <td>{{$row_section_22->text}}</td>
                <td>

                    <a data-toggle="modal" data-target="#section_22_ModalCenter{{$row_section_22->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a> |
                    <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_section_22/'.$row_section_22->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="section_22_ModalCenter{{$row_section_22->id}}" tabindex="-1" role="dialog" aria-labelledby="section_22_ModalCenter{{$row_section_22->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="section_22_ModalLongTitle">{{$row_section_22->heading_1}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('admin/edit_section_22')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row_section_22->id}}" name="id">

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
                                                        <input type="text" name="name" class="form-control" value="{{$row_section_22->name}}" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">First Heading </label>
                                                        <input type="text" name="heading_1" class="form-control" value="{{$row_section_22->heading_1}}" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Second Heading </label>
                                                        <input type="text" name="heading_2" class="form-control" id="account-username" value="{{$row_section_22->heading_2}}" data-validation-required-message="This username field is required">
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

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Video Link</label>
                                                        <input type="text" name="video" class="form-control" value="{{$row_section_22->video}}" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Text</label>
                                                        <input type="text" name="text" class="form-control" value="{{$row_section_22->text}}" id="account-username" data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Section 22</button>
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
                <th>Frist Heading</th>
                <th>Second Heading</th>
                <th>Image</th>
                <th>Video</th>
                <th>Text</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>


</div>