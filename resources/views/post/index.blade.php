@extends('base')

@section('title', config('app.name').'-posts')

@section('content')


<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page__title blog__title">Articles</h1>
                <div class="blog__grid">
                    <!-- blog grid -->
                    

                    <div class="row">

                        @foreach ($posts as $post)
                        <div class="col col--sm-6 col--md-4">
                            <a href="{{route('articles.show', [$post->slug(), $post])}}" class="blog__item">
                                <figure class="blog__item-img">
                                    <img src="img/article-{{$loop->iteration }}.jpg" alt="{{$post->title}}">
                                </figure>
                                <h5 class="blog__item-title">{{$post->title}}</h5>
                                <p class="blog__item-text">{!! Str::limit($post->content, 150) !!}</p>
                                <p class="blog__item-date">{{$post->created_at->translatedFormat('d M Y')}}</p>
                            </a>
                        </div>
                        @endforeach
                    
                    </div>
                    

                    <!-- end of blog grid -->
                    <div class="blog__pagination">
                        <!-- pagination -->
                        
                        <ul class="pagination">

                            <li class="pagination__item pagination__item--next">
                                <a href="{{$posts->previousPageUrl()}}" class="pagination__link">Prev</a>
                            </li>

                            @for ($i = 1; $i <= $posts->lastPage(); $i++)       
                            <li class="pagination__item">
                                <a href="{{ $posts->url($i) }}" class="pagination__link">{{ $i }}</a>
                            </li> 
                            @endfor

                            <li class="pagination__item pagination__item--next">
                                <a href="{{$posts->nextPageUrl()}}" class="pagination__link">Next</a>
                            </li>  
                          
                        </ul>
                                                <!-- end of pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection