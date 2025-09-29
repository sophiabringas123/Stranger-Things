<?php /* index.php - Home */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Stranger Things | Home</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <section class="sticky-hero" id="stickyHero">
    <div class="sticky-pin">
      <video id="heroVideo" class="video-banner" playsinline muted preload="auto">
        <source src="img/videoinicio.mp4" type="video/mp4">
        Tu navegador no soporta el video HTML5.
      </video>

      <div class="hero-card">
        <h2>Entre el miedo y la amistad</h2>
        <p>Este sitio reúne escenas, personajes y guiños que hicieron de <em>Stranger Things</em> un fenómeno.</p>
        <p>Encontrás galería retro, comunidad para opinar y un espacio de merch inspirado en Hawkins y el Upside Down. ⚡</p>
        <a class="btn" href="galeria.php?anio=1985">Ir a Galería retro</a>
      </div>

      <div class="vignette"></div>
    </div>
  </section>
  
  <section class="call-to-action">
    <div class="cta-grid">
      <article class="cta-card">
        <h3>💬 Sumate a la Comunidad</h3>
        <p>Compartí tus teorías, opiniones y momentos favoritos. ¡Vecna nos está esperando!</p>
        <a class="btn" href="comunidad.php">Ver Comentarios</a>
      </article>
      <article class="cta-card">
        <h3>📧 Dejá un Mensaje</h3>
        <p>¿Tenés fan art, una propuesta o simplemente querés saludar? Escribinos.</p>
        <a class="btn" href="contacto.php">Ir a Contacto</a>
      </article>
    </div>
  </section>

  <section class="suscripcion">
    <h2>¡Suscribite a las novedades!</h2>
    <form>
      <input type="email" placeholder="Mail" required />
      <button type="submit">Suscribirme</button>
    </form>
  </section>
</main>

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>

<script>
  gsap.registerPlugin(ScrollTrigger);

  const section = document.getElementById('stickyHero');
  const pinBox  = section.querySelector('.sticky-pin');
  const video   = document.getElementById('heroVideo');

  // 1. Configuración de Autoplay
  video.muted = true; 
  video.play().catch(()=>{});

  video.addEventListener('loadedmetadata', () => {
    const dur = Math.max(video.duration || 1, 1);

    // 2. PIN + SCRUB (Fija el video y controla su tiempo con el scroll)
    ScrollTrigger.create({
      trigger: section,
      start: 'top top',
      end: 'bottom top',
      pin: pinBox,
      scrub: true,
      onUpdate: self => {
        video.currentTime = self.progress * (dur - 0.001);
      }
    });

    // 3. ZOOM + BLUR (El efecto 3D visual)
    gsap.fromTo(video,
      { scale: 1, filter: 'blur(0px)' },
      {
        scale: 1.15, filter: 'blur(6px)',
        ease: 'none',
        scrollTrigger: {
          trigger: section,
          start: 'top top',
          end: 'bottom top',
          scrub: true
        }
      }
    );

    // 4. ENTRADA DE LA TARJETA (Aparece suavemente)
    gsap.fromTo('.hero-card',
      { y: 30, opacity: 0 },
      {
        y: 0, opacity: 1,
        ease: 'none',
        scrollTrigger: {
          trigger: section,
          start: 'top 70%', 
          end: 'top 40%',   
          scrub: true
        }
      }
    );
  });

  // Refresca el layout de ScrollTrigger si se cambia el tamaño de la ventana
  window.addEventListener('resize', () => ScrollTrigger.refresh());
</script>

<script src="js/jsapp.js"></script>
</body>
</html>