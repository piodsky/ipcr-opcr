@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    

                    Pick choices:
                    <br>
                <br>
                     <a class="btn btn-lg btn-primary btn-block" href="/ipcr" role="button">
                Individual Performance Commitment and Review Form (IPCR)
                </a>

                <br>
                <br>
                 <a class="btn btn-lg btn-primary btn-block" href="/home" role="button">
                 Office Performance Commitment and Review Form (OPCR)
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
