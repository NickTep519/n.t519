@extends('base')

@section('title', config('app.name'))

@section('content')
    
<main class="home">
    <section class="section section--welcome home__welcome">
        <div class="home__welcome-bg parallax" data-stellar-ratio="0.7"></div>
        <div class="home__welcome-layer">
            <div class="container">
                <div class="row">
                    <div class="col col--sm-8 col--sm-offset-2 col--md-12 col--md-offset-0 col--lg-10 col--lg-offset-1">
                        <div class="row">
                            <div class="col col--md-6">
                                <h2 class="home__welcome-title">"Hello, <br>
                                    World !"</h2>
                            </div>
                            <div class="col col--md-6">
                                <p class="home__welcome-content">L'art de coder, c'est l'art de créer des ponts entre rêve et réalité, avec Laravel (pouquoi pas) comme pinceau. 
                                    Alors, chaque ligne de code est une clé. Derrière chacune, un univers prêt à être révélé. Et quand l'idée prend forme, 
                                    le code devient magie. Laravel pourrait être le catalyseur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--portfolio home__portfolio">
        <div class="container">
            
            <!-- portfolio -->

            <div class="portfolio portfolio--grid">

                @foreach ($posts as $post)
                <div class="portfolio__item">
                    <a href="{{route('posts.show', $post)}}" target="_top" class="portfolio__item-link">
                        <div class="portfolio__item-img">
                            <img src="img/project-{{$loop->iteration}}.jpg" alt="Dostoyevsky website">
                        </div>
                        <div class="portfolio__item-title">
                            <h5 class="portfolio__title"> {{$post->title}} </h5>
                            <small class="portfolio__subtitle">
                                @foreach ($post->tags as $tag)
                                    {{$tag->name}} {{!$loop->last ? ',' : ''}} 
                                @endforeach
                            </small>
                        </div>
                    </a>
                </div>     
                @endforeach

                <div class="portfolio__more">
                    <a href="{{route('posts.index')}}"><button class="btn portfolio__more-btn">Afficher plus</button></a>
                </div>
            </div>                  <!-- end of portfolio -->
        </div>

    </section>

    <section class="section home__about" id="about">
        <div class="container">
            <div class="row">
                <div class="col col--sm-8 col--sm-offset-2 col--md-12 col--md-offset-0 col--lg-10 col--lg-offset-1">
                    <div class="row">
                        <div class="col col--md-6">
                            <h2 class="home__about-title">About me</h2>
                        </div>
                        <div class="col col--md-6">
                            <p class="home__about-content">Laravel transforme le développement web en une expérience fluide, où chaque 
                                fonctionnalité est conçue pour maximiser l'efficacité et la créativité. L'écosystème Laravel offre des 
                                outils puissants qui permettent de construire des applications web modernes, en alliant rapidité de
                                 développement et performance. </p>
                        </div>
                        <div class="col col--md-6">
                            <figure class="home__about-figure">
                                <img src="img/me.png" alt="My photo">
                            </figure>
                        </div>
                        <div class="col col--md-6">
                            <h3 class="home__about-skills-title">Compétences</h3>

                                <!-- skills -->

                            <ul class="skills">

                                <li class="skills__item">
                                    <div class="skills__title">PHP</div>
                                    <div class="skills__value">75%</div>
                                    <div class="skills__progress"><span style="right:15%;"></span></div>
                                </li>
                            
                                <li class="skills__item">
                                    <div class="skills__title">LARAVEL</div>
                                    <div class="skills__value">80%</div>
                                    <div class="skills__progress"><span style="right:20%;"></span></div>
                                </li>
                            
                                <li class="skills__item">
                                    <div class="skills__title">HTML &amp; CSS</div>
                                    <div class="skills__value">50%</div>
                                    <div class="skills__progress"><span style="right:50%;"></span></div>
                                </li>
                            
                                <li class="skills__item">
                                    <div class="skills__title">Git</div>
                                    <div class="skills__value">40%</div>
                                    <div class="skills__progress"><span style="right:60%;"></span></div>
                                </li>

                                <li class="skills__item">
                                    <div class="skills__title">PHPUnit</div>
                                    <div class="skills__value">55%</div>
                                    <div class="skills__progress"><span style="right:45%;"></span></div>
                                </li>
                            
                            </ul>                       <!-- end of skills -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section--blog blog-section home__blog">
        <div class="container">
            <div class="row">
                <div class="col col--sm-8 col--sm-offset-2 col--md-12 col--md-offset-0 col--lg-10 col--lg-offset-1">
                    <div class="row">
                        <div class="col">
                            <div class="home__blog-wrapper">
                                <a href="{{route($last_post->exists ? 'posts.show' : 'posts.index', $last_post)}}" class="home__blog-preview">
                                    <div class="home__blog-preview-img">
                                        <img src="img/post-1--lg.jpg" alt="New in blog">
                                    </div>
                                    <h3 class="home__blog-preview-title "> {{$last_post->title}} </h3>
                                    <p class="home__blog-preview-text"> {{Str::limit($last_post->content, 300)}}.</p>
                                    <p class="home__blog-preview-date"> {{$last_post->created_at->translatedFormat('d M, Y')}} </p>
                                </a>
                                <div class="home__blog-title">
                                    <h2 class="home__blog-title-text">Nouvel&nbsp; arcticle</h2>
                                    <a href="blog.html" class="btn home__blog-link">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section--contacts home__contacts" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col col--sm-8 col--sm-offset-2 col--md-12 col--md-offset-0 col--lg-10 col--lg-offset-1">
                    <div class="row">
                        <div class="col col--md-12">
                            <h2 class="home__contacts-title">Contacts</h2>
                        </div>
                        <div class="col col--md-6">
                            <p class="home__contacts-content">Vous avez des questions, des propositions de coopération ?
                                <br>N'hésitez pas à me contacter !</p>
                            <div class="home__contacts-info">
                                <p class="home__contacts-geo">Abomey-Calavi, Eg Ste J-B, Benin</p>
                                <p class="home__contacts-mail"><a href="mailto:job@ak1.io" target="_top">nicktep519@gmail.com</a></p>
                                <p class="home__contacts-tel"><a href="tel:+22965372714">+229 65372714</a></p>
                            </div>
                        </div>
                        <div class="col col--md-6">
                            
                            <!-- contact form -->
                            
                            <form  action="{{route('contact')}}" method="POST" class="form" >  <!-- id="contact-form" -->
                                @csrf
                                
                                <div class="row">
                                    <div class="col field">
                                      <input id="name" name="name" type="text" class="field__input field--name required" required>
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
                                      <input id="phone" type="tel" name="phone" class="field__input field--phone required" required>
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
                                        <input type="submit" class="btn form__btn form__btn--submit" value="Envoyer">
                                    </div>
                                </div>
                            </form>                    <!-- end of contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>    

@endsection