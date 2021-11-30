@include ('topnav')

<body>
    
    <div class="bg">

    <div>

    <br><br><br>
    </div>

    <a class="option" href="{{ url()->previous() }}">Return to Order History</a>


        <div class="container">

        <br>

        <h2 class="ed">Event Details</h2>


        <table>
                <tr>
                    <td>

                    <div class="pic" >
                        <img src="{{ asset('img/'. $event->event_image)}}" alt="No image">
                    </div>


                    </td>
                    <td> <div class="selang"></div></td>
                    <td>

                        <div class="det">
                    
                    
                        <table>
                            <tr>
                                <td class="t"><h4>Event Title </h4></td>
                                <td class="t2"><h4>: {{$event['event_title']}}</h4></td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>: {{$event['event_location']}}</td>
                            </tr>
                            <tr>
                                <td>Organizer</td>
                                <td>: {{$event['organization_name']}}</td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td>: {{$event['event_contact']}}</td>
                            </tr>
                            <tr>
                                <td>Event</td>
                                <td>: {{$event['event_type']}}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>: {{$event['event_date']}}</td>
                            </tr>
                        </table>
                    
                        </div>
                    </td>
                
                </tr>
        </table>


    </div>

    <div class="container">

        <br>

        <h2 class="od">Order Details</h2>


        <div class="resit">

            <br>

            <table>
            
                <tr>
                    <td class="r">Participant Name</td>
                    <td class="black">:</td>
                    <td class="r2"> {{$order['order_name']}}</td>
                </tr>
                <tr>
                    <td class="r">Date (for Aqiqah)</td>
                    <td class="black">:</td>
                    <td class="r2"> {{$order['order_date']}}</td>
                </tr>
                <tr>
                    <td class="r">Note</td>
                    <td class="black">:</td>
                    <td class="r2"> {{$order['order_note']}}</td>
                </tr>
                <tr>
                    <td class="r">Package</td>
                    <td class="black">:</td>
                    <td class="r2"> {{$event['livestock_type']}} (x{{$order['package_amount']}})</td>
                </tr>
                <tr>
                    <td class="r">Total Price </td>
                    <td class="black">:</td>
                    <td class="r2"> {{$order['order_total']}} </td>
                </tr>
                <tr>
                    <td class="r"> Order Created At </td>
                    <td class="black">:</td>
                    <td class="r2"> {{$order['date_created']}} </td>
                </tr>
            </table>

            <br><br><br>

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
       
        
    }

    h1 { 
        text-align: center;

    }

    .option{
        margin: 5%;
        background-color: #ededed;
        color: black;
        text-align: center;
        padding: 10px 20px;
        text-decoration: none;
        border: 1px solid #7A7979;
        
    }

    .ed{
        margin-left: 5%;
    }

    

    .container{
        background-color: #003748;
        color: white;
        margin: 5%;
        margin-left: 5%;
        margin-right: 5%;
        height: 350px;

    }

    table, tr, td{
        color: white;
        margin-left: 5%;
        height: 25px;
        
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

    .od{
        text-align: center;
    }

    .resit{
        margin: 2% 20% 20%;
        background: white;
        
    }


    .t{
        width: 100px
    }

    .t2{
        width: 300px
    }

    .r{
        width: 150px;
        color: black;
        font-weight: 5;
    }

    .black{
        color: black;
        
    }

    .r2{
        width: 300px;
        color: black;
        
    }

</style>