<div class="tab-pane fade" id="account-vertical-news" role="tabpanel" aria-labelledby="account-pill-news" aria-expanded="false">
    <div class="media">
        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
            News & Opinions
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-6">

            <form method="POST" action="{{url('admin/store_news')}}" enctype="multipart/form-data">
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
                                <label for="account-username">News Title</label>
                                <input type="text" name="news_title" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">News Short Description</label>
                                <input type="text" name="news_short_description" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">News Image</label>
                                <input type="file" name="news_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">Link</label>
                                <input type="text" name="link" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create News and Opinions </button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="col-6">
            <img style="width:100%" src="{{asset('public/page_sections/new_and_opinions.png')}}" />
        </div>

    </div>

    <hr />
    <table class="table table-striped table-bordered dom-jQuery-events">
        <thead>
            <tr>
                <th>News Title</th>
                <th>News Image</th>
                <th>Short Description</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $row_news)
            <tr>
                <td>
                    {{$row_news->title}}
                </td>
                <td>
                    <img style="width:100px;" src="{{asset('public/news_and_opinions/'.$row_news->image)}}" />
                </td>
                <td>
                    {{$row_news->description}}
                </td>
                <td>
                    {{$row_news->link}}
                </td>
                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_news/'.$row_news->id)}}"> <i class="fa fa-trash-o admin-delete text-danger"></i></a> | <a data-toggle="modal" data-target="#newsModalCenter{{$row_news->id}}"> <i class="fa fa-pencil-square-o admin-edit"></i></a>
                    <div class="modal fade" id="newsModalCenter{{$row_news->id}}" tabindex="-1" role="dialog" aria-labelledby="newsModalCenter{{$row_news->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Testing</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('admin/edit_news')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row_news->id}}" name="id">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-8">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">News and Opinions Image</label>
                                                            <input type="file" name="news_image" class="form-control" id="account-username" data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-4">
                                                <img style="width:100px" src="{{asset('public/news_and_opinions/'.$row_news->image)}}" />
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">News Title</label>
                                                        <input type="text" value={{$row_news->title}} name="news_title" class="form-control" id="account-username" required data-validation-required-message="This
                                                        username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">News Short Description</label>
                                                        <input type="text" name="news_short_description" value="{{$row_news->description}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username"> Button Link</label>
                                                        <input type="text" name="link" value="{{$row_news->link}}" class="form-control" id="account-username" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Slider</button>
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
                <th>News Title</th>
                <th>News Image</th>
                <th>Short Description</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>