<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="message-body">

    <h4 class="message-header">New Message
    </h4>
    Hello, {{$receiver[0]->first_name. " ". $receiver[0]->last_name}},
    <div class="message-body-inner">
        <p >You have a new message from {{$sender[0]->first_name. " ". $sender[0]->last_name}}</p>
        <br>
        <a href="http://www.gradsuccess.org">Login</a>
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