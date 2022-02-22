
                                        <div class="tab-pane fade" id="account-vertical-section_20" role="tabpanel" aria-labelledby="account-pill-section_20" aria-expanded="false">
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                                    Background Image with Heading
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-6">
                                                    <form method="POST" action="{{url('admin/store_section_20')}}" enctype="multipart/form-data">
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
                                                                        <input type="text" name="name" class="form-control" id="account-username" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">First Heading </label>
                                                                        <input type="text" name="heading_1" class="form-control" id="account-username" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Second Heading</label>
                                                                        <input type="text" name="heading_2" class="form-control" id="account-username" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Button Class</label>
                                                                        <select class="form-control" name="btn_class">
                                                                                <option value="btn web-btn web-btn-blue mt-3">btn web-btn web-btn-blue mt-3</option>
                                                                                <option value="web-h5 text-white mb-0">web-h5 text-white mb-0</option>
                                                                            </select>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Button Label</label>
                                                                        <input type="text" name="btn_label" class="form-control" id="account-username" required>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Section 20 </button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>

                                                <div class="col-6">
                                                    <img style="width:100%" src="{{asset('public/page_sections/agency.png')}}" />
                                                </div>

                                            </div>

                                            <hr />
                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <th>Section Name</th>
                                                        <th>First Heading</th>
                                                        <th>Second Heading</th>
                                                        <th>Button Label</th>
                                                        <th>Button Class</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($section_20 as $row_section_20)
                                                    <tr>
                                                        <td>
                                                            {{$row_section_20->name}}
                                                        </td>
                                                        <td>
                                                            {{$row_section_20->heading_1}}
                                                        </td>
                                                        <td>
                                                            {{$row_section_20->heading_2}}
                                                        </td>
                                                        <td>
                                                            {{$row_section_20->btn_label}}
                                                        </td>
                                                        <td>
                                                            {{$row_section_20->btn_class}}
                                                        </td>
                                                        </td>
                                                        <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_20/'.$row_section_20->id)}}"><i class="fa fa-trash-o admin-delete text-danger"></i> </a> | <a data-toggle="modal" data-target="#row_section_20_ModalCenter{{$row_section_20->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                                                            <div class="modal fade" id="row_section_20_ModalCenter{{$row_section_20->id}}" tabindex="-1" role="dialog" aria-labelledby="row_section_20_ModalCenter{{$row_section_20->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_20->name}}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_section_20')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$row_section_20->id}}" name="id">

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
                                                                                                <input type="text" name="name" value="{{$row_section_20->name}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">First Heading</label>
                                                                                                <input type="text" name="heading_1" value="{{$row_section_20->heading_1}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Second Heading</label>
                                                                                                <input type="text" name="heading_2" value="{{$row_section_20->heading_2}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Button Label</label>
                                                                                                <input type="text" name="btn_label" value="{{$row_section_20->btn_label}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Button Class</label>
                                                                                                <input type="text" name="btn_class" value="{{$row_section_20->btn_class}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Section 20</button>
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
                                                        <th>Padding Top</th>
                                                        <th>Padding Bottom</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>


                                        </div>