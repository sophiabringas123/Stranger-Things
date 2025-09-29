<?php /* merch.php */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Merch oficial</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <!-- Hero -->
  <section class="merch-hero">
    <h1>Merch oficial de Stranger Things</h1>
  </section>
  <section class="merch-intro" style="max-width:900px; margin:0 auto; padding:20px;">
  <p>
    Bienvenido a la tienda de <strong>Stranger Things</strong>. 
    Aquí vas a encontrar productos inspirados en Hawkins, el club Hellfire 
    y el Mundo del Revés: remeras, buzos, tazas, accesorios y mucho más.
  </p>
  <p>
    Cada pieza fue pensada como un homenaje a la serie que marcó a toda una 
    generación de fans. Sumate a la experiencia ochentosa llevando un poco 
    del universo de <em>Stranger Things</em> a tu día a día.
  </p>
</section>


  <!-- Filtros (maqueta visual) -->
  <section class="merch-filtros">
    <div class="filtros-wrap">
      <label>
        <span class="sr-only">Buscar</span>
        <input type="search" placeholder="Buscar productos…" />
      </label>

      <select aria-label="Ordenar">
        <option value="">Ordenar</option>
        <option>Más nuevos</option>
        <option>Menor precio</option>
        <option>Mayor precio</option>
      </select>
    </div>

    <p class="nota-filtros">* Esta es una maqueta visual (no procesa compras reales).</p>
  </section>

  <!-- Grilla de productos -->
  <section class="productos-grid">
    <!-- 1 -->
    <article class="card-prod">
      <figure>
        <img src="img/merch-camiseta-hawkins.jpg" alt="Camiseta Hawkins High School" />
      </figure>
      <h3>Camiseta Hawkins High</h3>
      <p class="tags">Indumentaria • Unisex</p>
      <div class="precio">$ 17.990</div>
      <button class="btn-add" type="button">Agregar</button>
    </article>

    <!-- 2 -->
    <article class="card-prod">
      <figure>
        <img src="img/merch-buzo-st-logo.jpg" alt="Buzo Stranger Things Logo" />
      </figure>
      <h3>Buzo ST Logo</h3>
      <p class="tags">Indumentaria • Abrigo</p>
      <div class="precio">$ 34.990</div>
      <button class="btn-add" type="button">Agregar</button>
    </article>

    <!-- 3 -->
    <article class="card-prod">
      <figure>
        <img src="img/merch-gorro-hellfire.jpg" alt="Gorro Hellfire Club" />
      </figure>
      <h3>Gorro Hellfire</h3>
      <p class="tags">Accesorios</p>
      <div class="precio">$ 9.990</div>
      <button class="btn-add" type="button">Agregar</button>
    </article>

    <!-- 4 -->
    <article class="card-prod">
      <figure>
        <img src="img/merch-taza-eggo.jpg" alt="Taza Eggo" />
      </figure>
      <h3>Taza Eggo</h3>
      <p class="tags">Hogar</p>
      <div class="precio">$ 7.490</div>
      <button class="btn-add" type="button">Agregar</button>
    </article>

    <!-- 5 -->
    <article class="card-prod">
      <figure>
        <img src="img/merch-poster-vecna.jpg" alt="Póster Vecna" />
      </figure>
      <h3>Póster de Vecna</h3>
      <p class="tags">Pósters</p>
      <div class="precio">$ 5.990</div>
      <button class="btn-add" type="button">Agregar</button>
    </article>

    <!-- 6 -->
    <article class="card-prod">
      <figure>
        <img src="img/merch-llavero-demogorgon.jpg" alt="Llavero Demogorgon" />
      </figure>
      <h3>Llavero Demogorgon</h3>
      <p class="tags">Accesorios</p>
      <div class="precio">$ 3.990</div>
      <button class="btn-add" type="button">Agregar</button>
    </article>
  </section>

 <section class="merch-footer" style="max-width:900px; margin:32px auto; padding:20px;">
  <h2>👕 🎲 🎧 Llevá Hawkins con vos</h2>
  <p>
    Ya sea que quieras revivir tus escenas favoritas con una taza de Eggo, 
    mostrar tu fanatismo con un buzo del Hellfire Club, o sumar un accesorio retro 
    a tu colección, nuestra sección de merch está pensada para vos.
  </p>
  <p>
    Explorá, elegí tus favoritos y seguí disfrutando del fenómeno cultural 
    que es <strong>Stranger Things</strong>.
  </p>
</section>

</main>

<?php include 'footer.php'; ?>
<script src="js/jsapp.js"></script>
</body>
</html>
