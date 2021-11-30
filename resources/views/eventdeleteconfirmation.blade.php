@include ('topnav')



<body>

<div class="bg">

    <div class="space"></div>

    <div class="con">

        <h2 class="notice">Are you sure you want to delete this event?</h2>

        <div class="info">

        <table>
            <tr>
                <td>Event Title</td>
                <td>: {{$data['event_title']}}</td>
            </tr>
            <tr>
                <td>Created at</td>
                <td>: {{$data['date_created']}}</td>
            </tr>
        </table>

        </div>
        
        <div>

        <a type="submit" class="submit" href="/registeredevent"> Cancel </a>
        <a type="submit" class="submit" href="/delete/{{$data['id']}}"> Delete </a>
        
        </div>

    </div>






</div>
  
</body>

<style>

body{
        background-color: #ededed;
        font-family: Arial, Helvetica, sans-serif;

    }
    
.bg{
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

.notice{
    text-align: center;

}

.info{
    margin: auto;
}

.submit{

    margin-left: 20px;
    background-color: #F3F1F1;
    text-align: center;
    padding: 10px 40px;
    text-decoration: none;
    border: 1px solid #080808;
}

.submit:hover{
    background-color: #ddd;
    color: black;   
 }

.space{
    height: 50px;
}

.con {
    border: 1.5px solid #000000;
    background-color: #003748;
    color: white;
    margin-left: 150px;
    margin-right: 150px;
    height: 400px;

}

tr{
    color: white;
}

</style>

