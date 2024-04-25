@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header bg-gradient-primary text-white">
                    <img src="/storage/{{ $article->img }}" alt="Image Title">
                </div>
                <div class="card-body">
                    <h5 style="font-size: 40px; font-style: oblique;">{{ $article->title }}</h5>
                    <p class="card-text">{!! $article->content !!}</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted">Author: {{ $article->user->name }}</small>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <small class="text-muted">Published: {{ $article->created_at->format('M d, Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<style>

.card-header {
    position: relative;
    padding: 0;
    overflow: hidden;
}

.card-header img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover; /* This ensures the image covers the entire header */
}


</style>