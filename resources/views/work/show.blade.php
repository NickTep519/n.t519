@extends('base')

@section('title', config('app.name') . '-works/'.$work->title)

@section('content')

<div class="project">
    <div class="container">
        <div class="row">
            <div class="col col--sm-12 col--md-12 col--lg-10 col--lg-offset-1">
                <h1 class="page__title project__title">{{$work->title}}</h1>
                <div class="project__image">
                    <div class="row">
                        <div class="col">
                            <figure class="project__img project__img--main">
                                <img src="{{asset("img/project-image.jpg")}}" alt="Architecure magazine">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="project__client">
                    <figure class="project__client-image">
                        <img src="{{asset('img/project-client.jpg')}}" alt="client">
                    </figure>
                    <div class="project__client-info">
                        <h3 class="project__client-heading">Problematique</h3>
                        <p class="project__client-text">{{$work->problematic}}</p>
                        <h3 class="project__client-heading">Task</h3>
                        <p class="project__client-text">@foreach ($work->tasks as $task) {{$task->name}} {{!$loop->last ? ',' : ''}} @endforeach</p>
                        <p class="project__client-text"><a class="project__link" href="{{$work->link}}" target="_blank"><i class="icon icon--link"></i>{{$work->title}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project__description">
        <div class="container">
            <div class="row">
                <div class="col col--sm-10 col--sm-offset-1 col--md-10 col--md-offset-1 col--lg-6 col--lg-offset-3">
                
                    <p class="project__description-text">
                       {!! $description !!}
                    </p>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="row">
                <div class="col col--sm-12 col--md-12 col--lg-10 col--lg-offset-1">
                    <figure class="project__img project__img--secondary">
                        <img src="img/project-secondary.png" alt="Secondary image of project">
                    </figure>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col--sm-10 col--sm-offset-1 col--md-10 col--md-offset-1 col--lg-6 col--lg-offset-3">
                    <div class="project__steps">
                        <h5 class="project__steps-heading">
                            Steps In Installing Rack Mount Lcd Monitors
                        </h5>
                        <ul class="list project__steps-list">
                            <li class="list__item project__steps-list-item">We shall find peace. We shall hear the angels, we shall see the sky sparkling with diamonds.</li>
                            <li class="list__item project__steps-list-item">Don't tell me the moon is shining; show me the glint of light on broken glass.</li>
                            <li class="list__item project__steps-list-item">Any idiot can face a crisis - it's day to day living that wears you out.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="container">
            <div class="project__contact">
                <div class="row">
                    <div class="col col--sm-12 col--md-12 col--lg-10 col--lg-offset-1">
                        <input type="checkbox" id="show-contact-form" class="contact-form__status" hidden />
                        <div class="contact-preview project__contact-preview">
                            <p class="contact-preview__text">Vous avez des questions, des propositions&nbsp;de&nbsp;cooperation ?</p>
                            <p class="contact-preview__text">N'hésitez pas à me contacter !</p>
                            <label for="show-contact-form" class="contact-preview__label btn">Contactez</label>
                        </div>

                        <div class="project__contact-form">
                            <!-- contact form -->

                            <form action="{{route('contact')}}" method="POST" class="form" > <!-- id="contact-form" -->
                                @csrf

                                <div class="row">
                                    <div class="col field">
                                      <input id="name" type="text" name="name" class="field__input field--name required" required>
                                      <label for="name" class="field__label">Nom</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col field">
                                      <input id="email" type="email" name="email" class="field__input field--email required" required>
                                      <label for="email" class="field__label">Email</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col field">
                                      <input id="phone" type="Tel" name="phone" class="field__input field--email required" required>
                                      <label for="phone" class="field__label">Tel</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col field">
                                      <textarea id="text" name="message" class="field__textarea field--message required" required></textarea>
                                      <label for="text" class="field__label">Message</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                      <div class="form--notice"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn form__btn form__btn--submit" value="Send message">
                                    </div>
                                </div>
                            </form>
                            <!-- end of contact form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section project__others">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- portfolio -->
                    
                    <div class="portfolio portfolio--grid">

                        @foreach ($works as $work)
                        <div class="portfolio__item">
                            <a href="{{route('works.show', $work)}}" target="_top" class="portfolio__item-link">
                                <div class="portfolio__item-img"> 
                                    <img src="img/project-{{ $loop->iteration > 8 ? $i++ : $loop->iteration}}.jpg" alt="{{$work->title}}">
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
                            <a href="{{route('works.index')}}"><button class="btn portfolio__more-btn">Voir plus</button></a>
                        </div>
                    </div>

                    <!-- end of portfolio -->
                </div>
            </div>
        </div>
    </section>
</div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
@endsection
    