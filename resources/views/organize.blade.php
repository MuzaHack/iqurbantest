@include ('topnav')

<body>

<div class="bg">

    <h1>Organize Event</h1>

    <div  style="height: 50px;"></div>
    
    <div class="row">

        <div class="ec">

        <h3>View Created Event</h3><br>
        <a type="submit" class="submit" href="/registeredevent"> Proceed </a>

        </div>

        <div  style="height: 20px;"></div>


        <div class="cne">
       
        <h3>Create New Event</h3><br>
        <a type="submit" class="submit" href="/createevent"> Proceed </a>

        </div>

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
        text-align: center;
        
        
    }

    .ec {
        /*float: left;
        padding: 10%;*/
        margin-left: 5%;
        background-color: #003748;
        color: white;
        width: 25%;
        height: 100px;
        font-size: 15px;

    }

    .cne {
        margin-left: 5%;
        background-color: #003748;
        color: white;
        width: 25%;
        height: 100px;
        font-size: 15px; 

    }

    .submit{
        background-color: #FF6624;
        text-align: center;
        padding: 14px 40px;
        text-decoration: none;
        border: 1px solid #7A7979;
    }

    h1{
        text-align: center;
    }

</style>