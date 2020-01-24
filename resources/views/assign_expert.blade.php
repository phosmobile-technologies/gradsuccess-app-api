<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="message-body">
		<h4 class="message-header">Request to Assign Self and Application.
			 </h4>
		<div class="message-body-inner">
		
			<p>	
				{{$expert[0]->first_name. " ". $expert[0]->last_name}}
				request to assign himself apllication with the name:
			</p>
			<div style="text-align: left;">
				<p><span style="font-weight: bolder">Name: </span>{{$applicationRequesttoAssign[0]->name}}</p>:
				<p><span style="font-weight: bolder">Interest:</span> {{$applicationRequesttoAssign[0]->university_and_course_applied_for}}</p>
				<p><span style="font-weight: bolder">Summary: </span>{{$applicationRequesttoAssign[0]->summary_of_interest}}</p>
			<div>
			 <br>
			<a href="http://www.gradsuccess.org/Gradsuccess-admin">Login to Approve or Disapprove</a><br>
			<br />
			<br>
			<small>We help young graduates and career people achieve their long and short academic and professional goals</small>
		</div>
	</div>
</body>
<style type="text/css">
	.message-body{
		background-color: white;
		color: black;
		margin:auto;
		width: 80%; 
		margin-top: 10px;
		margin-bottom: 10px;
		box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.1);
		font-family: Poppins,sans-serif;
		text-align: center;
		max-width: 800px;
		border-radius: 10px;
	}
	.message-body-inner{
		width: 90%;
		margin: auto;
		padding-bottom: 20px;
	}
	.message-body-inner a{
		background-color: orangered;
		padding:10px 40px;
		margin-bottom: 10px;
		font-size: 12px;
		color: white;
		text-decoration: none;
		text-transform: uppercase;
	}
	.message-header{
		background-color: #47dcbc;
		padding:10px;
		border-radius: 10px 0px;
	}
</style>