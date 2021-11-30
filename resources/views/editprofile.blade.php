@include ('topnav')

<body>


<div class="bg">

<h1>Edit Profile</h1>

<div  style="height: 30px;"></div>

<form class="form" action="/editprofile" method="POST">
@csrf

<h3></h3>

    <input type="hidden" name="id" value="{{$events['id']}}"><br><br>

    
    <label>Name:</label> <br>
    <input type="text" class="input" name="user_name" value="{{$events['user_name']}}"><br><br>

    <label>Identity Card Number:</label> <br>
    <input type="text" class="input" name="user_ic" value="{{$events['user_ic']}}"><br><br>

    <label>Email:</label> <br>
    <input type="text" class="input" name="user_email" value="{{$events['user_email']}}"><br><br>

    <label>Phone No.:</label> <br>
    <input type="text" class="input2" name="user_phone" value="{{$events['user_phone']}}"><br><br>

    <label>Address:</label> <br>
    <textarea name="user_address" class="input1" cols="30" rows="10" >{{$events['user_address']}}</textarea> <br><br>

    
    <a type="submit" class="button" href="/profile">Return</a>

    <button class="button" type="submit">Update</button>
        

</form>

</div>
   
</body>

<style>

    body{
        background-color: #ededed;
        font-family: Arial, Helvetica, sans-serif;
    }

    .bg {
        position: absolute;
        z-index: 0;
        background-color: #F1F6BE;
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
        border-left: 0.5px solid #98B08C;
        border-right: 0.5px solid #98B08C;
        height: 1000px;
    
    }

    .form{
        margin-left: 15%;
     
    }

    h1 {
        text-align: center;
        
    }
 
    .input{
        width: 600px;
        height: 30px;
    }

    .input1{
        width: 600px;
        height: 200px;
    }

    .input2{
        width: 250px;
        height: 30px;
    }

    .button{
        margin-top: 50px;
        margin-right: 50px;
        background-color: #F3F1F1;
        text-align: center;
        padding: 12px 40px;
        text-decoration: none;
        border: 1px solid #525259;
        font-size: 12px;
    }

    .button:hover{
        background-color: #ddd;
        color: black;   
    }


    span{
        font-size: 12px;
        color: red;
    }
    
</style>