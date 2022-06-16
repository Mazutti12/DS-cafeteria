<?php

require_once('../connection.php');


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/stylecss.css">
  <title>Home Page</title>
</head>

<body>

  <!--- Cabeçalho -->
  <header class="p-3 bg-dark text-white sticky">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ">
          <img src="/coffee/style/img/icone_header.png" alt="icone da imagem" class="icone-header"><svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
          <li><a href="index.php" class="nav-link px-2 text-principal">Início</a></li>
          <li><a href="#about_session" class="nav-link px-2 text-white ">About</a></li>
          <li><a href="cardapio.php" class="nav-link px-2 text-white ">Cardápio</a></li>
          <li><a href="forum.php" class="nav-link px-2 text-white ">Fórum</a></li>
        </ul>
        <div class="text-end">
          <a href="../index.php" type="button" class="btn btn-outline-light me-2">LogOut</a>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </header>

  <!--- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner size-image">
      <div class="carousel-item active">
        <img src="../style/img/caffee.jpg" class="d-block w-100 slide-image" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../style/img/cafe2.jpg" class="d-block w-100 slide-image" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../style/img/cafe-esfira.jpg" class="d-block w-100 slide-image" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
      <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--- Restante da página --->
  <div class="topicos-homepage">
    <img src="../style/img/tipos-de-cafe.jpg" alt="Xícara de café" class="col-6 image-homepage">
    <p class="col-6 text-homepage">The external scars tell only part of the story. I hear that Nancy is very pretty. She was disgusted he couldn’t tell the difference between lemonade and limeade. Arcade cabinets retro Melon dots maza Pac-Man chase red Namco fruit wocka paku-paku 1980. He had a hidden stash underneath the floorboards in the back room of the house.
      Don't put peanut butter on the dog's nose. The external scars tell only part of the story. She learned that water bottles are no longer just to hold liquid, but they're also status symbols. The old apple revels in its authority. I think I will buy the red car, or I will lease the blue one.</p>
  </div>

  <section id="about_session">
  <div class="topicos-homepage topicos-homepageblock">
    <h2 class="h2-homepage">Quem somos nós?</h2>
    <p class="text-homepage">She learned that water bottles are no longer just to hold liquid, but they're also status symbols. Ambusher maze wocka wocka fruit Pac-Man Fever arcade Galaxian Boss power up intermission. She was disgusted he couldn’t tell the difference between lemonade and limeade. As she walked along the street and looked in the gutter, she realized facemasks had become the new cigarette butts.

      Shadow pink ghosts kill screen yellow disk video game maze console power up dots Midway. Flying fish few by the space station. She had the gift of being able to paint songs. Clyde blue enemies flash dots wocka maze monsters ghosts red chaser.

      Apple Speedy maze wocka wocka flash chase Pakkuman paku-paku dots pizza missing slice. Pac-Man Namco Toru Iwatani Pac-Man Fever maze dots. She learned that water bottles are no longer just to hold liquid, but they're also status symbols. Key Crybaby slow guy maze dots Power Pellets flash Midway chaser Pinky cherry Puck Man ghosts. Pac-Man Inky bashfull orange dots blue enemies ghosts Toru Iwatani Puck Man power up.

      Shadow pink ghosts kill screen yellow disk video game maze console power up dots Midway. Poison ivy grew through the fence they said was impenetrable. She had the gift of being able to paint songs. Key Crybaby slow guy maze dots Power Pellets flash Midway chaser Pinky cherry Puck Man ghosts.</p>
  </div>
  </section>
  <div class="topicos-homepage topicos-homepageblock">
    <h2 class="h2-homepage">Como nos achar?</h2>
    <img src="../style/img/fachada-cafeteria.jpeg" alt="Fachada" class="image-homepage">
    <p class="text-homepage p-margin">Patricia loves the sound of nails strongly pressed against the chalkboard. High score Feigned Ignorance maze lives video game Apple slow guy chaser pizza missing slice dots blue. Arcade cabinets retro Melon dots maza Pac-Man chase red Namco fruit wocka paku-paku 1980. Shadow dots strawberry Pac-Man Midway chaser Pinky kill screen.

      Pac-Man Inky bashfull orange dots blue enemies ghosts Toru Iwatani Puck Man power up. I hear that Nancy is very pretty. Shadow dots strawberry Pac-Man Midway chaser Pinky kill screen. Pac-Man Namco Toru Iwatani Pac-Man Fever maze dots.

      He was willing to find the depths of the rabbit hole in order to be with her. He had a hidden stash underneath the floorboards in the back room of the house. Shadow dots strawberry Pac-Man Midway chaser Pinky kill screen. Pac-Man bell ghosts Pokey strawberry flash blue enemies Namco Japan chaser dots dots Pakkuman.</p>
  </div>


  <footer class="p-3 bg-dark text-white size-footer">
    <div class="icone-footer">
      <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="/coffee/style/img/icone_header.png" alt="icone do caffee" class="icone-caffee-footer"><svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap" />
        </svg>
      </a>
      <a href="https://www.instagram.com/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram icone-footer-right" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </svg>
      </a>
      <a href="https://pt-br.facebook.com/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook icone-footer-right" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </svg>
      </a>
    </div>
  </footer>

</body>

</html>