<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap/css/bootstrap-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.min.css')}}">
	
	<script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>

  	
  	<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
	
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style1.css')}}">
	<meta name="viewport" content="width=device-width, 
	initial-scale=1, maximum-scale=1">
  	
  	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.min.css')}}">
  	<script src="{{asset('/js/wow.min.js')}}"></script>

<script type="text/javascript">
	var view_table2 = '';
   	$(document).ready(function() {
   		$(document).on('click','#manage_stu',function(){

				var cls_val = $(' #form_control_select_class1').find("option:selected").val();
		   		var month_val = $('#form_control_select_month').find("option:selected").val();
		   		var year_val = $('#form_control_select_year').find("option:selected").val();
				var group_val = $('#form_control_select_group').find("option:selected").val();
				var sub_val = $('#form_control_select_sub').find("option:selected").val();   
                date = new Date();
                var firstDay = new Date(year_val, month_val-1, 1);
                first_date = firstDay.getDate();                   
                var start_time = firstDay.getTime();
                var lastDay = new Date(year_val,month_val,0);
                last_date= lastDay.getDate();
                var numOfDays = new Date(year_val, month_val, 0).getDate();
                alert(numOfDays);
                var days = new Array(); 
                end_time = lastDay.getTime();                    
			    var j = 1;
			    var day_n = '';
			    var view_table1 = '';
			    
				for(var i=first_date,j=0; j<=numOfDays,i<=last_date; i++,j++)
				{
						
					days[j]=new Date(year_val, month_val-1, j+1).getDay();						  
					if (days[j]==0) {
					   	day_n = 'Sun';
					}
					else if (days[j]==1) {
					    day_n = 'Mon';
					}
					else if (days[j]==2) {
					    day_n = 'Tue';
					}
					else if (days[j]==3) {
					    day_n = 'Wed';
					}
					else if (days[j]==4) {
					  	day_n = 'Thu'; 
					}
					else if (days[j]==5) {
					  	day_n = 'Fri';
					   			
					}
					else{
					 	day_n = 'Sat';
					   	
					}
						view_table1 +='<th>'+day_n+' '+i+'</th>';
						view_table2+='<td><select id="atten_status" name="atten_status[]"> '+'<option value="01"> A </option>'+'<option value="02">L</option>'+'<option value="03"> S </option>'+'<option value="04">U</option>'+'</select> </td>'

				}
				console.log($("select[name='atten_status']").val());
				
				$('#table1 thead tr' ).html('<th>'+'Image'+'</th>'+'<th>'+'Registration Number'+'</th>'+'<th>'+'Name'+'</th>'+'<th>'+'Sub Name'+'</th>'+view_table1);
		    	var cls = $(' #form_control_select_class1').find("option:selected").text();
		    	var sub = $('#form_control_select_sub').find("option:selected").text();
		    	var month = $('#form_control_select_month').find("option:selected").text();
		   		var year = $('#form_control_select_year').find("option:selected").text();
				var group = $('#form_control_select_group').find("option:selected").text();
		   		var formData = {
			        'sclass': cls,
			        'month': month,
			       	'year': year,
			        'group': group,
			        'sub': sub,

			        '_token': "{{csrf_token()}}",
			    };
			    $.ajax({
			        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
			        url         : 'atten_new', // the url where we want to POST
			        data        : formData, // our data object
			        dataType    : 'json', // what type of data do we expect back from the server
			        success: function(data){

				        console.log(data);
				        var view_table ='';
				        $.each(data, function( index, student ) {
								 
							view_table +='<tr><td>'+'-----'+'</td><td>'+student.id+'</td><td>'+student.fname+' '+student.lname+'</td><td>'+sub+' </td>'+view_table2+'</tr>';
								});

						var length = data.length;
								
				        $('#table1 tbody ').html(view_table);
				        $('#table_con').show();
			            	
			    	},
			        error: function(err){

			        }

			    });
	});
});
</script>



<script type="text/javascript">
   	$(document).ready(function() {
   		$(document).on('click','#manage_atten',function(){
   			var atten_status =[];
			         
			var len = $("select[name='atten_status[]'] option:selected").length;
			
			var from_atten = $("select[name='atten_status[]'] option:selected");
			console.log(len);

		 
			for(var k = 0; k<len;k++){
				atten_status[k] =from_atten[k].value;
			}
			console.log(atten_status);	
		   		var formData = {
			        'atten_status': atten_status,
			        

			        '_token': "{{csrf_token()}}",
			    };
			    $.ajax({
			        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
			        url         : 'atten_new_insert', // the url where we want to POST
			        data        : formData, // our data object
			        dataType    : 'json', // what type of data do we expect back from the server
			        success: function(data){

				        console.log(data);
				        var view_table ='';
				     
			            	
			    	},
			        /*error: function(err){

			        }*/

			    });
	});
});
</script>


<script type="text/javascript">

	function handleSelect() {
		var class_val = $(' #form_control_select_class1').find("option:selected").val();
	     if (class_val == '06') {
	     	
	     	document.getElementById('form_control_select_group').disabled = true;
	        document.getElementById('form_control_select_sub').disabled = false;
	         
	     } 
	     if (class_val == '07') {
	        document.getElementById('form_control_select_sub').disabled = false;
	        document.getElementById('form_control_select_group').disabled = true;
	     }
	     else if (class_val == '08') {
	        document.getElementById('form_control_select_sub').disabled = false;
	        document.getElementById('form_control_select_group').disabled = true;
	     }
	     else if (class_val == '09') {
	        document.getElementById('form_control_select_group').disabled = false;
	        document.getElementById('form_control_select_sub').disabled = false;
	         
	     }
	     else if (class_val == '10') {
	        document.getElementById('form_control_select_group').disabled = false;
	        document.getElementById('form_control_select_sub').disabled = false;
	         
	     }
	    
	   

	     
	 }

</script>
</head>
<body>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse" 
	role="navigation">
		<div class="container">
			<div class="navbar-header" >
				<!-- <button type="button" class="navbar-toggle collapsed" 
				data-toggle="collapse" data-target=".navbar-collapse">
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button> -->
				<a href="{{ url('dashboard') }}" class="navbar-brand">Admin Panel</a>
				<p class="navp">XYZ HIGH SCHOOL</p>

			</div>
			<div class="navbar-collapse navbar-collapse collapse navc">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<p>Hello Admin</p>
					</li>

					<li>
						<a href="#services">Log Out</a>
					</li>
					
				</ul>
			</div>

		</div>
		
	</div>

	<!-- Mid -->

<nav class="navbar navbar-inverse visible-xs navbar-fixed-top" id="navbar2">
	  <div class="container-fluid" >
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="{{ url('dashboard') }}">Dashboard</a></li>
			<li><a href="#section2">Student Information</a></li>
			<li><a href="#section3">Student Attendance</a></li>
			<li><a href="#section3">Bulk Sms</a></li>
			<li><a href="#section3">Result Processing</a></li>
			<li><a href="#section3">Teacher Login	</a></li>
	      </ul>
	    </div>
	  </div>
</nav>

	
		<div class="container-fluid" style="background-color: #fff;">
			<div class="row content" >
				<div class="col-sm-3 sidenav hidden-xs navbar-fixed-top">

					<ul class="nav nav-pills nav-stacked">
						
				        <li class="dropdown">

				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Information
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
									<li><a href="{{ url('stu_info_new/create') }}">New Student</a></li>
								    <li><a href="{{ url('show_info') }}">Update information</a></li>
								    <li><a href="{{ url('show_info_all') }}">Show information</a></li>      
								</ul>
						 	
				        </li>
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Attendance
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							     <li><a href="{{ url('atten_new') }}">Add New Record</a></li>
							      <li><a href="{{ url('atten_show') }}">Show Record</a></li>
							    </ul>
						 	
				        </li>
				        
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Result Processing
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="insert_result.blade.php">Insert Result</a></li>
							      <li><a href="search_result.blade.php">Show Result</a></li>
							      <li><a href="#">Marksheet</a></li>
							      <li><a href="#">Tabulation Sheet</a></li>
							    </ul>
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Teacher Login
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Classified Bulk Sms</button>
							    <!-- <span class="caret"></span>
							    <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Academic Calender
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>

      				</ul><br>
				</div>
				</div>
				<br>

				<div class="row" id="row_form">

					<!-- <h1 class="title">Personal Information</h1> -->
					<div class="col-sm-12 col-md-12" id="row_1st_col" style="">
							<form class="form-horizontal fixed" id="form-horizontal" method="post" action="#">
								<!-- {{csrf_field()}} -->
								
							    


							    <div class="select_class1">
							    
							    	<div class="select_class_select1">
							    		<select class="form-control" id="form_control_select_class1" onchange="handleSelect()">
							    			<option disabled="true" selected="selected" >Select a Class
							    			</option>
							    			<option value="06">Six</option>
							    			<option value="07">Seven</option>
							    			<option value="08">Eight</option>
							    			<option value="09">Nine</option>
							    			<option value="10">Ten</option>
							    			
							    		</select>

							    	</div>

							    	<div class="select_month_select">
							    		<select class="form-control" id="form_control_select_month">
							    			<option disabled="true" selected="selected" >Select Month
							    			</option>
							    			<option value="1" >January</option>
							    			<option value="2">February</option>
							    			<option value="3">March</option>
							    			<option value="4">April</option>
							    			<option value="5">May</option>
							    			<option value="6">June</option>
							    			<option value="7">July</option>
							    			<option value="8">August</option>
							    			<option value="9">September</option>
							    			<option value="10">October</option>
							    			<option value="11">November</option>
							    			<option value="12">December</option>
							    			
							    		</select>
							    		
							    	</div>
							    	<div class="select_year_select">
							    		<select class="form-control" id="form_control_select_year">
							    			<option disabled="true" selected="selected" >Select Year
							    			</option>
							    			<option value="2012" >2012</option>
							    			<option value="2013">2013</option>
							    			<option value="2014">2014</option>
							    			<option value="2015">2015</option>
							    			<option value="2016">2016</option>
							    			<option value="2017">2017</option>
							    			<option value="2018">2018</option>
							    			
							    			
							    			
							    		</select>
							    		
							    	</div>
							    	<div class="select_group_select">
							    		<select class="form-control" id="form_control_select_group" disabled>
							    			<option disabled="true selected="selected" >Select Group
							    			</option>
							    			<option value="01" >Science</option>
							    			<option value="02">Commerce</option>
							    			<option value="03">Arts</option>
							    		</select>
							    		
							    	</div>

							    	<div class="select_sub_select">
							    		<select class="form-control" id="form_control_select_sub" disabled>
							    			<option disabled selected="selected" >Select a class first</option>
							    			<option value="01" >Math</option>
							    			<option value="02">Physic</option>
							    			<option value="03">Science</option>
							    		</select>
							    		
							    	</div>
							    	<div class="select_btn_select">
							    		<a href="#" class="btn btn-primary" id="manage_stu">Manage student</a>
							    		
							    	</div>
							    </div>
								<div class=" " id="c6" style="">
								<!-- <div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div> -->
						        
						    	<div class="container" id="table_con" style="display: none;">
                                                                                       
									  <div class="table-responsive" id="table_res">          
									  <table class="table" id="table1" border="2px">
									     <thead>
									      <tr>
									      
									      </tr>
									    </thead>
									    <tbody>
									    
									       
									    </tbody>
									  </table>
									   <div class="select_btn_select">
							    		<a href="#" class="btn btn-primary" id="manage_atten" >Manage Attendance</a>
							    		
							    	</div>
									  </div>

									</div>

								</div>
								
								<!-- education -->
								
								
							

									
								
								
								
							</form>
					</div>
				</div>
				

				</div>
			</div>
		</div>
	
</body>
</html>