<div class="modal fade" id="sliderModalCenter{{$row_sliders->id}}" tabindex="-1" role="dialog" aria-labelledby="sliderModalCenter{{$row_sliders->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                    <div class="card modal-content">
                                                                        @php
                                                                            $slide = DB::table('sliders')->where('id','=',$row_sliders->id)->first();
                                                                        @endphp
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$slide->text1}}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="card-body modal-body">
                                                                            <form method="POST" action="{{url('admin/edit_slider')}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" value="{{$row_sliders->id}}" name="id">
                                                                                <input type="hidden" value="{{$row_sliders->name}}" name="name">
                                                                                <input type="hidden" value="{{$row_sliders->padding_bottom}}" name="padding_bottom">
                                                                                <input type="hidden" value="{{$row_sliders->padding_top}}" name="padding_top">

                                                                                <div class="row">
                                                                                    <div class="col-8">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                            
                                                                                                <label for="account-username">Slider Image : {{$slide->image}}</label>
                                                                                                <input type="file" name="slider_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-4">
                                                                                        <img style="width:100px" src="{{asset('public/slider/'.$slide->image)}}" />
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Status</label>
                                                                                                <input type="text" name="status" class="form-control" value="{{$slide->status}}" id="account-username" data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Heading One</label>
                                                                                                <input type="text" name="text1" class="form-control" value="{{$slide->text1}}" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Heading Two</label>
                                                                                                <input type="text" name="text2" value="{{$slide->text2}}" class="form-control" value="heading2" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username"> Button Link</label>
                                                                                                <input type="text" name="contact_button_link" value="{{$slide->contact_button_link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Slider</button>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>