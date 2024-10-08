@extends('base')

@section('title', $post->exists ? 'Modifier un Post' : 'Ajouter un Post' )

@section('content')


<section class="section section--contacts home__contacts" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col col--sm-8 col--sm-offset-2 col--md-12 col--md-offset-0 col--lg-10 col--lg-offset-1">
                <div class="row">
                    <div class="col col--md-12">
                        <h2 class="home__contacts-title"> {{ $post->exists ? 'Modifier un Post' : 'Ajouter un Post' }} </h2>
                    </div>
                    <!--<div class="col col--md-6">
                        <p class="home__contacts-content">Vous avez des questions, des propositions de coopération ?
                            <br>N'hésitez pas à me contacter !</p>
                        <div class="home__contacts-info">
                            <p class="home__contacts-geo">Abomey-Calavi, Eg Ste J-B, Benin</p>
                            <p class="home__contacts-mail"><a href="mailto:job@ak1.io" target="_top">nicktep519@gmail.com</a></p>
                            <p class="home__contacts-tel"><a href="tel:+22965372714">+229 65372714</a></p>
                        </div>
                    </div>-->
                    <div class="col col--md-12">
                        
                        <!-- contact form -->
                        
                        <form  action="{{route($post->exists ? 'posts.update' : 'posts.store', $post)}}" method="POST" class="form" >  <!-- id="contact-form" -->
                            @csrf
                            @method($post->exists ? 'PUT' : 'POST')
                            
                            <div class="row">
                                <div class="col field">
                                  <input id="title" name="title" type="text" value="{{old('title', $post->title)}}" class="field__input field--name required" required>
                                  <label for="title" class="field__label">Titre</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col field">
                                  <input id="problematic" type="text" name="problematic" value="{{old('problematic', $post->problematic)}}" class="field__input field--email required">
                                  <label for="problematic" class="field__label">Problematique</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col field">
                                  <input id="tags" name="tags" type="text" value="{{old('tags', $tags)}}" class="field__input field--name required" required>
                                  <label for="tags" class="field__label">Tags (Cathegories) </label>
                                </div>
                            </div>
                         
                            <div class="row">
                                <div class="col field">
                                  <textarea id="markdown-editor" name="content" class="markdown-editor"  class="field__textarea field--message required" required> {{old('content', $post->content)}} </textarea>
                                  <label for="markdown-editor" class="field__label"></label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn form__btn form__btn--submit" value="Envoyer">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="" class="btn form__btn form__btn--submit" value="Envoyer">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="" class="btn form__btn form__btn--submit" value="Envoyer">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="" class="btn form__btn form__btn--submit" value="Envoyer">
                                </div>
                            </div>
                           

                          
                        </form>                    <!-- end of contact form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script de SimpleMDE -->

<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>



<script>
   var simplemde = new SimpleMDE( {
       toolbar: [
           {
               name: "bold",
               action: SimpleMDE.toggleBold,
               className: "fa fa-bold",
               title: "Bold",
           },

           {
               name: "italic",
               action: SimpleMDE.toggleItalic,
               className: "fa fa-italic",
               title: "Italic",
           },

           {
               name: "heading",
               action: SimpleMDE.toggleHeadingSmalle,
               className: "fa fa-header",
               title: "Heading",
           },

           "|", // Separator

           {
               name: "quote",
               action: SimpleMDE.toggleBlockquote,
               className: "fa fa-quote-left",
               title: "Quote",
           },

           {
               name: "unordered-list",
               action: SimpleMDE.toggleUnorderedList,
               className: "fa fa-list-ul",
               title: "Generic List",
           },

           {
               name: "ordered-list",
               action: SimpleMDE.toggleOrderedList,
               className: "fa fa-list-ol",
               title: "Numbered List",
           },

           "|",

           {
               name: "link",
               action: SimpleMDE.drawLink,
               className: "fa fa-link",
               title: "Create Link",
           },

           {
               name: "image",
               action: SimpleMDE.drawImage,
               className: "fa fa-picture-o",
               title: "Insert Image",
           },

           "|",

           {
               name: "preview",
               action: SimpleMDE.togglePreview,
               className: "fa fa-eye no-disable",
               title: "Toggle Preview",
           },

           {
               name: "side-by-side",
               action: SimpleMDE.toggleSideBySide,
               className: "fa fa-columns no-disable no-mobile",
               title: "Toggle Side by Side",
           },

           {
               name: "fullscreen",
               action: SimpleMDE.toggleFullScreen,
               className: "fa fa-arrows-alt no-disable no-mobile",
               title: "Toggle Fullscreen",
           },

           {
               name: "code",
               action: SimpleMDE.toggleCodeBlock,
               className: "fa fa-code",
               title: "Code",
           },

           "|",

           {
               name: "strikethrough",
               action: SimpleMDE.toggleStrikethrough,
               className: "fa fa-strikethrough",
               title: "Strikethrough",
           },

           {
               name: "custom",
               action: function customFunction(editor){
               // Add your own code
               },
               className: "fa fa-star",
               title: "Custom Button",
           },
       ] 
   }, 
   
   {
        element: document.getElementById("markdown-editor"),
        spellChecker: false, // Désactive le correcteur orthographique
        renderingConfig: {
            codeSyntaxHighlighting: true, // Pour la coloration syntaxique des blocs de code
        },
        placeholder: '',
    });
</script>
    
    
@endsection