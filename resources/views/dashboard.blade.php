<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title _msttexthash="2307890" _msthash="0">Exemple d’album · Amorçage v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader" _msthidden="6">
    <div class="container" _msthidden="6">
      <div class="row" _msthidden="6">
        <div class="col-sm-8 col-md-7 py-4" _msthidden="2">
          <h4 class="text-white" _msttexthash="60892" _msthidden="1" _msthash="1">About</h4>
          <p class="text-muted" _msttexthash="29573219" _msthidden="1" _msthash="2">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4" _msthidden="4">
          <h4 class="text-white" _msttexthash="94510" _msthidden="1" _msthash="3">Contact</h4>
          <ul class="list-unstyled" _msthidden="3">
            <li _msthidden="1"><a href="#" class="text-white" _msttexthash="295321" _msthidden="1" _msthash="4">Follow on Twitter</a></li>
            <li _msthidden="1"><a href="#" class="text-white" _msttexthash="249184" _msthidden="1" _msthash="5">Like on Facebook</a></li>
            <li _msthidden="1"><a href="#" class="text-white" _msttexthash="92131" _msthidden="1" _msthash="6">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
        <strong _msttexthash="59410" _msthash="7">Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Basculer la navigation" _mstaria-label="320099" _msthash="8">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" _msttexthash="1839409" _msthash="9">Exemple d’album</h1>
        <p class="lead text-muted" _msttexthash="36162893" _msthash="10">Quelque chose de bref et de suggestif à propos de la collection ci-dessous - son contenu, le créateur, etc. Faites en sorte qu’il soit court et doux, mais pas trop court pour que les gens ne le sautent pas complètement.</p>
        <p>
          <a href="#" class="btn btn-primary my-2" _msttexthash="3027362" _msthash="11">Principal appel à l’action</a>
          <a href="#" class="btn btn-secondary my-2" _msttexthash="315653" _msthash="12">Action secondaire</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
       @foreach ($biens as $bien)
       <div class="col">
        <div class="card shadow-sm">
          <img src="{{ Storage::url($bien->image) }}" alt="" srcset="" width="100%" height="225" >

          <div class="card-body">
            <p class="card-text" _msttexthash="23562383" _msthash="16">Il s’agit d’une carte plus large avec un texte d’accompagnement ci-dessous comme une introduction naturelle à du contenu supplémentaire. Ce contenu est un peu plus long.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" _msttexthash="31811" _msthash="17">Vue</button>
                <button type="button" class="btn btn-sm btn-outline-secondary" _msttexthash="88283" _msthash="18">Éditer</button>
              </div>
              <small class="text-muted" _msttexthash="115934" _msthash="19">9 minutes</small>
            </div>
          </div>
        </div>
      </div>
       @endforeach
        


      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#" _msttexthash="450580" _msthash="76">Retour en haut de la page</a>
    </p>
    <p class="mb-1" _msttexthash="8792823" _msthash="77">L’exemple d’album est © Bootstrap, mais veuillez le télécharger et le personnaliser pour vous-même !</p>
    <p class="mb-0" _msttexthash="9577672" _msthash="78">Vous débutez avec Bootstrap ? <a href="/" _istranslated="1">Visitez la page d’accueil</a> ou lisez notre <a href="/docs/5.2/getting-started/introduction/" _istranslated="1">guide de démarrage</a>.</p>
  </div>
</footer>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      
  

</body></html>