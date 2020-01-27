@extends('layouts.app')
@section('content') 
  <div class="col-md-8">
  	@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class=" table table-bordered">
    	<thead>
    		<tr>
    			<th>Design</th>
    			<th>Project Location</th>
    			<th>Project State</th>
    			<th>Mortgage</th>
    		</tr>
    	</thead>
    	<tbody>
    		@if(!empty($loan_app) && $loan_app->count())
    		   @foreach($loan_app as $loan)
				<tr>
					<td>{{ $loan['design_type'] }}</td>
					<td>{{ $loan['project_location'] }}</td>
					<td>{{ $loan['project_state'] }}</td>
					<td>{{ $loan['mortgage_bank'] }}</td>
				</tr>
			   @endforeach
			@else
			 <tr>
			 	<td colspan="4"> You have no applications</td>
			 </tr>
			@endif
    	</tbody>
    </table>
  </div>    
@endsection