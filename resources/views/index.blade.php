<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAGS|Landing</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">DAGS</a></h2>

        <input type="checkbox" id="menu-toggler">

        <label for="menu-toggler" id="hamburger-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
            </svg>
        </label>

        <ul class="all-links">
          <li><a href="./index.html">Inicio</a></li>
          <li><a href="./page_biblioteca/biblioteca.html">Biblioteca</a></li>
          <li><a href="./page_generos/generos.html">Géneros</a></li>
          <li><a href="./page_artistas/artistas.html">Artistas</a></li>
          <li><a href="./page_acerca/acerca.html">Acerca de</a></li>
        </ul>
        
      </nav>
    </header>

    <section class="inicio" id="home">
      <div class="content">
        <div class="text">
          <h1>La música es el lenguaje universal del alma.</h1>
          <p>La música es un lenguaje universal que trasciende las barreras de la cultura, el idioma y la geografía. 
            <br>Habla directamente al alma, conectando a las personas de maneras profundas y emocionales.</p>
        </div>
        <a href="./page_biblioteca/biblioteca.html">Explorar</a>
      </div>
    </section>

    <section class="portafolio" id="portfolio">
      <h2>Álbumes destacados</h2>
      <p> "Explorando los sonidos del futuro: Álbumes destacados del siglo XXI" </p>
      <ul class="cards">
        <li class="card">
          <img src= "{{ asset('images/album/100.jpg') }}" alt="img">
          <h3>100%</h3>
          <h5>Álbum musical de Karen Méndez</h5>
          <p>Canciones: Dale, Mentiras, Interrogativa, Tóxico, Nostalergia, Bye Pa'Lo Nuestro</p>
        </li>
        <li class="card">
          <img src="{{ asset('images/album/apices.jpg') }}" alt="img">
          <h3>Ápices</h3>
          <h5>Álbum musical de Beret</h5>
          <p>Canciones: Ceniza, Corazón de piedra, Bala perdida, Bye Bye, Frío, Diez mil porqués. </p>
        </li>
        <li class="card">
          <img src="{{ asset('images/album/literal.jpg') }}" alt="img">          
          <h3>Literal</h3>
          <h5>Álbum musical de Karen Méndez</h5>
          <p>Canciones: Fotos, La Parte Buena, Amor de Adolecentes, Mi Rival, Por Última Vez.</p>
        </li>
      </ul>
    </section>

    <footer>
      <div>
        <span>Copyright © 2023 All Rights Reserved</span>
        <span class="link">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
        </span>
      </div>
    </footer>

  </body>
</html>
