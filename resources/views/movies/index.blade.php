@extends('layouts.app')

@section('metaTitle', 'Movies')

@section('content')
    <div class="container">
        <section class="section">
            <h2 class="section-title">
                Movies
            </h2>
            <span class="go-to">
                Torna alla
                <a href="{{ route('home') }}" class="link-togo">home</a>
            </span>
            <div class="cards">
                @foreach ($movies as $movie)
                    <a href="{{ route('movie', $movie->id) }}" class="card__wrapper">
                        <h3 class="title_wrapper">
                            <span class="title">
                                {{ $movie->title }}
                            </span>
                            <span class="original-title">
                                {{ $movie->original_title }}
                            </span>
                        </h3>
                        <ul class="info_wrapper">
                            <li class="info">
                                Nazionalit&aacute;:
                                <span class="detail">
                                    {{ $movie->nationality }}
                                </span>
                            </li>
                            <li class="info">
                                Data:
                                <span class="detail">
                                    {{ $movie->date }}
                                </span>
                            </li>
                            <li class="info">
                                Voto:
                                <span class="detail">
                                    {{ $movie->vote }}
                                </span>
                            </li>
                        </ul>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
@endsection
