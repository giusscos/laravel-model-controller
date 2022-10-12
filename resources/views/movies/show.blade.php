@extends('layouts.app')

@section('metaTitle', 'Movie')

@section('content')
    <div class="container">
        <section class="section movie">
            <h1 class="title_wrapper">
                <span class="title">
                    {{ $movie->title }}
                </span>
                <span class="original-title">
                    {{ $movie->original_title }}
                </span>
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
            </h1>   
        </section>
    </div>
@endsection
