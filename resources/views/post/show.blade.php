@extends('base')

@section('title', config('app.name').'-work/{{$pots->title}}')

@section('content')

<div class="article">
    <div class="container container--xl">
        <div class="row">
            <div class="col col--lg-10 col--lg-offset-1">
                <h1 class="page__title article__title">{{$post->title}}</h1>
                <div class="page__subtitle article__subtitle">
                    <div class="article__date">{{$post->created_at->translatedFormat('d M Y')}}</div>
                    <a href="#comments" class="article__stat"><i class="icon icon--comment"></i>{{$post->comments->count()}}</a>
                </div>
            </div>
            <div class="col">
                <div class="article__content">
                    <div class="row">
                        <div class="col col--sm-10 col--sm-offset-1 col--md-10 col--md-offset-1 col--lg-8 col--lg-offset-2">
                            <div class="article__text article__text--large">
                                <p</p>
                            </div>
                        </div>
                        <div class="col col--lg-10 col--lg-offset-1">
                            <div class="article__image">
                                <figure>
                                    <img src="{{asset('img/article-1.jpg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        
                        <div class="col col--sm-10 col--sm-offset-1 col--md-10 col--md-offset-1 col--lg-8 col--lg-offset-2">
                            <h5 class="article__heading">{{$post->title}}</h5>
                            <div class="article__text">
                                <p> {!! $content !!} </p>
                            </div>
                        </div>
                       
                    </div>
                </div>

                <div class="article__shares">
                    <div class="row">
                        <div class="col col--sm-10 col--sm-offset-1 col--md-10 col--md-offset-1 col--lg-8 col--lg-offset-2">
                            <div class="article__shares-icon">
                                <a href="https://x.com/"><i class="icon icon--twitter"></i></a>
                            </div>
                            <div class="article__shares-icon">
                                <a href="https://web.facebook.com/"><i class="icon icon--facebook"></i></a>
                            </div>
                            <div class="article__shares-icon">
                                <a href="https://www.pinterest.fr/"><i class="icon icon--pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="article__comments">
                    <div class="row">
                        <div class="col col--md-10 col--md-offset-1 col--lg-8 col--lg-offset-2">
                            <!-- comments -->
                            
                            <div class="comments" id="comments">
                                <div class="comments__header">
                                    <div class="comments__label">
                                        Commentaires
                                    </div>
                                    <span class="comments__count">{{$post->comments->count()}}</span>
                                    <div class="comments__add">
                                        <a href="#commentsForm" class="btn">Ajouter</a>
                                    </div>
                            </div>

                            <div class="comments__body">
                                <ul class="comments__list">
                                    
                                    @forelse ($post->comments as $comment)
                                    <li class="comments__list-item">
                                        <div class="comment">
                                            <a href="article.html#" class="comment__photo">
                                                <figure class="comment__photo-wrapper">
                                                    <img src="{{asset('img/ava_empty.png')}}" alt="avatar" class="comment__photo-img">
                                                </figure>
                                            </a>

                                            <div class="comment__content">
                                                <a href="article.html#" class="comment__author">{{ $comment->name }}</a>
                                                <div class="comment__time">{{ $comment->created_at->diffForHumans() }}</div>
                                                <div class="comment__text"> {{ $comment->content }} </div>
                                                <div class="comment__reply">
                                                    <a href="#commentsForm" class="btn btn--reply">
                                                        Repondre
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($comment->replies as $reply)
                                        <ul class="comments__list">
                                            <li class="comments__list-item">
                                                <div class="comment">
                                                    <a href="article.html#" class="comment__photo">
                                                        <figure class="comment__photo-wrapper">
                                                            <img src="{{asset('img/ava_empty.png')}}" alt="avatar" class="comment__photo-img">
                                                        </figure>
                                                    </a>
                                                    <div class="comment__content">
                                                        <a href="article.html#" class="comment__author">{{$reply->name}}</a>
                                                        <div class="comment__time"> {{ $reply->created_at->diffForHumans() }} </div>
                                                        <div class="comment__text">{{ $reply->content }}</div>
                                                        <div class="comment__reply">
                                                            <a href="article.html#" class="btn btn--reply">
                                                                Repondre
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>    
                                        @endforeach

                                        
                                    </li>            
                                    @empty
                                        Commenter en premier
                                    @endforelse
                            
                                </ul>
                            </div>

                            <div class="comments__footer">
                                <div class="comments__form" id="commentsForm">
                                    <!-- commentForm -->
        
                                    <form action="{{route('comment', $post)}}" method="POST" class="form form--comment comment">
                                        @csrf

                                        <div class="comment__photo">
                                            <figure class="comment__photo-wrapper">
                                                <img src="{{asset('img/ava_empty.png')}}" alt="avatar" class="comment__photo-img">
                                            </figure>
                                        </div>

                                        <div class="comment__content">
                                            <div class="row">
                                                <div class="col field">
                                                    <textarea id="text" name="content" class="field__textarea" required></textarea>
                                                    <label for="text" class="field__label">Commentaires</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col--sm-6 field">
                                                    <input id="name" name="name" type="text" class="field__input" required>
                                                    <label for="name" class="field__label">Name</label>
                                                </div>

                                                <div class="col col--sm-6 field">
                                                    <input id="email" type="email" name="email" class="field__input" required>
                                                    <label for="email" class="field__label">Email</label>
                                                </div>

                                                <div class="col col--sm-6 field">
                                                    <input id="email" type="Tel" name="phone" class="field__input" required>
                                                    <label for="email" class="field__label">Phone</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <input type="submit"  class="btn form__btn form__btn--submit" value="Post comment">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end of commentForm -->
                                </div>
                            </div>
                        </div>
                            <!-- end of comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
    
@endsection