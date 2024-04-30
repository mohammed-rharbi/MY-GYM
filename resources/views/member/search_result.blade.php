@extends('layouts.app')

@section('title', 'Articles')

@section('content')



<div class="container py-4">

	
<div class="container justify-content-center p-5 mr-5 mt-5 ">
    <div class="row">
        <form action="{{ route('search') }}" method="GET">
        <div class="col-md-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control input-text" name="query" placeholder="Search ...."  aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-warning btn-lg" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>    
        </div>  
       </form>      
    </div>
</div>


	 

		<div id="categoryCarousel" class="carousel slide mb-4" data-ride="carousel">
			<div class="carousel-inner mb-5">
				@foreach($categories->chunk(4) as $chunk)
				<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
					<div class="row">
						@foreach($chunk as $category)
						<div class="col-md-3">
							<a href="{{ route('article_category', $category->id) }}">
								<button type="button" class="btn btn-outline-info btn-block category-btn" data-mdb-ripple-init data-mdb-ripple-color="dark">{{ $category->name }}</button>
							</a>
						</div>
						@endforeach
					</div>
				</div>
				@endforeach
			</div>
			<a class="carousel-control-prev" href="#categoryCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#categoryCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
		

		

		@if ($results->isEmpty())
		
		<h4 class="text-dark text-center">No articles found</h4>

		@endif

	
        @foreach ($results as $article)
    
		<article class="postcard light yellow">
			<a class="postcard__img_link" href="{{ route('article.show', $article->id) }}">
				<img class="postcard__img" src="/storage/{{ $article->img }}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title yellow"><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>{{ $article->created_at->format('M d, Y') }}
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">{!! substr($article->content, 0, 250) !!}</div>
				<ul class="postcard__tagbox">

                    <a href="{{ route('Author_Profile' , $article->user->id ) }}">
                        <li class="tag__item"><i class="fas fa-user mr-2"></i>{{ $article->user->name }}</li>
                    </a>


                    <a href="{{ route('article_category',$article->category->id ) }}">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ $article->category->name }}</li>
                    </a>


					<li class="tag__item play yellow">
						<a href="{{ route('article.show', $article->id) }}"><i class="fas fa-arrow-circle-right mr-2"></i>Read More</a>
					</li>
				</ul>
                
			</div>
		</article>


        @endforeach


        <div class="text-center mt-5">
            {{ $results->links() }}
        </div>
	</div>
@endsection



