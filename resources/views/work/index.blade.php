@extends('base')

@section('title', config('app.name'). '-works')

@section('content')
    
<div class="works">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page__title works__title">Works</h1>
                <!-- portfolio -->

                <div class="portfolio portfolio--grid"> @php $i = 1 ;  @endphp

                    @foreach ($works as $work)
                    <div class="portfolio__item">
                        <a href="{{route('realisations.show', $work)}}" target="_top" class="portfolio__item-link">
                            <div class="portfolio__item-img"> 
                                <img src="img/project-{{ $loop->iteration > 8 ? $i++ : $loop->iteration}}.jpg" alt="Dostoyevsky website">
                            </div>
                            <div class="portfolio__item-title">
                                <h5 class="portfolio__title">{{$work->title}}</h5>
                                <small class="portfolio__subtitle">@foreach ($work->tags as $tag)
                                    {{ $tag->name }} {{ !$loop->last ? ',' : '' }}
                                @endforeach</small>
                            </div>
                        </a>
                    </div>     
                    @endforeach
                
                    <div class="portfolio__more">
                        <!--<button class="btn portfolio__more-btn">Show more</button>-->
                    </div>
                </div>

                <!-- pagination -->
                    
                <div class="blog__pagination">
                        
                    <ul class="pagination">

                        <li class="pagination__item pagination__item--next">
                            <a href="{{$works->previousPageUrl()}}" class="pagination__link">Prev</a>
                        </li>

                        @for ($i = 1; $i <= $works->lastPage(); $i++)       
                        <li class="pagination__item">
                            <a href="{{ $works->url($i) }}" class="pagination__link">{{ $i }}</a>
                        </li> 
                        @endfor

                        <li class="pagination__item pagination__item--next">
                            <a href="{{$works->nextPageUrl()}}" class="pagination__link">Next</a>
                        </li>  
                      
                    </ul>
                                            <!-- end of pagination -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection