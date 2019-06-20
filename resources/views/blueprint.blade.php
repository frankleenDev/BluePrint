@extends('home')

@section('content')


    <div style="font-size: 12px;" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      
      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 container">
        
          @foreach( $om as $oms )

            @if( $oms->category == 'OM' )
            
              <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 border">

                  {{ $oms->title }}
              </div>

            @endif

          @endforeach

      </div>

      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
      
      </div>

      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
      
      </div>

    </div>


@endsection