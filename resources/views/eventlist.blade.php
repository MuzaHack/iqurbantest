@include ('topnav')

<body>
    
<div class="bg">

<h1>Event List</h1>

    @foreach($eventsdata as $event)

    <div class="container"> 

        <div class="details">

            <br><br><br>

            <table>
                <tr>
                    <td>

                    <div class="pic" >
                        <img src="{{ asset('img/'. $event->event_image)}}" alt="No image">
                    </div>


                    </td>
                    <td> <div class="selang"></div></td>
                    <td class="det">
                        <h2>{{$event['event_title']}}</h2>
                        Event: {{$event['event_type']}} <br><br>
                        Package: {{$event['livestock_type']}} <br><br>
                        Date: {{$event['event_date']}} <br><br>
                        Location: {{$event['event_location']}} <br><br>
                        Price: RM{{$event['livestock_price']}} <br><br>
      
                    </td>
                </tr>
            </table>
              
            <br>

            <a class="view" href="viewevent/{{$event['id']}}">View Details</a>     

        </div>

    </div>

    @endforeach

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
       
        
    }

    h1{ 
        text-align: center;

    }

    .container{
        background-color: #003748;
        color: white;
        margin: 5%;
        margin-left: 10%;
        margin-right: 15%;
        height: 350px;

    }


    table, tr, td{
        color: white;
        margin-left: 5%;
        
    }

    .pic, img{
        width: 300px;
        height: 200px;
        background-color: grey;
        
    }

    .selang{
        width: 70px;
        height: 200px;
        background-color: #003748;
        
    }

    .det{
        margin-left: 50px;
    }

    .view{
        background-color: #ededed;
        color: black;
        text-align: center;
        padding: 7px 30px;
        text-decoration: none;
        border: 1px solid #7A7979;
        float: right;
        margin-right: 7%;
        
    }

</style>