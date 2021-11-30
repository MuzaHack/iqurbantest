@include ('topnav')

<body>


<div class="bg">

    <h1>Edit Event Details</h1>

    <div  style="height: 30px;"></div>

    <form class="form" action="/editevent" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$events['id']}}"><br><br>

    <h3>Organization Information</h3>

    <label>Organization Name:</label><br>
    <input type="text" class="input" name="organization_name" value="{{$events['organization_name']}}"><br><br>

    <label>Organization Type:</label><br>
    <select class="input" name="organization_type" value="{{$events['organization_type']}}">
        <option value="Mosque">Mosque</option>
        <option value="Livestock Provider">Livestock Provider</option>
        
    </select><br><br>

    <label>Bank Name:</label><br>
    <select class="input" name="bank_name">
        <option value="Maybank">Maybank</option>
        <option value="RHB">RHB</option>
        <option value="Public Bank">Public Bank</option>
    </select><br><br>

    <label>Account Name:</label><br>
    <input type="text" class="input" name="account_name" value="{{$events['account_name']}}"><br><br>

    <label>Account No:</label><br>
    <input type="text" class="input" name="account_no" value="{{$events['account_no']}}"><br><br><br>

    <h3>Event Information</h3>

    <label>Event Type:</label><br>
    <select class="input" name="event_type">
        <option value="Qurban">Qurban</option>
        <option value="Aqiqah">Aqiqah</option>
    </select><br><br>

    <label>Date:</label><br>
    <input type="text" class="input2" name="event_date" value="{{$events['event_date']}}"><br><br>

    <label>Title:</label><br>
    <input type="text" class="input" name="event_title" value="{{$events['event_title']}}"><br><br>

    <label>Description:</label><br>
    <textarea name="event_description" class="input1" cols="30" rows="10">{{$events['event_description']}}</textarea> <br><br>

    <label>Location:</label><br>
    <input type="textarea" class="input" name="event_location" value="{{$events['event_location']}}"><br><br>

    <label>Contact Number for Event:</label><br>
    <input type="text" class="input2" name="event_contact" value="{{$events['event_contact']}}"><br><br><br>

    <h3>Lifestock Information</h3>

    <label>Livestock:</label><br>
    <select class="input2" name="livestock_type" placeholder="{{$events['livestock_type']}}">
        <option value="Cow (part)">Cow (part)</option>
        <option value="Cow (whole)">Cow (whole)</option>
        <option value="Lamb (part)">Lamb (part)</option>
        <option value="Lamb (whole)">Lamb (whole)</option>
        <option value="Goat (part)">Goat (part)</option>
        <option value="Goat (whole)">Goat (whole)</option>
        <option value="Camel (part)">Camel (part)</option>
        <option value="Camel (whole)">Camel (whole)</option>

    </select><br><br>

    <label>Set Price:</label><br>
    <input type="text" class="input2" name="livestock_price" value="{{$events['livestock_price']}}"><br><br><br>

    <h3>Upload Image for Event</h3> <br>
    <input type="file" name='image' ><br><br><br>

    <input type="hidden" name="event_image" value="{{$events['event_image']}}"><br><br>

    <a type="submit" class="button" href="{{ url()->previous() }}">Return</a>
    <button class="button" type="submit">Update</button>

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
        margin-right: 50px;
        margin-top: 50px;
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
    
</style>