<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
    .disabled {
        pointer-events: none;
        cursor: default;
    }
    .vertical-text {
    	 -moz-transform: rotate(-90deg);
         -webkit-transform: rotate(-90deg);
}
</style>

</head>
<body class="text-center">

	 <div class="col-md-12">	

	 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-3">
	 		 	
	 	<table style="font-size:10px;" class="table  mt-5">
	 		<tr class="border-0">

	 			<td class="border-0">&nbsp; &nbsp;</td>
	 			<td class="border-0">&nbsp; &nbsp;</td>
	 			
	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'OM' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a data-toggle="confirmation" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">&nbsp;&nbsp;&nbsp;</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'NG' && $oms->row == '1' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0"></td>
	 			<td class="border-0"></td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'R' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td class="text-center border-0	" rowspan="2">Exit</td>
	 			<td class="bg-info text-info">Sec</td>
	 			<td class="text-center border-0	" rowspan="2">Entrance</td>
	 			<td class="bg-info text-info">Zts</td>


	 		</tr>

	 		<tr class="border-0">

	 			<td class="border-0">&nbsp; &nbsp;</td>
	 			<td class="border-0">&nbsp; &nbsp;</td>
	 			
	 			<td class="text-center border-0" rowspan='2' colspan='8'>
	 				<h6>TOLERANCE <br><small>UNDERSTANDING</small><br><small>COEXISTENCE</small><br><sup><small>OMAN'S MESSAGE OF ISLAM</small></sup></h6>
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'NG' && $oms->row == '2' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0" colspan='13' >
	 				
	 			</td>
	 			<td class="bg-info"></td>

	 		</tr>

	 		<tr>

	 			<td class="border-0">&nbsp; &nbsp;</td>
	 			<td class="border-0">&nbsp; &nbsp;</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'NG' && $oms->row == '3' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0 text-center pt-4" rowspan='1' colspan='13' >
	 				<span><b>PLATINUM <br> SPONSOR</b></span>
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'EA' && $oms->row == '3' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 		</tr>

	 		<tr>
	 			
	 			<td colspan="13" class="border-0">
	 				
	 			</td>
	 			<td colspan="13" class="border-0 text-right">
	 				RTD(Rwanda)
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'EA' && $oms->row == '4' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 		</tr>

	 		<!--Row 5 -->
	 		<tr>
	 			
	 			<td colspan='10' class="border-0"></td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'AC5' && $oms->row == '5' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'AC6' && $oms->row == '5' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 					<td class="align-middle d-inline border-0">

	 					@foreach( $om as $oms )
            
		            	  @if( $oms->category == 'TC' && $oms->row == '5' )


			 				<small  <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
			 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

			 						{!! $oms->title !!}

			 					</a></small>

			 			  @endif

			 			@endforeach

			 			</td>

			 			<td rowspan="1" class="border-0 vertical-text">
			 			</td>

			 			<td rowspan="3" colspan="2">
			 				GOLD & SILVER
			 				SPONSORS
			 			</td>

			 	@foreach( $om as $oms )
            
            	  @if( $oms->category == 'S' && $oms->row == '5' )

	 				<td colspan="2" rowspan="1" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="5" class="border-0 text-right">
	 				KTB(Kenya)
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'EA' && $oms->row == '5' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 		</tr>

	 		<!--Row 6 -->
	 		<tr>
	 			
	 			<td colspan='10' class="border-0"></td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'AC3' && $oms->row == '6' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'AC4' && $oms->row == '6' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 					<td class="align-middle d-inline border-0">

	 					@foreach( $om as $oms )
            
		            	  @if( $oms->category == 'TC' && $oms->row == '6' )


			 				<small  <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
			 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

			 						{!! $oms->title !!}

			 					</a></small>

			 			  @endif

			 			@endforeach

			 			</td>

			 			<td colspan='2'>
			 				
			 			</td>


			 	@foreach( $om as $oms )
            
            	  @if( $oms->category == 'S' && $oms->row == '6' )

	 				<td colspan="2" rowspan="1" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="5" class="text-right border-0">
	 				UTB(Uganda)
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'EA' && $oms->row == '6' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 		</tr>

	 		<!-- Row 7 -->
	 		<tr>
	 			
	 			<td colspan='10' class="border-0"></td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'AC1' && $oms->row == '7' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'AC2' && $oms->row == '7' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 					<td class="align-middle d-inline border-0">

	 					@foreach( $om as $oms )
            
		            	  @if( $oms->category == 'TC' && $oms->row == '7' )


			 				<small  <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
			 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

			 						{!! $oms->title !!}

			 					</a></small>

			 			  @endif

			 			@endforeach

			 			</td>

			 			<td rowspan="3" class="border-0 vertical-text">
			 				
			 			</td>

			 	@foreach( $om as $oms )
            
            	  @if( $oms->category == 'S' && $oms->row == '7' )

	 				<td colspan="2" rowspan="2" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="5" class="text-right border-0">
	 				MTA(Mozambique)
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'EA' && $oms->row == '7' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 		</tr>

	 		<!-- Row 8 -->
	 		<tr>
	 			<td colspan="26" class="border-0 text-right">
	 				CTB(Cameron)
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'EA' && $oms->row == '8' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 		</tr>

	 		<tr>
	 			
	 			<td colspan="10" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'M4' && $oms->row == '8' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0"></td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'M1' || $oms->title == 'M7' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="13" class="border-0">
	 				
	 			</td>

	 		</tr>

	 		<!-- Row 9-->
	 		<tr>
	 			
	 			<td colspan="10" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'M5' && $oms->row == '9' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0"></td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'M2' || $oms->title == 'M8' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="13" class="border-0">
	 				
	 			</td>

	 		</tr>

	 		<tr>
	 			
	 			<td colspan="10" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'M6' && $oms->row == '10' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0"></td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'M3' && $oms->row == '10' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="13" class="border-0">
	 				
	 			</td>

	 		</tr>

	 		<!-- Row 11 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H1' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="4">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E1' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'P' && $oms->row == '11' )

	 				<td colspan="2" rowspan="2" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '11' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="4" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '11' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 12 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H2' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '12')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E2' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	

	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '12' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '12' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '12' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 13 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H3' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '13')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E3' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'P2' )

	 				<td colspan="2" rowspan="2" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	

	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '13' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '13' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '13' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 14 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H4' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '14')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E4' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	



	 			<td class="border-0" colspan="3">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'AF' )

	 				<td colspan="3" rowspan="2" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	

	 			<td class="border-0" colspan="3">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '14' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '14' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '14' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 15 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H5' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '15')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E5' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'P3' )

	 				<td colspan="2" rowspan="2" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	



	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '15' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '15' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '15' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 16 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H6' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '16')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E6' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '16' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '16' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '16' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 17 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H7' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '17')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E7' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'P4' )

	 				<td colspan="2" rowspan="2" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '17' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '17' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '17' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 18 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H8' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="3">
	 				
	 			</td>


	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E8' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '18' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="4" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '18' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>
	 		<!-- Row 19 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H9' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="3">
	 				
	 			</td>


	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E9' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach


	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'P5' )

	 				<td colspan="2" rowspan="2" <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '19' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="4" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '19' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 20 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H10' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '20')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E10' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="9">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '20' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '20' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '20' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 21 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H11' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '21')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E11' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="12">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '21' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '21' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '21' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 22 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H12' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '22')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E12' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="12">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '22' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '22' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '22' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 23 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H13' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '23')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E13' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="12">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '23' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '23' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '23' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 24 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H14' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '24')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E14' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="12">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '24' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '24' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '24' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 25 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H15' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '25')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E15' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="12">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '25' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="1" class="border-0">
	 				
	 			</td>


	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'CB' && $oms->row == '25' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach


	 			<td colspan="1" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '25' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>

	 		<!-- Row 25 -->
	 		<tr>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'H16' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td colspan="3">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'GF' && $oms->row == '26')

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach

	 			<td class="border-0">
	 				
	 			</td>



	 			@foreach( $om as $oms )
            
            	  @if( $oms->title == 'E16' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >

	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!}

	 					</a>
	 				</td>

	 			  @endif

	 			@endforeach	


	 			<td class="border-0" colspan="12">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'LD' && $oms->row == '26' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach

	 			<td colspan="4" class="border-0">
	 				
	 			</td>

	 			@foreach( $om as $oms )
            
            	  @if( $oms->category == 'A' && $oms->row == '26' )

	 				<td <?php if( $oms->status == 'Paid'){ echo "class='bg-danger border border-light' data-toggle='tooltip' title='Claimed!'"; } else if( $oms->status == 'Pending'){ echo "class='bg-warning border border-light' data-toggle='tooltip' title='Pending Registration!'"; } else { echo "class='bg-success border border-light'"; }  ?> >
	 					<a onclick="return confirm('Are you sure?')" <?php if( $oms->status == 'Paid' || $oms->status == 'Pending'){ echo "class='disabled text-light'"; } else {echo "class='text-dark'";}  ?> href="{{route('get_space', ['id' => $oms->id ])}}">

	 						{!! $oms->title !!} <br>

	 						{!! $oms->sub_title !!}

	 					</a></td>

	 			  @endif

	 			@endforeach
	 			
	 		</tr>
	 		
	 	</table>

	 	</div> 		

	 </div>



</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-confirmation2/dist/bootstrap-confirmation.js" type="text/javascript"></script>

</html>