@extends('layouts.frontend')
@section('content')
@section('meta_description')@if(!$pages->isEmpty()){{$pages[0]->meta_desc}}@endif @endsection
@section('meta_keywords')@if(!$pages->isEmpty()){{$pages[0]->meta_keyword}}@endif @endsection
 
 <!-- BEGIN: Content-->
 
 @if(!$pages->isEmpty())

        
    @foreach($pages as $row_pages)
            @if( $row_pages->section_no == '1' )
                @foreach($page_section as $row_page_section)
                            @if($row_pages->section == $row_page_section->id)

                                @include('section')
                                

                            @endif
                @endforeach
            @endif

            @if( $row_pages->section_no == '2' )
                @foreach($page_section as $row_page_section)
                            @if($row_pages->section == $row_page_section->id)
                            
                                    @include('section')

                            @endif
                @endforeach
            @endif

            @if( $row_pages->section_no == '3' )
                @foreach($page_section as $row_page_section)
                            @if($row_pages->section == $row_page_section->id)
                            
                                    @include('section')

                            @endif
                @endforeach
            @endif

            @if( $row_pages->section_no == '4' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '5' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '6' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '7' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '8' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '9' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '10' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '11' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '12' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '13' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '14' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '15' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '16' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '17' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '18' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '19' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '20' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '21' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '22' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '23' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '24' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

        

    @endforeach



@endif


@if($pages->isEmpty())


<style>
        * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 60vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  line-height: 1.4;
  text-align: center;
}

.notfound .notfound-404 {
  position: relative;
  height: 240px;
}

.notfound .notfound-404 h1 {
  font-family: 'Montserrat', sans-serif;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  font-size: 252px;
  font-weight: 900;
  margin: 0px;
  color: #262626;
  text-transform: uppercase;
  letter-spacing: -40px;
  margin-left: -20px;
}

.notfound .notfound-404 h1>span {
  text-shadow: -8px 0px 0px #fff;
}

.notfound .notfound-404 h3 {
  font-family: 'Cabin', sans-serif;
  position: relative;
  font-size: 16px;
  font-weight: 700;
  text-transform: uppercase;
  color: #262626;
  margin: 0px;
  letter-spacing: 3px;
  padding-left: 6px;
}

.notfound h2 {
  font-family: 'Cabin', sans-serif;
  font-size: 20px;
  font-weight: 400;
  text-transform: uppercase;
  color: #000;
  margin-top: 0px;
  margin-bottom: 25px;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 200px;
  }
  .notfound .notfound-404 h1 {
    font-size: 200px;
  }
}

@media only screen and (max-width: 480px) {
  .notfound .notfound-404 {
    height: 162px;
  }
  .notfound .notfound-404 h1 {
    font-size: 162px;
    height: 150px;
    line-height: 162px;
  }
  .notfound h2 {
    font-size: 16px;
  }
}

        </style>
        <div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h3>Oops! Page not found</h3>
				<h1><span>4</span><span>0</span><span>4</span></h1>
			</div>
			<h2>we are sorry, but the page you requested was not found</h2>
		</div>
	</div>


@endif

@endsection




    
       
    
        
        
    


