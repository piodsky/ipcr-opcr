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
			
		   <head>  
           <title>Dynamically Add or Remove input fields in PHP with JQuery</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2>  
                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
   
			
</form>


@endsection