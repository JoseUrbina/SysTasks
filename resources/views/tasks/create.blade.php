@extends('layouts.app')

@section('content')
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="panel panel-primary">
			  <div class="panel-heading">Agregar Tarea</div>
			  <div class="panel-body">
			       <form action="{{route('Tasks.store')}}" method="POST" class="form-horizontal">
			       	  {{ csrf_field() }}
					  <div class="form-group">
					    <label for="txtName" class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtName" name="name">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary">Agregar</button>
					    </div>
					  </div>
					</form>
			  </div>
			</div>			
		</div>
	</div>
@endsection