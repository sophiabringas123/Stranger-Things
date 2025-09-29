<?php /* escenas.php */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Escenas</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <!-- Hero -->
  <section class="hero">
    <h1>Temporadas y episodios</h1>
    <p>¡Las escenas más destacadas de cada temporada! Son las que definen la serie. ⚡</p>
  </section>

  <!-- ===== Landing de episodios (grilla con anclas) ===== -->
  <section class="episodios-landing">
    <h2 class="sr-only">Listado de episodios</h2>

    <div class="ep-grid">
      <a class="ep-card" href="#t1" aria-label="Ir a Temporada 1 — La desaparición de Will">
        <img src="img/escena-t1.jpg" alt="Temporada 1 — La desaparición de Will" />
        <span class="ep-label">T1</span>
      </a>

      <a class="ep-card" href="#t2" aria-label="Ir a Temporada 2 — El Mind Flayer">
        <img src="img/escena-t2.jpg" alt="Temporada 2 — El Mind Flayer" />
        <span class="ep-label">T2</span>
      </a>

      <a class="ep-card" href="#t3" aria-label="Ir a Temporada 3 — Starcourt Mall">
        <img src="img/escena-t3.jpg" alt="Temporada 3 — Starcourt Mall" />
        <span class="ep-label">T3</span>
      </a>

      <a class="ep-card" href="#t4" aria-label="Ir a Temporada 4 — El terror de Vecna">
        <img src="img/escena-t4.jpg" alt="Temporada 4 — El terror de Vecna" />
        <span class="ep-label">T4</span>
      </a>

      <a class="ep-card" href="#t5" aria-label="Ir a Temporada 5 — Lo que viene">
        <img src="img/escena-t5.jpg" alt="Temporada 5 — Lo que viene" />
        <span class="ep-label">T5</span>
      </a>
    </div>
  </section>

  <!-- ===== Bloques con descripciones (destinos de las anclas) ===== -->

  <section id="t1" class="escena-bloque">
    <div class="escena-imagen">
      <img src="img/escenat1.webp" alt="Temporada 1 — La desaparición de Will">
    </div>
    <div class="escena-texto">
      <h2>Temporada 1 — La desaparición de Will</h2>
      <p>La primera temporada comienza con la misteriosa desaparición de Will Byers, un hecho que sacude a la pequeña ciudad de Hawkins. Mientras su madre, Joyce, hace todo lo posible por encontrarlo, sus amigos se embarcan en una búsqueda que los lleva a descubrir secretos ocultos. En el camino, conocen a Eleven, una niña con poderes especiales que escapa de un laboratorio secreto.</p>
      <p>El misterio del Upside Down se revela como una amenaza que conecta el mundo real con una dimensión oscura y peligrosa. La temporada establece el tono de la serie: amistad, valentía y la unión de un grupo de niños que se enfrentan a algo mucho más grande que ellos.</p>
    </div>
  </section>

  <section id="t2" class="escena-bloque">
    <div class="escena-imagen">
      <img src="img/escenat2.jpg" alt="Temporada 2 — El Mind Flayer">
    </div>
    <div class="escena-texto">
      <h2>Temporada 2 — El Mind Flayer</h2>
      <p>La historia se expande con nuevas amenazas cuando Will comienza a experimentar visiones inquietantes del Upside Down. El grupo descubre la existencia del Mind Flayer, una entidad mucho más peligrosa que el Demogorgon. Su influencia crece en Hawkins, poniendo en riesgo no solo a los protagonistas, sino a toda la ciudad.</p>
      <p>Mientras Eleven busca respuestas sobre su origen, los lazos de amistad se fortalecen y los personajes se enfrentan a decisiones difíciles. Esta temporada muestra cómo la oscuridad del Upside Down puede infiltrarse en el mundo real, intensificando el peligro.</p>
    </div>
  </section>

  <section id="t3" class="escena-bloque">
    <div class="escena-imagen">
      <img src="img/escenat3.webp" alt="Temporada 3 — Starcourt Mall">
    </div>
    <div class="escena-texto">
      <h2>Temporada 3 — Starcourt Mall</h2>
      <p>La tercera temporada trae un cambio de escenario con la apertura del centro comercial Starcourt Mall, símbolo de modernidad y consumo en Hawkins. Pero detrás de su fachada luminosa se esconde una nueva amenaza: experimentos rusos que intentan abrir la puerta al Upside Down.</p>
      <p>La temporada mezcla un tono colorido y ochentero con momentos de terror y acción. Las dinámicas del grupo evolucionan, surgen nuevas relaciones y se viven pérdidas que marcan a los protagonistas para siempre. La batalla en el centro comercial se convierte en uno de los momentos más icónicos de toda la serie.</p>
    </div>
  </section>

  <section id="t4" class="escena-bloque">
    <div class="escena-imagen">
      <img src="img/escenat4.jpg" alt="Temporada 4 — El terror de Vecna">
    </div>
    <div class="escena-texto">
      <h2>Temporada 4 — El terror de Vecna</h2>
      <p>El regreso más esperado de la serie llegó con un tono mucho más oscuro. Aparece Vecna, una criatura aterradora que atormenta a los adolescentes de Hawkins a través de sus miedos y traumas. Cada víctima cae en un trance mortal, dejando claro que esta amenaza es más personal y psicológica que nunca.</p>
      <p>Mientras Eleven intenta recuperar sus poderes y enfrentarse a su pasado en el laboratorio, los demás luchan contra el nuevo villano en Hawkins. La temporada combina terror sobrenatural con exploración emocional, revelando la conexión de Vecna con el origen del Upside Down.</p>
    </div>
  </section>

  <section id="t5" class="escena-bloque">
    <div class="escena-imagen">
      <img src="img/escenat5.jpg" alt="Temporada 5 — Lo que viene">
    </div>
    <div class="escena-texto">
      <h2>Temporada 5 — Lo que viene</h2>
      <p>La quinta temporada aún no ha llegado, pero las expectativas son enormes. Será el cierre de la historia, donde los héroes de Hawkins deberán enfrentar la batalla final contra el Upside Down y sus criaturas. El destino del grupo y de la ciudad estará en juego en un enfrentamiento definitivo.</p>
      <p>Esta entrega promete reunir los hilos narrativos de todas las temporadas anteriores, mezclando emoción, acción y nostalgia. Los fanáticos esperan respuestas y un desenlace épico para los personajes que han acompañado durante tantos años.</p>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>
<script src="js/jsapp.js"></script>
</body>
</html>
