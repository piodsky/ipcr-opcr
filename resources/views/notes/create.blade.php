@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
     <div class="panel panel-default">
        <div class="panel-heading"><center>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</center></div>

          <div class="panel-body">

            <table style="width: 100%;border-collapse: separate;border-spacing: 8px;">

              <form action="{{route('notes.store')}}" method="POST">
              {{csrf_field()}}
                <tr>
                  <th>Major Final Output</th>
                  <th>Success Indicator</th>
                  <th>Actual Accomplishments</th>
                  <th>Distribution</th>
                  <th>Rating (Q1)</th>
                  <th>Rating (E3)</th>
                  <th>Rating (T3)</th>
                  <th>Rating (A4)</th>
                  <th>Average Score</th>
                  <th>Remarks</th>
                </tr>
                <tr>
                  <th>Core Functions: 70 %</th>
                </tr>
                <tr>
               		<td><div class="form-group">
              	   	<p>No. of course syllabuses revised</p>
              		</div></td>

                  <td><div class="form-group">
                    <p>Revised at least one course syllabus taught within the semester</p>
                  </div></td>

              		<td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>8%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
              			</label>
              			<select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

              		<td><div class="form-group">
              			<label for="E2">
              			</label>
              			<select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

              		<td><div class="form-group">
              			<label for="T3">
              			</label>
              			<select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>No. of IMs urtilized</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Revised at least one IM in a year</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>8%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>Teaching Perfornmance</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Teaching performance rated as satisfactory or better</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>10%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>Attendance in class meetings</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Not more than 3 days absent in class meetings</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>7%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>On time administration of major exams</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Administer major exams within the prescribed schedule</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>7%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>Participation in CAS INSET</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Participation in atleast 2 of four INSET sessions in OBE</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>8%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>No of hours rendered during student consultation</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Render atleast 8 hours per week for student consulatation/advisement</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>7%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>Prompt submission and uploading in raf</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Submitted and uploaded grades ten working days after the last day of exam</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>10%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>No. of Faculty meetings attended</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Not more than 3 days absent in meetings</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>5%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr><th>Strategic Functions: 30%</th></tr>
                <tr>
                  <td><div class="form-group">
                    <p>No. of training/seminar/conferences attended</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Attend atleast one research training/seminar/conference</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>6%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>No. of proposed/completed research</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Attend atleast one proposed/completed research within the rating period</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>7%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p></p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Disseminate at least one research</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>5%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>Extension</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Participate in the department's extension project</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>7%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>

                <tr>
                  <td><div class="form-group">
                    <p>QA</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>100% participates ISO/AACUP - related activities</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>5%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>
                <tr><th>Support Functions: 10%</th></tr>

                <tr>
                  <td><div class="form-group">
                    <p>Punctual Submission of documents and records</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Submit required documents and records (DTR, SALN, liquidation, forms, etc) on time.</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>5%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>
                <tr>
                  <td><div class="form-group">
                    <p>Participation in school activities</p>
                  </div></td>

                  <td><div class="form-group">
                    <p>Participate in the school activities</p>
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="ActualAccomplishments" placeholder="Actual Accomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <p>5%</p>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select class="form-control" name="Q1">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="E2">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="T3">
                    </label>
                    <select class="form-control" name="E2">
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
                  </div></td>

                  <td><div class="form-group">
                    <label for="A$">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average">
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" placeholder="Remarks">
                  </div></td>
                </tr>
              </form>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                
                


@endsection