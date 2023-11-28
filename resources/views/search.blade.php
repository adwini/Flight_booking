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
            class="p-5 text-center bg-image"
            style="
            background-image: url('https://images.unsplash.com/photo-1533052518813-a954a73d1cc2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
            height: 900px; width: auto;"
            >
            
        
    <h2 class="text-center">Search Flights</h2>
    <form action="/api/search" class="mt-3" method="POST">
    @csrf

    <div class="row">
                {{-- <div class="form-group col-6">
                    <input type="text" class="form-control" placeholder="From" name="from" required>
                </div> --}}

                 <div class="form-group col-6">
                    <select class="form-select" aria-label="From" name="from" required>
                        <option selected>From</option>
                        <optgroup label="Asia">
                            <option value="BKK">Bangkok (BKK), Thailand</option>
                            <option value="CAN">Guangzhou (CAN), China</option>
                            <option value="DEL">Delhi (DEL), India</option>
                            <option value="DXB">Dubai (DXB), United Arab Emirates</option>
                            <option value="HKG">Hong Kong (HKG), Hong Kong SAR China</option>
                            <option value="ICN">Seoul (ICN), South Korea</option>
                            <option value="KUL">Kuala Lumpur (KUL), Malaysia</option>
                            <option value="NRT">Tokyo (NRT), Japan</option>
                            <option value="PEK">Beijing (PEK), China</option>
                            <option value="PVG">Shanghai (PVG), China</option>
                            <option value="SGN">Ho Chi Minh City (SGN), Vietnam</option>
                            <option value="SIN">Singapore (SIN), Singapore</option>
                            <option value="TPE">Taipei (TPE), Taiwan</option>
                        </optgroup>
                        <optgroup label="Europe">
                            <option value="AMS">Amsterdam (AMS), Netherlands</option>
                            <option value="ATH">Athens (ATH), Greece</option>
                            <option value="BCN">Barcelona (BCN), Spain</option>
                            <option value="BER">Berlin (BER), Germany</option>
                            <option value="BUD">Budapest (BUD), Hungary</option>
                            <option value="CDG">Paris (CDG), France</option>
                            <option value="CPH">Copenhagen (CPH), Denmark</option>
                            <option value="DUB">Dublin (DUB), Ireland</option>
                            <option value="FCO">Rome (FCO), Italy</option>
                            <option value="FRA">Frankfurt (FRA), Germany</option>
                            <option value="IST">Istanbul (IST), Turkey</option>
                            <option value="LGW">London (LGW), United Kingdom</option>
                            <option value="LIS">Lisbon (LIS), Portugal</option>
                            <option value="LYS">Lyon (LYS), France</option>
                            <option value="MAD">Madrid (MAD), Spain</option>
                            <option value="MUC">Munich (MUC), Germany</option>
                            <option value="ORY">Paris (ORY), France</option>
                            <option value="OSL">Oslo (OSL), Norway</option>
                            <option value="PRG">Prague (PRG), Czech Republic</option>
                            <option value="SVO">Moscow (SVO), Russia</option>
                            <option value="TXL">Berlin (TXL), Germany</option>
                            <option value="VIE">Vienna (VIE), Austria</option>
                            <option value="WAW">Warsaw (WAW), Poland</option>
                            <option value="ZRH">Zurich (ZRH), Switzerland</option>
                        </optgroup>
                    </select>
                </div>

                {{-- <div class="form-group col-6">
                    <input type="text" class="form-control" placeholder="To" name="to" required>
                </div> --}}
                 <div class="form-group col-6">
                    <select class="form-select" aria-label="To" name="to" required>
                        <option selected>To</option>
                        <optgroup label="Asia">
                            <option value="BKK">Bangkok (BKK), Thailand</option>
                            <option value="CAN">Guangzhou (CAN), China</option>
                            <option value="DEL">Delhi (DEL), India</option>
                            <option value="DXB">Dubai (DXB), United Arab Emirates</option>
                            <option value="HKG">Hong Kong (HKG), Hong Kong SAR China</option>
                            <option value="ICN">Seoul (ICN), South Korea</option>
                            <option value="KUL">Kuala Lumpur (KUL), Malaysia</option>
                            <option value="NRT">Tokyo (NRT), Japan</option>
                            <option value="PEK">Beijing (PEK), China</option>
                            <option value="PVG">Shanghai (PVG), China</option>
                            <option value="SGN">Ho Chi Minh City (SGN), Vietnam</option>
                            <option value="SIN">Singapore (SIN), Singapore</option>
                            <option value="TPE">Taipei (TPE), Taiwan</option>
                        </optgroup>
                        <optgroup label="Europe">
                            <option value="AMS">Amsterdam (AMS), Netherlands</option>
                            <option value="ATH">Athens (ATH), Greece</option>
                            <option value="BCN">Barcelona (BCN), Spain</option>
                            <option value="BER">Berlin (BER), Germany</option>
                            <option value="BUD">Budapest (BUD), Hungary</option>
                            <option value="CDG">Paris (CDG), France</option>
                            <option value="CPH">Copenhagen (CPH), Denmark</option>
                            <option value="DUB">Dublin (DUB), Ireland</option>
                            <option value="FCO">Rome (FCO), Italy</option>
                            <option value="FRA">Frankfurt (FRA), Germany</option>
                            <option value="IST">Istanbul (IST), Turkey</option>
                            <option value="LGW">London (LGW), United Kingdom</option>
                            <option value="LIS">Lisbon (LIS), Portugal</option>
                            <option value="LYS">Lyon (LYS), France</option>
                            <option value="MAD">Madrid (MAD), Spain</option>
                            <option value="MUC">Munich (MUC), Germany</option>
                            <option value="ORY">Paris (ORY), France</option>
                            <option value="OSL">Oslo (OSL), Norway</option>
                            <option value="PRG">Prague (PRG), Czech Republic</option>
                            <option value="SVO">Moscow (SVO), Russia</option>
                            <option value="TXL">Berlin (TXL), Germany</option>
                            <option value="VIE">Vienna (VIE), Austria</option>
                            <option value="WAW">Warsaw (WAW), Poland</option>
                            <option value="ZRH">Zurich (ZRH), Switzerland</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group col-6 mt-3">
                    <input type="date" class="form-control" placeholder="Departure Date" name="date" required>
                </div>
                <div class="form-group col-6 mt-3">
                    <input type="number" class="form-control" placeholder="Passengers" name="passengers" required>
                </div>
                <div class="form-group col-12 mt-3">
                    <button class="btn btn-primary form-control" type="submit">Search</button>
                </div>



  
    </div>
</form>

@if(isset($flights) && count($flights) > 0)

    <h4 class="text-center mt-5">{{ count($flights) }} Results</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Duration</th>
                <th scope="col">Price (EUR)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
                <tr onclick="document.getElementById('{{ 'form'.$flight->id }}').submit()" style=”cursor: pointer;”>
                    <th scope="row">{{ $flight->id }}</th>
                    <td>{{ $flight->itineraries[0]->duration }}</td>
                    <td>{{ $flight->price->total }}</td>
                </tr>
                <form action="/api/price" hidden id="{{ 'form' . $flight->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="flight" value="{{ json_encode($flight) }}">
                </form>
            @endforeach
        </tbody>
    </table>

    @else
        <h4 class="text-center mt-5">No Flights</h4>
 </div>
@endif
</body>
</html>