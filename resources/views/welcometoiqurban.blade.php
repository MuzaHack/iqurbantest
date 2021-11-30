@include ('topheader')

<body>
    
<div class="bg">

@if(Session::has('success'))
<div>{{(Session::get('success'))}}</div>
@endif

<table>
    <tr>
        <td class='left'>

            <h1>Welcome to iQurban</h1>

        </td>
        <td class='right'>

            <h2>Login</h2>

            <form action="iqurban" method="POST">

            @if(Session::has('success'))
            <div class="ermes">{{(Session::get('success'))}}</div>
            @endif
            

            @csrf
            
                <input type="text" placeholder="Email" name="user_email" value={{old('user_email')}}> <span class="ermes">@error('user_email'){{$message}}@enderror</span> <br><br>
                <input type="password" placeholder="Password" name="user_password"> <span class="ermes">@error('user_password'){{$message}}@enderror</span> <br><br>

                @if(Session::has('fail'))
                <div class="ermes">{{(Session::get('fail'))}}</div>
                @endif

                <button type="submit">Login</button> <br><br>
                <a class="rb" href="/registration">Don't have an account? Register here</a>
            </form>


        </td>
    </tr>
</table>






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
        height: 600px;
        
    }

    h1 { 
        text-align: center;
        color: white;

    }

    table, tr, td{

        border-collapse: collapse;
        border: 1px solid black;
        margin: auto;
        margin-top: 10%;
        height: 400px;
        width: 800px;
        position: ;
    }

    .left{
        background-color: #FF6624; 
    }

    .right{
        background-color: #003748;
    }

    h2{
        margin-left: 10%;
        color: white;
    }

    form{
        margin: 10%;

    }

    button{
    
    }

    .ermes{
        font-size: 12px;
        color: red;
    }

    .rb{
        font-size: 14px;
        color: white;
    }

</style>