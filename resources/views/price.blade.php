<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
 <div
            class="page-holder bg-cover"
            style="
            background-image: url('https://images.unsplash.com/photo-1587019158091-1a103c5dd17f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
           height: 900px;
            
            
            
            "
            >

    <div class="col-md-6 offset-md-3">
        
<br><br><br><br>
            

    
    <header class="text-center text-white py-5">
        <h1 class="display-4 font-weight-bold mb-4">Amount to Pay</h1>
        <br><br>
        </header>

        <ul class="list-group">
            
            <li class="list-group-item">Price: {{ $data->flightOffers[0]->price->total }}</li>
        </ul>
        <br>

        <form method="get" class="mt-3">         
            <a class="btn btn-primary form-control" role="button" href="payment" p class="lead mb-0">Book Now
            </a>

        </form>
    </div>
    </div>


</body>
</html>