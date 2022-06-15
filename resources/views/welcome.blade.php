@extends('layout.app')

@section('content')

<div class="container-fluid mb-3">
    <h1 class="text-uppercase text-center my-3">Pacchetti Viaggio Estate 2022</h1>
    <div class="row">
        @forelse($travels as $travel)
        <div class="col-12 g-3">

            <div  class="card_travel  ">
                <a class="text-decoration-none text-black" href="{{ route('travels.show', $travel) }}">
                    <div class="card_title text-center my-3">
                        <h2>{{ $travel->travel_title}}</h2>
                    </div>
                    <div class="card_img text-center ">
                        <img style="height: 300px;" class="img-fluid w-75 rounded" src="{{ $travel->image }}" alt="">
                    </div>
                </a>
            </div>

        </div>
        @empty
        <h2>
            No Travel available right now! 😥
        </h2>
        @endforelse
    </div>
    <div class="more text-center mt-3">
        <a href="{{ route('travels.index') }}">
            <button type="button" class="btn btn-secondary">Scopri di Più</button>
        </a>
    </div>
</div>

@endsection