<?php require __DIR__ . '/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Comunidad</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

<?php include 'header.php'; ?>

  <main>
<section class="comunidad-wrap">
  <h2 class="comunidad-title">COMUNIDAD</h2>

  <p class="comunidad-intro">
    Te invitamos a dejar tus comentarios sobre Stranger Things: contanos qué es lo que más te gusta de la serie, cuáles fueron tus momentos favoritos o incluso qué finales hubieras cambiado. Este espacio es tuyo para compartir teorías, recuerdos y todo lo que hace única a esta historia.
  </p>

  <div class="comu-fotos">
<figure><img src="img/imgcomunidad1.jpg.png" alt="Fans en evento" /></figure>
<figure><img src="img/imgcomunidad2.jpg.png" alt="Cosplayers" /></figure>
<figure><img src="img/imgcomunidad3.jpg.png" alt="Grupo de fans" /></figure>

  </div>

  <div class="comu-grid">
    <div class="comu-comentarios">

      <article class="comentario">
        <header>
          <span class="usuario">Usuario1</span>
          <span class="fecha">12/04/25</span>
        </header>
        <p class="texto">
          "La escena de Max en la temporada 4 fue la mejor de toda la serie."
        </p>
      </article>

      <article class="comentario">
        <header>
          <span class="usuario">EggoLover</span>
          <span class="fecha">10/04/25</span>
        </header>
        <p class="texto">
          "Eleven y sus waffles Eggo son mi detalle favorito, me encanta cómo algo tan simple se volvió un símbolo."
        </p>
      </article>

      <article class="comentario">
        <header>
          <span class="usuario">VecnaRules</span>
          <span class="fecha">09/04/25</span>
        </header>
        <p class="texto">
          "La temporada 4 me voló la cabeza, Vecna es el villano más aterrador que vi en mucho tiempo."
        </p>
      </article>

    </div>

    <aside class="comu-encuesta">
      <ul class="preguntas">
        <li>¿Cuál es tu personaje favorito de la serie?</li>
        <li>¿Qué temporada volviste a ver una y otra vez?</li>
        <li>¿Cuál fue la muerte más dolorosa de la serie?</li>
        <li>¿Qué creés que pasará en la temporada 5?</li>
      </ul>

      <form class="opinion-form needs-confirm" method="post" action="contacto.php">
        
        <input type="text" name="nombre" placeholder="Tu Nombre o Nickname" required style="margin-bottom:10px;" />
        <input type="email" name="email" placeholder="Tu Correo Electrónico" required style="margin-bottom:10px;" />

        <label class="sr-only" for="opinion">Escribí tu opinión</label>
        <textarea id="opinion" name="mensaje" placeholder="Escribí tu opinión"></textarea>
        <button type="submit">ENVIAR</button>
      </form>
    </aside>
  </div>
</section>


    <section class="foro">
      <?php
      $sql = "SELECT nombre, mensaje, fecha FROM contacto ORDER BY id DESC LIMIT 50";
      $res = mysqli_query($conn, $sql);

      if ($res && mysqli_num_rows($res) > 0):
        while ($row = mysqli_fetch_assoc($res)):
      ?>
          <article class="post">
            <h3>👤 <?= htmlspecialchars($row['nombre']) ?> — <?= date('d/m/Y H:i', strtotime($row['fecha'])) ?></h3>
            <p><?= nl2br(htmlspecialchars($row['mensaje'])) ?></p>
          </article>
      <?php
        endwhile;
      else:
        echo '<p>No hay mensajes todavía. ¡Escribí desde <a href="contacto.php">Contacto</a>!</p>';
      endif;
      ?>
    </section>

    <section class="destacados" id="top">
  <h2>TENDENCIAS Y VOTACIONES: ¿Cuál es el objeto más icónico?</h2>
  <br>
  <p class="lead" style="max-width:900px; margin:0 auto 12px; padding:0 24px; color:#ddd;">
    ¡Ayudá a decidir qué objeto de Hawkins es el más importante! Votá por tu favorito y mirá cómo se ajusta la galería retro en tiempo real. Hacé clic en "Votar" para apoyar tu favorito.
  </p>
<br>
  <div class="grid-destacados">
    
    <article class="card-dest">
      <span class="badge">#1</span>
      <h3>El Walkie-talkie de Dustin</h3>
      <p>El primer y más fiel medio de comunicación entre dimensiones. Un clásico.</p>
      <a class="btn-mini" href="galeria.php?voto=item1">Votar por más</a>
    </article>

    <article class="card-dest">
      <span class="badge">#2</span>
      <h3>Las Luces de Joyce</h3>
      <p>El primer contacto con el Mundo del Revés. Una escena que marcó la serie.</p>
      <a class="btn-mini" href="galeria.php?voto=item2">Votar por más</a>
    </article>

    <article class="card-dest">
      <span class="badge">#3</span>
      <h3>El Club Hellfire (D&D)</h3>
      <p>La cuna de los nombres de los monstruos más temibles de la saga.</p>
      <a class="btn-mini" href="galeria.php?voto=item3">Votar por más</a>
    </article>

    <article class="card-dest">
      <span class="badge">#4</span>
      <h3>El Reloj de Vecna</h3>
      <p>El símbolo de que tu tiempo se acaba. Uno de los objetos más siniestros de la Temporada 4.</p>
      <a class="btn-mini" href="galeria.php?voto=item4">Votar por más</a>
    </article>
  </div>
</section>

  </main>
<?php include 'footer.php'; ?>
<script src="js/jsapp.js"></script>
</body>
</html>