<?php /* galeria.php */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Galería</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <style>
    /* AJUSTES CRUCIALES DE CSS 3D PARA QUE GSAP TOME EL CONTROL
       (Sobrescribe o complementa lo que está en estilos.css)
    */
    .galeria-grid figure {
      /* CLAVE: Habilita la perspectiva 3D */
      transform-style: preserve-3d;
      transform-origin: center center;
      perspective: 1000px; 
      
      /* IMPORTANTE: Eliminamos la transición CSS para que GSAP sea el único motor de animación */
      transition: none !important;
      
      background: #141414;
      border: 1px solid #2b2b2b;
      border-radius: 12px;
    }
    .galeria-grid figure img {
      /* CLAVE: Empuja la imagen hacia adelante en 3D para darle profundidad al tilt */
      transform: translateZ(30px); 
      
      /* IMPORTANTE: Eliminamos cualquier transición CSS en la imagen */
      transition: none !important;
    }
    /* Estilo para el toggle del botón "Leer más" */
    .sinopsis-intro .oculto {
      display: none; 
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<?php
// Filtro opcional por año (queda igual a tu versión)
$anio = isset($_GET['anio']) ? (int)$_GET['anio'] : 0;
if ($anio > 0) {
  echo "<p class='hint'>Mostrando recuerdos del año $anio.</p>";
}
?>

<main>
  <section class="hero">
    <h1>Galería retro</h1>
    <p>Objetos icónicos de la serie.</p>
  </section>
  
  <section class="sinopsis-intro" style="max-width:900px; margin:24px auto; padding:0 24px;">
    <p>
      Stranger Things no solo combina nostalgia ochentosa con misterio y ciencia ficción, sino que utiliza 
      objetos cotidianos como anclas narrativas. Desde la fiel bicicleta que te salva del Demogorgon 
      hasta las **luces de Navidad** que nos permitieron comunicarnos entre dimensiones, cada elemento 
      en esta galería cuenta una parte fundamental de la historia.
      <span id="extra-text" class="oculto">
        La desaparición de Will Byers es el detonante que lleva a Mike, Dustin, y Lucas a descubrir a Eleven, 
        una niña con poderes especiales. Juntos enfrentan conspiraciones, criaturas del Mundo del Revés y 
        desafíos personales a lo largo de las temporadas. Explorá esta colección de artefactos de Hawkins y 
        el Upside Down.
      </span>
    </p>
    <button id="leerMasBtn">Leer más</button>
  </section>


  <section class="galeria-grid" id="tiltGallery">
    
    <figure class="tilt-item">
      <img src="img/gal-luces.jpg" alt="Luces de Navidad" loading="lazy">
      <figcaption>Luces de Navidad</figcaption>
    </figure>

    <figure class="tilt-item">
      <img src="img/gal-bici.jpg" alt="Bicicleta" loading="lazy">
      <figcaption>Bicicleta</figcaption>
    </figure>

    <figure class="tilt-item">
      <img src="img/gal-eggo.jpg" alt="Eggo" loading="lazy">
      <figcaption>Eggo</figcaption>
    </figure>

    <figure class="tilt-item">
      <img src="img/gal-walkie.jpg" alt="Walkie-talkie" loading="lazy">
      <figcaption>Walkie-talkie</figcaption>
    </figure>

    <figure class="tilt-item">
      <img src="img/gal-starcourt.jpg" alt="Starcourt Mall" loading="lazy">
      <figcaption>Starcourt Mall</figcaption>
    </figure>

    <figure class="tilt-item">
      <img src="img/gal-reloj.jpg" alt="Reloj de Vecna" loading="lazy">
      <figcaption>Reloj de Vecna</figcaption>
    </figure>

    <figure class="tilt-item">
      <img src="img/gal-arcade.jpg" alt="Arcade" loading="lazy">
      <figcaption>Arcade</figcaption>
    </figure>

    <figure class="tilt-item">
      <img src="img/gal-logo.jpg" alt="Logo Stranger Things" loading="lazy">
      <figcaption>Logo Stranger Things</figcaption>
    </figure>
  </section>
</main>

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>

<script>
  // 1. Funcionalidad del botón "Leer Más"
  document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("leerMasBtn");
    const extra = document.getElementById("extra-text");

    if (btn && extra) {
      // Ajustamos el texto inicial
      const isHidden = extra.classList.contains("oculto");
      btn.textContent = isHidden ? "Leer más" : "Leer menos";

      btn.addEventListener("click", () => {
        const isHiddenNow = extra.classList.toggle("oculto");
        btn.textContent = isHiddenNow ? "Leer más" : "Leer menos";
      });
    }
  });


  // 2. Efecto TILT 3D DRAMÁTICO para la galería usando GSAP
  const items = document.querySelectorAll('.tilt-item');

  items.forEach(item => {

    // Al pasar el mouse (pointermove)
    item.addEventListener('pointermove', (e) => {
      const rect = item.getBoundingClientRect();
      
      // Mapeamos la posición del mouse: -0.5 (izquierda/arriba) a 0.5 (derecha/abajo)
      const dx = (e.clientX - rect.left) / rect.width - 0.5;
      const dy = (e.clientY - rect.top) / rect.height - 0.5;
      
      // Aplicar rotación y zoom EXTREMO con GSAP
      gsap.to(item, {
        rotateX: dy * -30, // Rotación aumentada a 30 grados
        rotateY: dx * 30,  // Rotación aumentada a 30 grados
        scale: 1.20,       // Zoom aumentado a 1.20 (20% más grande)
        duration: 0.2,     // Rápido para sentir que sigue al mouse
        ease: 'power1.out'
      });
      // OPCIONAL: Mover la imagen dentro de la figura para un efecto aún más pop
      gsap.to(item.querySelector('img'), {
        scale: 1.15, // Zoom extra a la imagen
        duration: 0.2
      });
    });

    // Al salir del elemento (pointerleave)
    item.addEventListener('pointerleave', () => {
      // Regresa a la posición inicial con un efecto de rebote elástico
      gsap.to(item, {
        rotateX: 0,
        rotateY: 0,
        scale: 1,
        duration: 0.7,
        ease: 'elastic.out(1, 0.4)' 
      });
      // Regresa la imagen a su estado normal
      gsap.to(item.querySelector('img'), {
        scale: 1,
        duration: 0.7,
        ease: 'elastic.out(1, 0.4)' 
      });
    });
  });
</script>

<script src="js/jsapp.js"></script>
</body>
</html>