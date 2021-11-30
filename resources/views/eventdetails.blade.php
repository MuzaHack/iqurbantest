@include ('topnav')

<body>
    
    <div class="bg">

        <h1>Event Details</h1>

        @if ($events)

        <div class="container">

        <h2>{{$events['event_title']}}</h2>

            <div class="pic" >
                <img src="{{ asset('img/'. $events->event_image)}}" alt="No image">

            </div>
        </div>

        <div class="container">

            <div class="details">

                <br><br><br>

               
                

                <h3>Organizer Information</h3>


                <table>
                    <tr>
                        <td class="cat">Organization Name</td>
                        <td>: {{$events['organization_name']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Organization Type</td>
                        <td>: {{$events['organization_type']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Bank Name</td>
                        <td>: {{$events['bank_name']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Account Name</td>
                        <td>: {{$events['account_name']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Account No</td>
                        <td>: {{$events['account_no']}}</td>
                    </tr>
                 
                </table>

                <h3>Event Information</h3>

                <table>
                    <tr>
                        <td class="cat">Event Type</td>
                        <td>: {{$events['event_type']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Date</td>
                        <td>: {{$events['event_date']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Title</td>
                        <td>: {{$events['event_title']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Description</td>
                        <td>: {{$events['event_description']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Location</td>
                        <td>: {{$events['event_location']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Contact Number for Event</td>
                        <td>: {{$events['event_contact']}}</td>
                    </tr>
                </table>

                <h3>Lifestock Information</h3>

                <table>
                    <tr>
                        <td class="cat">Livestock</td>
                        <td>: {{$events['livestock_type']}}</td>
                    </tr>
                    <tr>
                        <td class="cat">Set Price</td>
                        <td>: RM{{$events['livestock_price']}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

               

                <a type="submit" class="button" href='/registeredevent'>Return</a>
                <a type="submit" class="button" href="/editevent/{{$events['id']}}">Edit Event Details</a>

            
            
                <br><br><br><br><br><br><br><br>
            </div>

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
        height: 2000px;
        
    }

    h1 { 
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;

    }

    .container{
        background-color: #003748;
        color: white;
        margin: 10%;
        
    }

    .pic, img{
        width: 300px;
        height: 200px;
        background-color: grey;
        
    }

    table{
        color: white;
        
    }

    td{
        height: 30px;
        
    }

    .cat{
        width: 200px;
    }

    .details{
        margin: 5%;

    }

    .button{
        margin-top: 100px;
        background-color: #F3F1F1;
        text-align: center;
        padding: 12px 40px;
        text-decoration: none;
        border: 1px solid #525259;
        font-size: 12px;
    }


</style>


{{-- @foreach($events as $event)


{{$event['organization_name']}}<br><br>
{{$event['organization_type']}}<br><br>
{{$event['bank_name']}}<br><br>
{{$event['account_name']}}<br><br>
{{$event['account_no']}}<br><br>
{{$event['event_type']}}<br><br>
{{$event['event_date']}}<br><br>
{{$event['event_title']}}<br><br>
{{$event['event_description']}}<br><br>
{{$event['event_location']}}<br><br>
{{$event['event_contact']}}<br><br>
{{$event['event_image']}}<br><br>
{{$event['livestock_type']}}<br><br>
{{$event['livestock_price']}}<br><br>

endforeach --}}

