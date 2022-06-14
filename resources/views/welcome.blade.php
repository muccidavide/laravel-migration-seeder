@extends('layout.app')

@section('content')

<div class="container-fluid mb-3">
    <div class="row">
        @forelse($travels as $travel)
        <div class="col-12">

            <div  class="card_travel my-2">
                <a class="text-decoration-none text-black" href="{{ route('travels.show', $travel) }}">
                    <div class="card_title text-center">
                        <h2>{{ $travel->travel_title}}</h2>
                    </div>
                    <div class="card_img text-center">
                        <img style="height: 300px;" class="img-fluid w-75" src="{{ $travel->image }}" alt="">
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
</div>

@endsection