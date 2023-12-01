@extends('layouts/contenidoBody')
@section('content')

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