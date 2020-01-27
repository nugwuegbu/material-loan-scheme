@extends('layouts.app')
@section('content')
<div class="col-md-8">
  	@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
    <div class="row">
    	<div class="col-md-12">
    		<a class="btn btn-success" href="/documents/create/"><i class="fa fa-plus"></i>Upload Documents</a>
    	</div>
    </div><br>

    <table class=" table table-bordered">
    	<thead>
    		<tr>
    			<th>Title</th>
    			<th>Date</th>
    			<!-- <th>Project State</th>
    			<th>Mortgage</th> -->
    		</tr>
    	</thead>
    	<tbody>
    		@if(!empty($docs) && $docs->count())
    		   @foreach($docs as $data)
				<tr>
					<td>{{ $data['title'] }}</td>
					<td>{{ $data['create_at'] }}</td>
				</tr>
			   @endforeach
			@else
			 <tr>
			 	<td colspan="2"> You have not uploaded any document</td>
			 </tr>
			@endif
    	</tbody>
    </table>
  </div>    
@endsection