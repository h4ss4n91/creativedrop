@extends('layouts.frontend')
@section('content')
@section('meta_description')@if(!$pages->isEmpty()){{$pages[0]->meta_desc}}@endif @endsection
@section('meta_keywords')@if(!$pages->isEmpty()){{$pages[0]->meta_keyword}}@endif @endsection


<section class="section-padtop-100">
</section>
<section>
    <div class="web-container-fluid cs-img">
        <section>
            <div class="design-banner-content w-100">
					<h5 class="web-h5">{{$case_study[0]->title}}</h5>
					<p class="p-14">Infographics, Company Profile &amp; Video</p>
				</div>
        </section>

        @foreach($case_study_content as $row_case_stdy)
            @if($row_case_stdy->image != NULL)
                <section class="{{$row_case_stdy->image_style}}">
                    <img src="{{asset('public/case_study_content/'.$row_case_stdy->image)}}" alt="{{$row_case_stdy->image_name}}" class="img-fluid">
                </section>
            @elseif($row_case_stdy->video_style == 'bg-white section-bg-white mt-0 pt-0')

                <section class="bg-white section-bg-white mt-0 pt-0">
                    <div class="recorded-video-resources">
                        <div class="video-resourc ai-challenge-video-resource">
                                <iframe src="{{$row_case_stdy->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>
            @else
            <section class="cs-yt-video">
                <!--Note for background image: Background image of video will be dynamic so user can change -->
                <div style="background-image: url({{asset('public/case_study_content_video_bg/'.$row_case_stdy->video_background)}});  background-repeat: no-repeat; background-size: cover;  background-position: center;">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-padtop-100 section-padbottom-100">
                        <div class="web-container">
                            <div class="video-resourc ai-challenge-video-resource">
                                <iframe src="{{$row_case_stdy->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                        </div>    
                    </div>
                </div>
            </section>
            @endif
            
        @endforeach

        
    </div>
</section>

    <div class="web-container-fluid">
        <section class="section-bg-black section-padtop-30 section-padbottom-30 web-border-radius-5">
            <div class="web-container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-content text-center">
                            <h4 class="web-h4 text-white">Meet our creative and expert team to assist you.</h4>
                            <a href="#" class="btn web-btn web-btn-blue mt-3" data-toggle="modal" data-target="#creativeModal">Let's meet now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection




    
       
    
        
        
    


