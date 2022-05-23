<!-- View Modal -->
<div class="modal fade" id="viewsliderModalCenter{{$row_sliders->id}}" tabindex="-1" role="dialog" aria-labelledby="sliderModalCenter{{$row_sliders->id}}" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                                    <div class="card modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$row_sliders->text1}}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="card-header modal-body">
                                                                        <form method="POST" action="{{url('admin/store_slider')}}" enctype="multipart/form-data">
																												@csrf
																												<div class="row">
																													<div class="col-md-6">
																														<img style="width:100%" src="{{asset('public/page_sections/slider.png')}}" />
																													</div>
																													<div class="col-md-6">
																														<div class="col-md-12">
																																<div class="row">
																																	<div class="col-md-12">
																																		<div class="form-group">
																																			<div class="controls">
																																				<label for="account-username">Slider Name</label>
																																				<input type="text" name="name" class="form-control" id="account-username" value="{{$row_sliders->name}}">
																																			</div>
																																		</div>
																																	</div>
																																</div>
																															<div class="row">
                                                                                                                            <div class="col-6">
                                                                                                                                <div class="form-group">
                                                                                                                                    <div class="controls">
                                                                                                                                        <label for="account-username">Padding TOP  </label>
                                                                                                                                        <select name="padding_top" class="form-control">
                                                                                                                                            <option value="{{$row_sliders->padding_top}}">{{$row_sliders->padding_top}}</option>
                                                                                                                                            <option value="0"> 0 </option>
                                                                                                                                            <option value="30"> 30 </option>
                                                                                                                                            <option value="50"> 50 </option>
                                                                                                                                            <option value="70"> 70 </option>
                                                                                                                                            <option value="100"> 100 </option>
                                                                                                                                        </select>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>

                                                                                                                            <div class="col-6">
                                                                                                                                <div class="form-group">
                                                                                                                                    <div class="controls">
                                                                                                                                        <label for="account-username">Padding BOTTOM  </label>
                                                                                                                                        <select name="padding_bottom" class="form-control">
                                                                                                                                        <option value="{{$row_sliders->padding_bottom}}">{{$row_sliders->padding_bottom}}</option>
                                                                                                                                            <option value="0"> 0 </option>
                                                                                                                                            <option value="30"> 30 </option>
                                                                                                                                            <option value="50"> 50 </option>
                                                                                                                                            <option value="70"> 70 </option>
                                                                                                                                            <option value="100"> 100 </option>
                                                                                                                                        </select>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
																															</div>
																														</div>
																													</div>
																												</div>
																												<div class="row">
																													<div class="col-md-12">
																														
																														<div class="container pt-4">
																															<button class="btn btn-md btn-primary" id="slideraddBtn" type="button"> Add new Slider Row </button>
																															<div class="table-responsive">
																																<table class="table table-bordered">
																																	<thead>
																																		<tr>
																																			<th class="text-center">Slider Image</th>
																																			<th class="text-center">Heading 1</th>
																																			<th class="text-center">Heading 2</th>
																																			<th class="text-center">Button Link</th>
																																			<th class="text-center">Button Style</th>
																																			<th class="text-center">Status</th>
																																			<th class="text-center">Remove Row</th>
																																		</tr>
																																	</thead>
																																	<tbody id="slidertbody">
                                                                                                                                        @php
                                                                                                                                            $content = DB::table('sliders')->where('name','=',$row_sliders->name)->get();
                                                                                                                                        @endphp
                                                                                                                                        @foreach($content as $row_content)
                                                                                                                                        <tr>
																																			<td class="text-center">Slider Image</td>
																																			<td class="text-center">{{$row_content->text1}}</td>
																																			<td class="text-center">{{$row_content->text2}}</td>
																																			<td class="text-center">{{$row_content->contact_button_link}}</td>
																																			<td class="text-center">{{$row_content->style}}</td>
																																			<td class="text-center">{{$row_content->status}}</td>
																																			<td class="text-center"><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#sliderModalCenter{{$row_sliders->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a> </td>
																																		</tr>
                                                                                                                                        @endforeach
                                                                                                                                        



																																	</tbody>
																																</table>
																															</div>

																														</div>
																													</div>


																													<div class="col-md-12 d-flex flex-sm-row flex-column justify-content-end">
																														<!-- <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Save</button> -->
																														
																													</div>
																												</div>
																											</form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>