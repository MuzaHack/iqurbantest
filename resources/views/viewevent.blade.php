@include ('topnav')

<body>
    
<div class="bg">

    <div>

    <br><br><br>
    </div>

    <a class="option" href="{{ url()->previous() }}">Return to Event List</a>

@if ($events)
    <div class="container">

    <br>

    <h2>{{$events['event_title']}}</h2>
    

        <table>
                <tr>
                    <td>

                    <div class="pic" >
                        <img src="{{ asset('img/'. $events->event_image)}}" alt="No image">
                    </div>


                    </td>
                    <td> <div class="selang"></div></td>
                    <td>

                        <div class="det">
                        
                        <h4>{{$events['event_description']}} </h4> <br>



                        <table>
                            <tr>
                                <td>Location</td>
                                <td>: {{$events['event_location']}}</td>
                            </tr>
                            <tr>
                                <td>Organizer</td>
                                <td>: {{$events['organization_name']}}</td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td>: {{$events['event_contact']}}</td>
                            </tr>
                            <tr>
                                <td>Event</td>
                                <td>: {{$events['event_type']}}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>: {{$events['event_date']}}</td>
                            </tr>
                        </table>
                        
                        </div>
                    </td>
                    
                </tr>
        </table>

    
    </div>

    <div class="orderform">

        <h3 class="con">Confirm Order</h3>

        <form action="confirmorder" method="POST">
        @csrf

        <div class="package">

        <h4 class="set"> <br> Set package amount for {{$events['livestock_type']}} <h4>

        
        <input type="number" class="packageamount" name="package_amount" min="1" max="10">
        <span>@error('package_amount'){{$message}}@enderror</span>

        </div>



        <div class="selang2"></div>

        
        <label>Participant Name:</label> <span>@error('order_name'){{$message}}@enderror</span> <br>
        <input type="text" class="input" name="order_name"><br><br>

        <label>Date (For Aqiqah Only):</label> <br>
        <input type="text" class="input" name="order_date"><br><br>

        <label>Note:</label> <br>
        <input type="text" class="input" name="order_note"><br><br>

        <input type="hidden" name="event_id" value="{{$events['id']}}"><br><br>

        <button type="submit">Confirm Order</button>
        
        </form>

    </div>


 @endif
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

    h2{
        margin-left: 5%;
    }

    .set{
        margin: 5%;
    }

    .con{
        text-align: center;
    }

    .container{
        background-color: #003748;
        color: white;
        margin: 5%;
        margin-left: 5%;
        margin-right: 5%;
        height: 350px;

    }

    .orderform{
        background-color: white;
        margin-left: 5%;
        margin: 5%;
        width: 40%;
        height: 500px;
        border: 3px solid #7A7979;

    }

    .package{
        background-color: #003748;
        color: white;
        margin-left: 5%;
        margin-right: 5%;
        height: 100px;

    }

    .packageamount{
        
        margin-left: 20px;

    }

    form{
        margin: 5%; 
    }

    table, tr, td{
        color: white;
        margin-left: 5%;
        width: 200px;
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

    .selang2{
        width: 70px;
        height: 50px;
        
        
    }

    .det{
        
        width: 500px;

    }

    span{
        font-size: 12px;
        color: red;
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

</style>