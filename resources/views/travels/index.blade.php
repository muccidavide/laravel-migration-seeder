@extends('layout.app')

@section('content')
<div class="container my-3">
    <h1 class="text-center text-uppercase my-3">Destinazioni Estate 2022</h1>
    <div class="row row-cols-lg-3">
        @forelse($travels as $travel)
        <div class="col">

            <div class="card_travel">
                <a class="text-decoration-none text-black" href="{{ route('travels.show', $travel) }}">
                    <div class="card_title text-center">
                        <h2>{{ $travel->travel_title}}</h2>
                    </div>
                    <div class="card_img">
                        <img class="img-fluid" src="{{ $travel->image }}" alt="">
                    </div>
                </a>
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
        @empty
        <h2>
            No Travel available right now! 😥
        </h2>
        @endforelse
    </div>
</div>
@endsection