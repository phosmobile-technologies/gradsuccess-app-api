<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="message-body">

    <h4 class="message-header">Request To Assign Self Application
    </h4>
    Hello, {{$user->first_name}}
    <div class="message-body-inner">

        <p >Your Request to assign self an application was successful, your request will be processed and you will receive a response shortly, if  your request was approved or decline </p>

        <br>
        <h4>Application Details</h4>
        <div style="text-align: left;">
            <p><span style="font-weight: bolder">Name: </span>{{$data['name']}}</p>
            <p><span style="font-weight: bolder">Interest:</span> {{$data['summary']}}</p>

        <a href="http://www.gradsuccess.org/Expert-dashboard">Login</a>
        <br />
        <br>
        <p>Thank you.</p>
        <small>We help young graduates and career
            people achieve their long and short academic and professional goals</small>
        <small>This email was sent to danielukasoanya@gmail.com as a user of GradSuccess’  reviewing service. Read our <a href = "https://www.gradsuccess.org">privacy policy.</a> Information about  our services  is available <a href = "https://www.gradsuccess.org/about-us">here.</a>
            This service is provided by  GradSuccess.org.
        </small>
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
        color: white;
        font-size: 12px;
        text-decoration: none;
        text-transform: uppercase;
    }
    .message-header{
        background-color: #47dcbc;
        padding:10px;
        border-radius: 10px 0px;
    }
</style>