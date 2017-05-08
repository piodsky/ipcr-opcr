@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><center>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW</center> </div>

                <div class="panel-body">

                 <a class="btn btn-sm btn-info pull-xs-right" href="/ipcr">
                                        BACK
                                    </a>
<!-- Main component for call to action -->
            <div class="container">
                <h1 class="pull-xs-right">
                   
                </h1>
                <div class="pull-xs-right">
                    <!-- <a class="btn btn-primary" href="{{route('notes.createNote',$ipcr->id)}}" role="button">
                        New Note +
                    </a> -->    
                    
                          
                               
                </div>
                <div class="clearfix">
                </div>
                <!--============= notes=========== --> 
                <div class="list-group notes-group">

                    <!--note1 -->

                    @foreach($notes as $note)
                    <div class="card card-block">
                        <a href="{{route('notes.show',$note->id)}}">
                            <h4 class="card-title">
                                {{$note->title}}
                            </h4>
                        </a>
                        <table style="width: 100%;border-collapse: separate;border-spacing: 5px;">
                            <tr>
                                <th>
                                    Actual Accomplishments
                                </th>
                                <th>
                                    Q1
                                </th>
                                <th>
                                    E2
                                </th>
                                <th>
                                    T3
                                </th>
                                <th>
                                    A4
                                </th>
                                <th>
                                    Ave
                                </th>
                                <th>
                                    Remarks
                                </th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Delete
                                </th>
                                
                            </tr>
                            <tr>
                                <td>{{$note->ActualAccomplishments}}</td>
                                <td>
                                    {{$note->Q1}}
                                </td>
                                <td>
                                    {{$note->E2}}
                                </td>
                                <td>
                                    {{$note->T3}}
                                </td>
                                <td>
                                    {{$note->A4}}
                                </td>
                                <td>{{$note->Ave}}</td>
                                <td>{{$note->Remarks}}</td>
                                <td>
                                     <a class="btn btn-sm btn-info pull-xs-left" href="{{route("notes.edit",$note->id)}}">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('notes.destroy', $note->id)}}" class="pull-xs-right" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger " type="submit" value="Delete">
                                </td>
                                
                            </tr>
                        </table>
                            
                            
                            
                            
                            
                       
                        
                         
                            
                        </form>
                    </div>
                    
                    @endforeach
                  
                </div>
            </div>
            <!-- /container -->



    @endsection