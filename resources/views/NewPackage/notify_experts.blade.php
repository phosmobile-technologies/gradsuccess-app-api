<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div style = "
	background-color: white;
		color: black;
		margin:auto;
		width: 80%;
		margin-top: 10px;
		margin-bottom: 10px;
		box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.1);
		font-family: Poppins,sans-serif;
		text-align: left;
		max-width: 800px;
		border-radius: 10px;
		">
    <div style = "background-color:#47dcbc;text-align:center;padding:20px;">
        <img style = "width:150px;" src = "https://gradsuccess.org/static/24ab06a61d3fc27cf91afb11a1c01f7a/fdbb0/logo2.png">
    </div>
    <div style = "
		width: 90%;
		margin: auto;
		padding-bottom: 20px;">
        <h3>GradSuccess Consulting </h3>
        <p>Hello, {{$expert->first_name}},</p>
        <p >A new client portfolio is available.  Please  Login  to your profile to accept. </p>

        <br>
        <br><br>
        <a href="http://www.gradsuccess.org/Expert-dashboard" style = "
			background-color: orangered;
			padding:10px 40px;
			margin-bottom: 10px;
			color: white;
			font-size: 12px;
			text-decoration: none;
			text-transform: uppercase;">Login</a>
        <br />
        <br>
        <small>This email was sent to danielukasoanya@gmail.com as a user of GradSuccess’  reviewing service. Read our <a href = "https://www.gradsuccess.org">privacy policy.</a> Information about  our services  is available <a href = "https://www.gradsuccess.org/about-us">here.</a>
            This service is provided by  GradSuccess.org.
        </small>
    </div>
</div>
</body>
