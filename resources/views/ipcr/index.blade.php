@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW</center></div>

                <div class="panel-body">


            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-right">
                    Your Files
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="/ipcr/create" role="button">
                        New IPCR File +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->

                @foreach($ipcr as $ipcr)
                
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="{{route('notes.createNote',$ipcr->id)}}">
                                <h4 class="card-title">
                                    {{$ipcr->name}}
                                </h4>
                            </a>
                        </div>
                        <a href="/ipcr/{{$ipcr->id}}">
                            <img alt="Responsive image" class="img-fluid" src="dist/img/file.jpg"/>
                        </a>
                        <div class="card-block">
                            <a class="card-link" href="{{route("ipcr.edit",$ipcr->id)}}">
                                Edit File
                            </a>
                            <form action="/ipcr/{{$ipcr->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                               
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach
         
            <!-- /container -->
@endsection