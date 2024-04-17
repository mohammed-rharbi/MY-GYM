@extends('layouts.coach')

@section('title', 'My Articles')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-3">
            <a href="{{ route('article.create') }}">
                <button class="btn btn-success btn-lg btn-block">Create Article</button>
            </a>              
        </div>
    </div>

    <div id="articleCarousel" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
            @foreach($articles as $key => $article)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="card mx-auto mt-5" style="width: 45rem;"> <!-- Added mx-auto class to center the card -->
                    <img src="{{ asset($article->img) }}" class="card-img-top" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 20px; font-weight: bold;">{{ $article->title }}</h5>
                        <p class="card-text" style="font-size: 14px;">{!! $article->content !!}</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">By {{ $article->user->name }}</small>
                            </div>
                            <div>
                                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#articleCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#articleCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
@endsection
