@extends('layout.layout')

@section('main-content')
    <div class="home">
        <h1>Lista Film</h1>
    </div>
    <div class="box-card">
        @foreach ($all_movies as $elem)
            <div class="card">
                <h4>{{ $elem->title }}</h4>
                <p>{{ $elem->nationality }}</p>
                <p>{{ $elem->date }}</p>
                <p>{{ $elem->vote }}</p>
            </div>
        @endforeach
    </div>

    <div>
        <h2>Titolo che iniziano per T</h2>
        @foreach ($Movie_filtered as $elem)
            <p>{{ $elem->title }}</p>
        @endforeach
    </div>
@endsection
