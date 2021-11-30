@include ('topnav')

<body>

<div class="bg">

<h1>Registered Events</h1>

<table class='table'>
    <tr class='cat'>
        <td class='eventname'>Event Title</td>
        <td>Date Created</td>
        <td>Event Details</td>
        <td>Participants</td>
        <td></td>
    </tr>
    @foreach($eventsdata as $event)
    <tr class='info'>
        <td>{{$event['event_title']}}</td>
        <td>{{$event['date_created']}}</td>
        <td><a class="option" href="/eventdetails/{{$event['id']}}">View</a></td>
        <td><a class="option" href="/participants/{{$event['id']}}">View</a></td>
        <td><a class="option" href="/deleteconfirmation/{{$event['id']}}">Delete</a></td>
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


</style>