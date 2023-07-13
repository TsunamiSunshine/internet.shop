@extends('layouts.master')

@section('title', 'Все категории ')

@section('content')

    @foreach ($categories as $category)
    <div id="cardall" class="col-sm-8 col-md-4">
        <div class="thumbnail">
            <div id="card-category" class="row">
                <div class="col-md-12">
                    <a href="{{ route('category', $category->code) }}">
                        <img src="{{ Storage::url($category->image) }}">
                        <h2>
                            {{ $category->name }}
                        </h2>
                        <p>
                            {{ $category->description }}
                        </p>
                    </a>
                </div>
            </div>

        </div>



            {{-- <a href="{{ route('category', $category->code) }}">
                <img src="{{Storage::url($category->image)}}">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p> --}}
        </div>
    @endforeach

@endsection
