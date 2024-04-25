@extends('layouts.app')

@section('title', 'Articles')

@section('content')



    {{-- @include('component.search') --}}



	<div class="container py-4">

		@if ($articles->isEmpty())
		
		<h4 class="text-center mt-5">No Article Assosaited with this category</h4>
		<img class="img-fluid rounded" loading="lazy" src="/storage/images/gif.gif" alt="Team Member 1">

		@endif

        @foreach ($articles as $article)
            
		<article class="postcard light yellow">
			<a class="postcard__img_link" href="{{ route('article.show', $article->id) }}">
				<img class="postcard__img" src="/storage/{{$article->img}}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title yellow"><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>{{ $article->created_at->format('M d, Y') }}
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">{!! substr($article->content, 0, 350) !!}</div>
				<ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fas fa-user mr-2"></i>{{ $article->user->name }}</li>
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ $article->category->name }}</li>
					<li class="tag__item play yellow">
						<a href="{{ route('article.show', $article->id) }}"><i class="fas fa-arrow-circle-right mr-2"></i>Read More</a>
					</li>
				</ul>
			</div>
		</article>

        @endforeach


	</div>
@endsection
