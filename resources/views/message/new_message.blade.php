<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="message-body">
    <h4 class="message-header">New message Notification
    </h4>
    <div class="message-body-inner">

        <p>
           Dear, {{$recipient->first_name. " ". $recipient->last_name}}
        </p>
        <p >You have a new message from  {{$sender->first_name. " ". $sender->last_name}}</p>

        <p>
            {{$messages->message}}
        </p>

        <hr/>
        <br />
        <br>
        <small>This email was sent to danielukasoanya@gmail.com as a user of GradSuccess’  reviewing service. Read our <a href = "https://www.gradsuccess.org">privacy policy.</a> Information about  our services  is available <a href = "https://www.gradsuccess.org/about-us">here.</a>
            This service is provided by  GradSuccess.org.
        </small>
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