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
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript">
    	function showTable(one,second,three,h1)
	    {
	      document.getElementById(one).style.display = 'block';
	      document.getElementById(second).style.display = 'none';
	      document.getElementById(three).style.display = 'none';
	      document.getElementById(h1).style.display = 'none';
	      
	    }
	    function showTable1(one)
	    {
	      document.getElementById(one).style.display = 'block';
	      
	      
	    }
    </script>
</head>
<body>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse" 
	role="navigation">
		<div class="container">
			<div class="navbar-header">
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
	  <div class="container-fluid">
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
							<form class="form-horizontal fixed" id="form-horizontal" method="post" action="{{url('/stu_info_new')}}">
								{{csrf_field()}}
								<button type="submit" id="button1" name="submit" class="btn-lg btn-primary buttons" onClick="showTable('f1','f2','f3','h1')">Personal Information
								</button>
								<button type="submit"  id="button2" name="submit" class="btn-lg btn-primary buttons" data-toggle="" data-target=""  
									onClick="showTable('f2','f1','f3','h1')">Education
								</button>
								<button type="submit"  id="button3" name="submit" class="btn-lg btn-primary buttons" onClick="showTable('f3','f2','f1','h1')">
								Address
								</button>
								<br>

								<h1 id="h1">Please Insert The information of personal, education and Address Correctly</h1>
							
								<div class=" " id="f1" style="display: none;" >
								<div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div>
						        
						    	<div class="form-group, col-sm-6 col-md-6">
									<label for="fname" class="control-label">First Name:</label>
									<input type="text" class="form-control" id="fname" placeholder="First Name" data-error="Enter Your First Name" name="fname" required>

            						<div class="help-block with-errors"></div>
								</div>
								<div class="form-group, col-sm-6 col-md-6">
									<label for="lname" class="control-label">Last Name:</label>
									<input type="text" class="form-control" id="lname" placeholder="Last Name" data-error="Enter Your Last Name" required name="lname">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group, col-sm-6 col-md-6">
									<label for="gname" class="control-label">Guardian's Name:</label>
									<input type="text" class="form-control" id="gname" placeholder="Guardian's name" data-error="" required name="gname">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group, col-sm-6 col-md-6">
									<label for="goccupation" class="control-label">Guardian's Occupation:</label>
									<input type="text" class="form-control" id="goccupation" name="goccup" placeholder="Guardian's occupation" data-error="" required>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group, col-sm-6 col-md-6">
									<label for="g_phone" class="control-label">Guardian's Phone Number:</label>
									<input type="number" class="form-control" id="g_phone" name="gphone" placeholder="Guardian's Phone Number" data-error="" required>
									<div class="help-block with-errors"></div>
								</div>
								<!-- <div class="form-group">
									<label for="p_add" class="control-label">Present Address
									</label>
									<input type="text" class="form-control" id="p_add" placeholder="Last Name" data-error="Enter Your Last Name" required>
									<div class="help-block with-errors"></div>
								</div> -->
								<div class="form-group, col-sm-6 col-md-6">
									<label for="s_phone" class="control-label">Student's Phone Number:</label>
									<input type="number" class="form-control" id="s_phone" placeholder="Student's Phone Number" data-error="" name="sphone">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group, col-sm-6 col-md-6">
									<label for="dob" class="control-label">Date of Birth:</label>
									<input type="Date" class="form-control" id="dob" data-error="" name="sdob">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group, col-sm-6 col-md-6">
									<label for="class" class="control-label" >Blood Group</label>
									<select class="form-control" id="class" name="sblood">
										<option>
											O+
										</option>
										<option>
											O-
										</option>
										<option>
											A+
										</option>
										<option>
											A-
										</option>
										<option>
											B+
										</option>
										<option>
											B-
										</option>
										<option>
											AB+
										</option>
										<option>
											AB-
										</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
								<!-- <div class="form-group">
									<label for="section" class="control-label" >Section</label>
									<select class="form-control" id="class">
										<option>
											A
										</option>
										<option>
											B
										</option>
										<option>
											C
										</option>
										<option>
											D
										</option>
										
										
									</select>
									<div class="help-block with-errors"></div>
								</div> -->
									<div class="form-group">
										<button type="submit" class="btn btn-lg"  onClick="showTable('f2','f1','f3','h1')" id="btn_reg">Next</button>
									</div>
								</div>
								
								<!-- education -->
								<div class="col-sm-12 col-md-12 " id="f2" style="display: none;">
									<div class="pinformation">
						    	            <h1>Educational Information</h1>
						            </div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Class</label>
												<select class="form-control" id="class" name="sclass">
													<option>
														2
													</option>
													<option>
														3
													</option>
													<option>
														4
													</option>
													<option>
														5
													</option>
													<option>
														6
													</option>
													<option>
														7
													</option>
													<option>
														8
													</option>
													<option>
														9
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Section</label>
												<select class="form-control" id="class" name="ssection">
													<option>
														a
													</option>
													<option>
														b
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Group</label>
												<select class="form-control" id="class" name="sgroup">
													<option>
														Science
													</option>
													<option>
														Commerce
													</option>
													<option>
														Arts
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Shift</label>
												<select class="form-control" id="class" name="sshift">
													<option>
														Morning
													</option>
													<option>
														Day
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-lg" id="btn_next" onClick="showTable('f3','f2','f1','h1')">Next</button>
											<button type="submit" class="btn btn-lg" id="btn_back" onClick="showTable('f1','f2','f2','h1')">Back</button>
										</div>
								</div>
								<div class="col-sm-12 col-md-12" style="display: none;" id="f3">
									<div class="pinformation">
						    	            <h1>Address</h1>
						            </div>
									<div class="col-sm-6 col-md-6"  id="padd">
										<h2 style="text-align: center;">Present Address</h2>
										<div class="form-group">
											<label for="lname" class="control-label">House Number:</label>
											<input type="text" class="form-control" id="lname" placeholder="House number" data-error="Enter Your Last Name" required name="spreaddhouse">
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Area Name:</label>
											<input type="text" class="form-control" id="lname" placeholder="Area Name" data-error="Enter Your Last Name" required name="spreaddarea">
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Post Office:</label>
											<input type="text" class="form-control" id="lname" placeholder="Post Office" data-error="Enter Your Last Name" required name="spreaddpost">
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">District:</label>
											<select class="form-control" id="class" name="spreadddist">
													<option>
														Dhaka
													</option>
													<option>
														Chittagong
													</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Police Station:</label>
											<input type="text" class="form-control" id="lname" placeholder="Police Station" data-error="Enter Your Last Name" required name="spreaddstation">
											<div class="help-block with-errors"></div>
										</div>

										
										<div class="form-group">
											<label for="lname" class="control-label">Postal Code:</label>
											<input type="text" class="form-control" id="lname" placeholder="Postal Code" data-error="Enter Your Last Name" required name="spreadddpostal">
											<div class="help-block with-errors"></div>
										</div>
										
										
										
									</div>
									
									<div class="col-sm-6 col-md-6" >
										<h2 style="text-align: center;" >Permanent Address</h2>
										<div class="form-group">
											<label for="lname" class="control-label">Village:</label>
											<input type="text" class="form-control" id="lname" placeholder="Village" data-error="Enter Your Last Name" required name="speraddvillage">
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Post Office:</label>
											<input type="text" class="form-control" id="lname" placeholder="Post Office" data-error="Enter Your Last Name" required name="speraddpost">
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Police Station:</label>
											<input type="text" class="form-control" id="lname" placeholder="Police Station" data-error="Enter Your Last Name" required name="speraddstation">
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">District:</label>
											<input type="text" class="form-control" id="lname" placeholder="District" data-error="Enter Your Last Name" required name="speradddist">
											<div class="help-block with-errors"></div>
										</div>

									</div>
									<div class="form-group">
									<button type="submit" class="btn btn-lg" id="btn_save"
									 name="submit">Save</button>
									<button type="submit" class="btn btn-lg" id="btn_back" onClick="showTable('f2','f1','f3','h1')">Back</button>
									</div>
								</div>
								
								
							</form>
					</div>
				</div>
				

				</div>
			</div>
		</div>
	
</body>
</html>