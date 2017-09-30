@extends('layouts.app')

@section('content')
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="panel panel-primary">
			  <div class="panel-heading">Tareas</div>
			  <div class="panel-body">
				<a href="{{route('Tasks.create')}}" class="btn btn-primary">Nuevo</a>
			  	<hr>
			  	<div class="table table-responsive">
			  		<table class="table table-hover">
			  		<thead>
			  			<th>Completed</th>
			  			<th>Name</th>
			  			<th>Acciones</th>
			  		</thead>
			  		<tbody>
			  			@foreach($tasks as $task)
			  				<tr>
			  					@if($task->completed)
							    	<td><input type="checkbox" name="completed" checked="checked" disabled="disabled"></td>
							    @else
								    <td><input type="checkbox" name="completed" disabled="disabled"></td>
								@endif

							    <td>{{ $task->name }}</td>
							    <td>..</td>
							  </tr>
			  			@endforeach
			  		</tbody>
					</table>
			  	</div>			    
			  </div>
			</div>			
		</div>
	</div>
@endsection