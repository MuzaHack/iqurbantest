@include ('topnav')

<body>

<div class="bg">

<h1>Order History</h1>

<table class='table'>
    <tr class='cat'>
        <td>Order Date</td>
        <td class='eventname'>Event Title</td>
        <td>View Details</td>
        <td>Download Certificate</td>
        <td>Give Feedback</td>
    </tr>
    @foreach($data as $order)
    <tr class='info'>
        <td>{{$order['date_created']}}</td>
        <td></td>
        <td class="ctr"><a class="option" href="orderdetail/{{$order['id']}}" >Proceed</a></td>
        <td class="ctr"><a class="rb" href= >Download Here</a></td>
        <td class="ctr"> <a class="option" href="givefeedback">Feedback</a></td>
    </tr>
    @endforeach


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
        text-align: center;
        
        
    }

    h1{
        text-align: center;
   
    }

    table{
        margin: auto;

    }

    table, tr, td {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 10px 10px;
        
    }

    .cat{
        background-color: #FF6624;
        color: white;
    }

    .info{
        background-color: #003748;
        color: white;
    }

    .eventname{
        width: 300px;
    }

    .option{
        background-color: #ededed;
        color: black;
        text-align: center;
        padding: 4px 20px;
        text-decoration: none;
        border: 1px solid #7A7979;
        
    }

    .ctr{
        text-align: center;
    }

    .rb{
        font-size: 14px;
        color: white;
    }


</style>