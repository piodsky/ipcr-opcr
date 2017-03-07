@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">INDIVIDUAL PERFORMANCE COMMINTMENT AND REVIEW</div>

                <div class="panel-body">

	<div class="row">
		
		<h3 class="display-3">
			{{$note->title}}

			</h3>

			<p>
			{{$note->body}}
			</p>
	</div>

</div>

@endsection