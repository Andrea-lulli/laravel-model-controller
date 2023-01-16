@extends('layout.layout')

@section('main-content')
    <div class="home">
        <h1>Lista Film</h1>
    </div>
    <div class="box-card w-75 row ">
        @foreach ($all_movies as $elem)
            <div class="card col-3  m-3 p-2">
                <h4>{{ $elem->title }}</h4>
                <p>{{ $elem->nationality }}</p>
                <p>{{ $elem['date']}}</p>
                <p>{{ $elem->vote }}</p>
            </div>
        @endforeach
    </div>

    <div class="">
        <h2>Titolo che iniziano per T</h2>
        @foreach ($Movie_filtered as $elem)
            <p>{{ $elem->title }}</p>
        @endforeach
    </div>
@endsection
