@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
	<h1>
	Edit Note
	</h1> 


<form action="{{route('notes.update',$note->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="form-group">
			<label for="title"> 
				Note Title 
			</label>
			<input class="form-control" type="text" name="title" value="{{$note->title}}">
		</div>

		<div class="form-group">
			<label for="body">
				Note Body
			</label>
			<input class="form-control" type="text" name="body" value="{{$note->body}}">
		</div>

			<input class="btn btn-primary" type="submit" value="Done">
		</input>
 
</form>

@endsection