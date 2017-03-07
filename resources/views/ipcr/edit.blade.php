@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW</center></div>

                <div class="panel-body">
	<h1>
	Edit IPCR 
	</h1> 


<form action="/ipcr/{{$ipcr->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="form-group">
	<label for="name">
		File Name
	</label>
	<input class="form-control" type="text" name="name">
</div>

	<input class="btn btn-primary" type="submit" value="update">
</input>

</form>


@endsection