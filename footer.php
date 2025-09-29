<footer class="site-footer">
  <div class="footer-grid">

    <!-- Columna 1: Sobre el sitio -->
    <div class="footer-col">
      <h4>Sobre el sitio</h4>
      <ul>
        <li><a href="sinopsis.php">Acerca del proyecto</a></li>
        <li><a href="comunidad.php">Comunidad & normas</a></li>
        <li><a href="galeria.php">Mapa del sitio</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="#">Accesibilidad</a></li>
        <li><a href="#">Créditos</a></li>
        <li><a href="#">Política de privacidad</a></li>
      </ul>
    </div>

    <!-- Columna 2: Recursos -->
    <div class="footer-col">
      <h4>Recursos</h4>
      <ul>
        <li><a href="personajes.php">Guía de personajes</a></li>
        <li><a href="escenas.php">Escenas memorables</a></li>
        <li><a href="galeria.php">Galería retro</a></li>
        <li><a href="sinopsis.php">Temporadas</a></li>
        <li><a href="#">Preguntas frecuentes</a></li>
        <li><a href="comunidad.php">Comunidad</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>

    <!-- Columna 3: Newsletter + Redes -->
    <div class="footer-col">
      <h4>Suscribite a las novedades</h4>
      <p>Enterate de actualizaciones del sitio y la comunidad.</p>

      <!-- Solo visual: si querés lo guardamos en BD luego -->
      <form class="nl-form" method="post" action="#" onsubmit="return false;">
        <input type="email" placeholder="correo@example.com" aria-label="Email para suscripción" />
        <button type="submit">Suscribirse</button>
      </form>

      <div class="social">
        <a href="#" aria-label="Instagram">
          <img src="img/logotipo-de-instagram.png" alt="Instagram" width="28" height="28" />
        </a>
        <a href="#" aria-label="Facebook">
          <img src="img/simbolo-de-la-aplicacion-de-facebook.png" alt="Facebook" width="28" height="28" />
        </a>
        <a href="#" aria-label="TikTok">
          <img src="img/tik-tok.png" alt="TikTok" width="28" height="28" />
        </a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    <p>FFANDOM COMMUNITY — Proyecto académico • <?php echo date('Y'); ?></p>
    <a href="#top" class="to-top" aria-label="Volver arriba">↑ Volver arriba</a>
  </div>
</footer>
