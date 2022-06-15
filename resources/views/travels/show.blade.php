@extends ('layout.app')

@section('content')

<div class="container my-3">
    <div class="card_title text-center my-3">
        <h1>{{ $travel->travel_title}}</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col">
            <div class="card_travel ">
                <div class="card_img">
                    <img class="img-fluid w-100" src="{{ $travel->image }}" alt="">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card_details">
                <ul>
                    <li>
                        <strong>Prezzo: </strong>{{ $travel->price}} € a persona
                    </li>
                    <li>
                        <strong>Viaggiatori: </strong>{{ $travel->traveler_number}}
                    </li>
                    <li>
                        <strong>Paese Partenza: </strong>{{ $travel->departure_country }}
                    </li>
                    <li>
                        <strong>Data di partenza: </strong>{{ DateTime::createFromFormat('Y-m-d H:i:s', $travel->departure_date)->format('M d Y H:i') }}
                    </li>
                    <li>
                        <strong>Aeroporto di partenza: </strong>{{ $travel->departure_airport}}
                    </li>
                    <li>
                        <strong>Paese Ritorno: </strong>{{ $travel->arrival_country }}
                    </li>
                    <li>
                        <strong>Data Ritorno: </strong>{{DateTime::createFromFormat('Y-m-d H:i:s', $travel->arrival_date)->format('M d Y H:i') }}
                    </li>
                    <li>
                        <strong>Aeroporto Ritorno: </strong>{{ $travel->arrival_airport}}
                    </li>
                </ul>

            </div>

        </div>
    </div>

</div>






@endsection