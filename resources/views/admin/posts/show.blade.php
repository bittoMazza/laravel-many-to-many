@extends('layouts.app')


@section('content')
    <div class="container text-center mt-3">
        <h2 class="font-bold">{{ $post->title }}</h2>
        <h4 class="">Tags : 
            @forelse ($post->tags as $tag)
             <span class="font-bold">                 
                 {{ $tag->name }} -
             </span>
            @empty
                <span>Non sono presenti tag</span>
            @endforelse
            </h4>
        <p class="p-3">{{ $post->user->name }}</p>
        <div>
            <img src="{{ $post->thumb }}" alt="">
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="my-5">Data Post : {{ $post->post_date }}</h4>
                <h4 class="my-5">Contenuto Post  : {{ $post->post_content }}</h4>
            </div>
        </div>
    </div>
@endsection