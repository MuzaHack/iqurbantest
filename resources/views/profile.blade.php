@include ('topnav')

<body>

<div class="bg">

    <h1>Profile</h1>

    
    
    <div class="prof">

     <h3>{{$data['user_name']}}</h3><br>

     <p class="info">

        Email      :{{$data['user_email']}}<br><br>
        Phone No.  :{{$data['user_phone']}}<br><br>
        Address    :{{$data['user_address']}}
    
    </p>

       
    <br><br><br><br><br><br>
    

    <table>
        <tr>
            <td><a type="submit" class="button" href="editprofile/{{$data['id']}}"> Edit Profile </a></td>
            <td><a type="submit" class="button" href="/orderhistory"> Order History </a></td>
            <td><a type="submit" class="button" href="/organize"> Organize Event </a></td>
            <td><a type="submit" class="logout" href="/logout"> Logout</td>
        </tr>
    </table>


    </div>

    

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

    .prof {
        border: 1.5px solid #000000;
        background-color: #003748;
        color: white;
        margin-left: 150px;
        margin-right: 150px;
        height: 400px;

    }

    h1 { 
        text-align: center;

    }

    .info, h3{

        margin-left: 10%;
    }

    table, td, th{
        padding: 14px 10px;
        margin-left: 5%;
    }

    .button{
        background-color: white;
        text-align: center;
        padding: 14px 30px;
        width: 100px;
        text-decoration: none;
        border: 1px solid #7A7979;
        

    }

    .logout{
        background-color: red;
        color: white;
        text-align: center;
        padding: 14px 30px;
        width: 100px;
        text-decoration: none;
        border: 1px solid #7A7979;
        

    }



</style>