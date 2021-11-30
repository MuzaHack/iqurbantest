@include ('topheader2')

<body>


<div class="bg">

<h1>User Registration Form</h1>

<div  style="height: 30px;"></div>

<form class="form" action="registration" method="POST">

@if(Session::has('success'))
<div>{{(Session::get('success'))}}</div>
@endif
@if(Session::has('fail'))
<div>{{(Session::get('fail'))}}</div>
@endif

@csrf

<h3></h3>

    
    <label>Name:</label> <span>@error('user_name'){{$message}}@enderror</span> <br>
    <input type="text" class="input" name="user_name" value={{old('user_name')}}><br><br>

    <label>Identity Card Number:</label> <span>@error('user_ic'){{$message}}@enderror</span> <br>
    <input type="text" class="input" name="user_ic" value={{old('user_ic')}}> <br><br>

    <label>Email:</label> <span>@error('user_email'){{$message}}@enderror</span> <br>
    <input type="text" class="input" name="user_email" value={{old('user_email')}}><br><br>

    <label>Phone No.:</label> <span>@error('user_phone'){{$message}}@enderror</span> <br>
    <input type="text" class="input2" name="user_phone" value={{old('user_phone')}}><br><br>

    <label>Address:</label> <span>@error('user_address'){{$message}}@enderror</span> <br>
    <textarea name="user_address" class="input1" cols="30" rows="10">{{old('user_address')}}</textarea> <br><br>

    <label>Set Password:</label> <span>@error('user_password'){{$message}}@enderror</span> <br>
    <input type="password" class="input2" name="user_password" ><br><br><br>

    <label>Re-enter Password:</label><br>
    <input type="password" class="input2" name="verify_password"><br><br><br>

    <a type="submit" class="button" href="/iqurban">Return</a>
    <button class="button" type="submit">Submit</button>

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
        height: 2000px;
    
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

    table, td, tr{
        padding: 14px 10px;

    }

    span{
        font-size: 12px;
        color: red;
    }
    
</style>