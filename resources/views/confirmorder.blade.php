@include ('topnav')

<body>
    
<div class="bg">

<h1>Confirm Order</h1>

<section class="container">
  <div class="one">

    <div class="bank">

    
    
    <div class="smolspace"></div>
    <table>
        <tr>
            <td>Bank Name</td>
            <td>: {{$event['bank_name']}}</td>
        </tr>
        <tr>
            <td>Account Name</td>
            <td>: {{$event['account_name']}}</td>
        </tr>
        <tr>
            <td>Account Number</td>
            <td>: {{$event['account_no']}}</td>
        </tr>
    </table>
    

    </div>

    <h4>Please make a payment to the bank account provided and submit the receipt.</h4> <br>
    <br>

    

    <form action="/confirmorder" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$order['id']}}">

    <input type="file" name="proof"> <br><br> <span>@error('proof'){{$message}}@enderror</span> 

    <input type="checkbox" name="" id=""> I agree with all the terms & conditions <br>


    <button type="submit">Submit</button>
    </form>

    

    <a href="/cancelorder/{{$order['id']}}">return to previous page</a>

    

  </div>
  <div class="two">

    <h2>Order Summary</h2>

    <table>
        <tr>
            <td>Order Id</td>
            <td>: {{$order['id']}}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>: {{$order['order_name']}}</td>
        </tr>
        <tr>
            <td>Date (for Aqiqah)</td>
            <td>: {{$order['order_date']}}</td>
        </tr>
        <tr>
            <td>Event</td>
            <td>: {{$order['event_id']}}</td>
        </tr>
        <tr>
            <td>Location</td>
            <td>: {{$event['event_location']}}</td>
        </tr>
        <tr>
            <td>Package</td>
            <td>: {{$order['package_amount']}} </td>
        </tr>
        <tr>
            <td>Note</td>
            <td>: {{$order['order_note']}}</td>
        </tr>
        <tr>
            <td> <br><br> Total</td>
            <td> <br><br> : RM {{$order['order_total']}}</td>
        </tr>
    </table>

  </div>
</section>



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

    h4{
        margin:10px;
    }

    .container {
        width: 80%;
        height: 200px;
        background: aqua;
        margin: auto;
  
    }

    .one {
        width: 50%;
        height: 400px;
        background: white;
        float: left;
        border-collapse: collapse;
        border: 1px solid black;
    }

    .two {
        margin-left: 15%;
        height: 400px;
        background: #003748;
        color: white;
    }

    .bank{
        margin: 10%;
        width: 80%;
        height: 100px;
        background: #003748;
        
    }

    .smolspace{
        height: 3px;
    }

    table{
        color: white;
        margin: 5%;
    }

    h2{
        margin: 5%;
        text-align: center;
    }

   
</style>

