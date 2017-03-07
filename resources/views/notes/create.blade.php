@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><center>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</center></div>

                <div class="panel-body">

<table style="width: 100%;border-collapse: separate;border-spacing: 5px;">

<form action="{{route('notes.store')}}" method="POST">
{{csrf_field()}}
<tr>
		<td><div class="form-group">
			<label for="title">
			</label>
			<input class="form-control" type="text" name="title" placeholder="Title">
		</div><td>

		<td><div class="form-group">
			<label for="body">
			</label>
			<input class="form-control" type="text" name="body" placeholder="body">
		</div></td>
		<td><div class="form-group">
			<label for="distribution">
			</label>
			<input class="form-control" type="text" name="distribution" placeholder="Distribution">
		</div><td>

		<td><div class="form-group">
			<label for="Q1">
			</label>
			<input class="form-control" type="text" name="Q1" placeholder="Q1">
		</div></td>

		<td><div class="form-group">
			<label for="E2">
			</label>
			<input class="form-control" type="text" name="E2" placeholder="E2">
		</div></td>

		<td><div class="form-group">
			<label for="T3">
			</label>
			<input class="form-control" type="text" name="T3" placeholder="T3">
		</div></td>


		<div><td>
			<input type="hidden" name="ipcr_id" value="{{$id}}">
			<input class="btn btn-primary" type="submit" value="Done">
		</input>
 		</div></td>
		
</tr>
			
			

			
</form>


@endsection