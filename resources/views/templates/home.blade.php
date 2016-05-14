	@extends('templates.painel2')

	@section('content')
        
        

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>      
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{url('carousel/tomografia/tomo.gif')}}" alt="Tomografia 0" width="360" height="245">
      </div>

      <div class="item">
        <img src="{{url('carousel/tomografia/logo11.jpg')}}" alt="Tomografia 1" width="360" height="245">
      </div> 
    
      <div class="item">
        <img src="{{url('carousel/tomografia/logo5.jpg')}}" alt="Tomografia 2" width="360" height="245">
      </div>

      <div class="item">
        <img src="{{url('carousel/tomografia/logo12.jpg')}}" alt="Tomografia 3" width="360" height="245">
      </div>

      <div class="item">
        <img src="{{url('carousel/tomografia/logo9.jpg')}}" alt="Tomografia 4" width="360" height="245">
      </div>

      <div class="item">
        <img src="{{url('carousel/tomografia/logo2.jpg')}}" alt="Tomografia 5" width="360" height="245">
      </div>

      <div class="item">
        <img src="{{url('carousel/tomografia/tomo3.jpg')}}" alt="Tomografia 6" width="360" height="245">
      </div>

      <div class="item">
        <img src="{{url('carousel/tomografia/tomo4.jpg')}}" alt="Tomografia 7" width="360" height="245">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

	
	@endsection