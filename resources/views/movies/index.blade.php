@extends('layouts.app')

@section('metaTitle', 'Movies')

@section('content')
    <div class="container">
        <section class="section">
            <h2 class="section-title">
                Movies
            </h2>
            <div class="cards">
                @foreach ($movies as $movie)
                    <div class="card__wrapper">
                        <h3 class="title_wrapper">
                            <span class="title">
                                {{ $movie->title }}
                            </span>
                            <span class="original-title">
                                {{ $movie->original_title }}
                            </span>
                        </h3>
                        <div class="info_wrapper">
                            <span class="info">
                                Nazionalit&aacute;:
                                <span class="detail">
                                    {{ $movie->nationality }}
                                </span>
                            </span>
                            <span class="info">
                                Data:
                                <span class="detail">
                                    {{ $movie->date }}
                                </span>
                            </span>
                            <span class="info">
                                Voto:
                                <span class="detail">
                                    {{ $movie->vote }}
                                </span>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
