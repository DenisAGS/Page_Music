<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biblioteca.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-+g7jxNfa7MPHxH+DOXS5nvzYn/lR81gKmNoh0jFkXXVltmKEnHbvhF+to1g+rT2gdfz8E4xS5T3S4CmJX+j/vTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Biblioteca</title>
</head>
<body>
    <header>
        <nav class="navbar">
          <h2 class="logo"><a href="./../index.html">DAGS</a></h2>
  
          <input type="checkbox" id="menu-toggler">
  
          <label for="menu-toggler" id="hamburger-btn">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                  <path d="M0 0h24v24H0z" fill="none"/>
                  <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
              </svg>
          </label>
  
          <ul class="all-links">
            <li><a href="./../index.html">Inicio</a></li>
            <li><a href="./biblioteca.html">Biblioteca</a></li>
            <li><a href="./../page_generos/generos.html">Géneros</a></li>
            <li><a href="./../page_artistas/artistas.html">Artistas</a></li>
            <li><a href="./../page_acerca/acerca.html">Acerca de</a></li>
          </ul>
          
        </nav>
      </header>

      <section class="ContLista">
        <h1>Mis listas de reproducción</h1>
        <div class="lista-container">
            <div class="lista">
                <img src="./../images/album/She-Cambiando-la-piel.jpg" alt="Album 2">
                <div class="lista-info">
                    <h2>Cambiando la Piel</h2>
                    <p>Artista: shé</p>
                    <p>Duracion: 47 minutos</p>
                    <a class="play-link" href="https://music.youtube.com/watch?v=9XaAQorJJ4E&si=5cHvAQMLDQnF7saO">
                        <div class="play-icon">&#9654;</div>
                    </a>
                </div>
                <div class="songs">
                    <ul>
                        <li>Aprende</li>
                        <li>No entiendes</li>
                        <li>¿Por Qué?</li>
                    </ul>
                </div>
            </div>

            <div class="lista">
                <img src="./../images/album/tiempo.jpg" alt="Album 1">
                <div class="lista-info">
                    <h2>TIEMPO VOL. I</h2>
                    <p>Artista: shé </p>
                    <p>Año: 2017</p>
                    <a class="play-link" href="URL_DE_REPRODUCCION">
                        <div class="play-icon">&#9654;</div>
                    </a>
                </div>
                <div class="songs">
                    <ul>
                        <li>Me despido de ti Ft. Gema</li>
                        <li>Dónde estás</li>
                        <li>Contigo o sin ti</li>
                    </ul>
                </div>
            </div>
    
            <div class="lista">
                <img src="./../images/album/tiempo2.jpg" alt="Album 2">
                <div class="lista-info">
                    <h2>TIEMPO VOL. 2</h2>
                    <p>Artista: shé </p>
                    <p>Año: 2018</p>
                    <a class="play-link" href="URL_DE_REPRODUCCION">
                        <div class="play-icon">&#9654;</div>
                    </a>
                </div>
                <div class="songs">
                    <ul>
                        <li>No quiero</li>
                        <li>Se rompe</li>
                        <li>Solo en mi locura</li>
                    </ul>
                </div>
            </div>

            <div class="lista">
                <img src="./../images/album/profundo.jpg" alt="Album 2">
                <div class="lista-info">
                    <h2>Profundo</h2>
                    <p>Artista: shé</p>
                    <p>Año: 2020</p>
                    <a class="play-link" href="URL_DE_REPRODUCCION">
                        <div class="play-icon">&#9654;</div>
                    </a>
                </div>
                <div class="songs">
                    <ul>
                        <li>Profundo</li>
                        <li>Te quiero</li>
                        <li>Nadie me comprende</li>
                    </ul>
                </div>
            </div>
        </div>
           
      </section>

      <section class="ContCanciones">
        <h2>Mis canciones</h2>

        <table>
            <thead>
                <tr>
                    <th>Portada</th>
                    <th>Nombre de la Canción</th>
                    <th>Artista</th>
                    <th>Álbum</th>
                    <th>Reproducir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="far fa-star"></i></td> 
                    <td>Lo siento</td>
                    <td>Beret</td>
                    <td>Prisma</td>
                    <td><button><i class="fas fa-play"></i></button></td> 
                </tr>
                <tr>
                    <td><i class="far fa-star"></i></td> 
                    <td>Lo prometo</td>
                    <td>Dante</td>
                    <td>Ápeiron</td>
                    <td><button><i class="fas fa-play"></i></button></td> 
                </tr>
                <tr>
                    <td><i class="far fa-star"></i></td>
                    <td>Nasa</td>
                    <td>Babi</td>
                    <td>Nasa</td>
                    <td><button><i class="fas fa-play"></i></button></td> 
                </tr>
                <tr>
                    <td><i class="far fa-star"></i></td> <!-- Icono de estrella vacía -->
                    <td>Lo jodiste</td>
                    <td>Babi</td>
                    <td>Lo jodiste</td>
                    <td><button><i class="fas fa-play"></i></button></td> 
                </tr>
                <tr>
                    <td><i class="far fa-star"></i></td>
                    <td>Dulce duelo</td>
                    <td>Babi</td>
                    <td>Dulce duelo</td>
                    <td><button><i class="fas fa-play"></i></button></td> 
                </tr>
                <tr>
                    <td><i class="far fa-star"></i></td> <!-- Icono de estrella vacía -->
                    <td>Colega</td>
                    <td>Babi</td>
                    <td>Colega</td>
                    <td><button><i class="fas fa-play"></i></button></td> 
                </tr>
            </tbody>
        </table>

      </section>

      <section id="albumes" class="ContAlbum">
        <h2>Mis álbumes</h2>

        <div class="album">
            <img src="./../images/album/Prisma_beret.jpg" alt="Portada del Álbum Beret" class="album-cover">
            <div class="album-details">
                <h2>Prisma</h2>
                <h4>Álbum musical de Beret</h4>
                <p><strong>Canciones:</strong> Desde cero, Lo siento, Te hecho de menos, Sentir (Versión Prisma), Sueño
                </p>
            </div>
            <img src="./../images/album/apices.jpg" alt="Portada del Apices" class="album-cover">
            <div class="album-details">
                <h2>Ápices</h2>
                <h4>Álbum musical de Beret</h4>
                <p><strong>Canciones:</strong> Ceniza, Corazón de piedra, Bala perdida, Bye Bye, Frío, Diez mil porqués
                </p>
            </div>
        </div>
        <div class="album">
            <img src="./../images/album/literal.jpg" alt="Portada del Álbum Literal" class="album-cover">
            <div class="album-details">
                <h2>Literal</h2>
                <h4>Álbum musical de Karen Méndez</h4>
                <p><strong>Canciones:</strong> Fotos, La Parte Buena, Amor de Adolecentes, Mi Rival, Por Última Vez</p>
            </div>
            <img src="./../images/album/100.jpg" alt="Portada del Álbum 100%" class="album-cover">
            <div class="album-details">
                <h2>100%</h2>
                <h4>Álbum musical de Karen Méndez</h4>
                <p><strong>Canciones:</strong> Dale, Mentiras, Interrogativa, Tóxico, Nostalergia, Bye Pa'Lo Nuestro</p>
            </div>
        </div>

    </section>
    <script src="script.js"></script>
</body>
</html>