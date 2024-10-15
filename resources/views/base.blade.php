<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="{{asset('img/me.ico')}}">

        <!-- Lien vers le CSS de SimpleMDE -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/monokai-sublime.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>


        <title> @yield('title') </title>

        <link rel="stylesheet" href=" {{asset('css/normalize.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/styles.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/custom.css')}} ">
    </head>

    <!--  -->

    

    <body>

        <!-- header -->
        
        <header class="header" id="header">
            <div class="container">
                <div class="header__menu">
                    <input type="checkbox" id="menu-burger" class="header__menu-status" hidden/>
                    <label for="menu-burger" class="header__burger">
                        <span></span>
                    </label>
                    <nav class="header__nav">
                        <div class="header__nav-item">
                            <a href="{{route('home')}}#about" class="header__nav-link text--uppercase">about</a>
                        </div>
                        <div class="header__nav-item">
                            <a href="{{route('articles.index')}}" class="header__nav-link text--uppercase">articles</a>
                        </div>
                        <div class="header__nav-item">
                            <a href="{{route('realisations.index')}}" class="header__nav-link text--uppercase">Realisations</a>
                        </div>
                        <div class="header__nav-item">
                            <a href="{{route('home')}}#contacts" class="header__nav-link text--uppercase">contacts</a>
                        </div>
                    </nav>
                    <div class="header__logo">
                        <a href="{{route('home')}}" class="logo">
                            <img src="{{asset('img/n.t519.logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>

        </header>                <!-- end of header -->

        <!-- socials -->
        
        <div class="socials">
            <nav class="socials__nav">
                <div class="socials__nav-item">
                    <a href="https://web.facebook.com/profile.php?id=100075721892286" class="socials__link" target="_blank">Facebook</a>
                </div>
                <div class="socials__nav-item">
                    <a href="https://www.instagram.com/nicktep519/" class="socials__link" target="_blank">Instagram</a>
                </div>
                <div class="socials__nav-item">
                    <a href="https://x.com/nicktep519" class="socials__link" target="_blank">Twitter</a>
                </div>
                <div class="socials__nav-item">
                    <a href="https://www.linkedin.com/in/nick-tep/" class="socials__link" target="_blank">Linkedin</a>
                </div>
            </nav>
        </div>                   <!-- end of socials -->

        @if (session('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                {{ session('success') }}
            </div>
        </div>
        @endif

        @yield('content')

        <!-- footer -->
        
        <footer class="footer">
            <div class="container">
                <div class="row nomargin">
                    <div class="col col--xs-12 col--sm-6 col--md-4 nopadding">
                        <p class="footer__text">© 2024 n.t519 Tous droits réservés</p>
                    </div>
                    <div class="col col--xs-12 col--sm-6 col--md-4 nopadding">
                        <p class="footer__socials">
                            Share <span class="footer__dash"></span>
                            <a href="https://x.com/" class="footer__icon">
                                <i class="icon icon--twitter"></i>
                            </a>
                            <a href="https://web.facebook.com/" class="footer__icon">
                                <i class="icon icon--facebook"></i>
                            </a>
                            <a href="https://www.pinterest.fr/" class="footer__icon">
                                <i class="icon icon--pinterest"></i>
                            </a>
                        </p>
                    </div>
                    <div class="col col--xs-5 col--sm-6 col--md-1 nopadding">
                        <div class="footer__mail">
                            <a class="footer__mail-link" href="mailto:job@ak1.io">nicktep519@gmail.com</a>
                        </div>
                    </div>
                    <div class="col col--xs-7 col--sm-6 col--md-3 nopadding">
                        <div class="footer__tel">
                            <a class="footer__tel-link" href="tel:+22965372714">+229 65372714</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>                      <!-- end of footer -->


       

                <!-- scripts -->
        
        <script src=" {{asset('libs/jquery/jquery.min.js')}} "></script>
        <script src=" {{asset('libs/stellar/jquery.stellar.js')}} "></script>
        <script src=" {{asset('js/options.js')}} "></script>
        <script src=" {{asset('js/main.js')}} "></script>

         
        
        <!-- end of scripts -->
    </body>

</html>
