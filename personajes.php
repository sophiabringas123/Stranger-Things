<?php /* personajes.php */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Personajes</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <style>
    html{ scroll-behavior:smooth; }
    .personajes-detalles{
      max-width:900px; margin:24px auto; padding:0 24px;
      display:flex; flex-direction:column; gap:16px;
    }
    .personajes-detalles .detalle{
      background:#141414; border:1px solid #2b2b2b; border-radius:12px;
      padding:16px 18px; scroll-margin-top:90px;
    }
    .personajes-detalles .detalle:target{
      outline:2px solid var(--rojo); box-shadow:0 0 0 3px rgba(197,58,51,.25);
    }
    .back-top{ display:inline-block; margin-top:4px; color:#9ad; text-decoration:none; }
    .back-top:hover{ color:#cfe3ff; }

    /* Las tarjetas ahora son links */
    .card-personaje a{
      display:block; text-decoration:none; color:inherit;
    }
    .card-personaje img{ cursor:pointer; }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <section class="hero">
    <h1>Characters</h1>
  </section>
  <section class="personajes-intro" style="max-width:900px; margin:24px auto; padding:0 24px;">
  <p>
    El corazón de <strong>Stranger Things</strong> reside en sus habitantes. 
    Desde el valiente grupo de amigos que se aventura en lo desconocido 
    hasta los adultos que luchan por proteger a Hawkins, cada personaje 
    es una pieza clave en el mapa de misterios y peligros del Mundo del Revés. 
  </p>
  <p>
    Explorá a continuación la guía completa de héroes, aliados y, por supuesto, 
    las terroríficas amenazas que definieron cada temporada. Hacé clic en 
    cada tarjeta para conocer la historia completa y su rol crucial en la serie.
  </p>
</section>




  <!-- Grupo de amigos -->
  <section class="personajes-bloque" id="top-personajes">
    <h2>🔴 Grupo de amigos</h2>
    <div class="grid-personajes">
      <article class="card-personaje">
        <a href="#will">
          <img src="img/will.jpg" alt="Will Byers" />
          <h3>WILL</h3>
          <p>Su desaparición desata los eventos iniciales.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#mike">
          <img src="img/mike.jpg" alt="Mike Wheeler" />
          <h3>MIKE</h3>
          <p>Líder del grupo; valiente y leal.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#eleven">
          <img src="img/eleven.jpg" alt="Eleven" />
          <h3>ELEVEN</h3>
          <p>Poderes telequinéticos; escapa de un laboratorio.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#lucas">
          <img src="img/lucas.jpg" alt="Lucas Sinclair" />
          <h3>LUCAS</h3>
          <p>Escéptico pero valiente; protege a sus amigos.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#max">
          <img src="img/max.jpg" alt="Max Mayfield" />
          <h3>MAX</h3>
          <p>Independiente y fuerte; clave en la temporada 4.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#dustin">
          <img src="img/dustin.jpg" alt="Dustin Henderson" />
          <h3>DUSTIN</h3>
          <p>Ingenioso y optimista; corazón del equipo.</p>
        </a>
      </article>
    </div>
  </section>

  <!-- Jóvenes y aliados -->
  <section class="personajes-bloque">
    <h2>🔴 Jóvenes y aliados</h2>
    <div class="grid-personajes">
      <article class="card-personaje">
        <a href="#jonathan">
          <img src="img/jonathan.jpg" alt="Jonathan Byers" />
          <h3>JONATHAN</h3>
          <p>Hermano mayor de Will; apasionado por la fotografía.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#nancy">
          <img src="img/nancy.jpg" alt="Nancy Wheeler" />
          <h3>NANCY</h3>
          <p>Inteligente y decidida; investiga las amenazas.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#robin">
          <img src="img/robin.jpg" alt="Robin Buckley" />
          <h3>ROBIN</h3>
          <p>Ingeniosa; pieza clave desde la temporada 3.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#erica">
          <img src="img/erica.jpg" alt="Erica Sinclair" />
          <h3>ERICA</h3>
          <p>Sarcástica y valiente pese a su edad.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#joyce">
          <img src="img/joyce.jpg" alt="Joyce Byers" />
          <h3>JOYCE</h3>
          <p>Madre de Will; perseverante y protectora.</p>
        </a>
      </article>

      <article class="card-personaje">
        <a href="#hopper">
          <img src="img/hopper.jpg" alt="Jim Hopper" />
          <h3>HOPPER</h3>
          <p>Jefe de policía; figura fuerte y empática.</p>
        </a>
      </article>
    </div>
  </section>

  <!-- Descripciones completas (anclas) -->
  <section class="personajes-detalles">
    <article id="will" class="detalle">
      <h2>Will Byers</h2>
      <p>Will es el detonante de toda la historia. Su desaparición en el bosque de Hawkins desata la búsqueda desesperada de sus amigos y familiares, y revela la existencia del Mundo del Revés. Es un chico sensible y reservado, con gran imaginación y talento para el dibujo.</p>
      <p>A lo largo de la serie, Will sufre las secuelas de haber estado atrapado en otra dimensión y mantiene un vínculo especial con las criaturas que habitan allí. Aunque vulnerable, demuestra una fortaleza interior admirable y es un reflejo del impacto que el miedo y la valentía pueden tener en un niño.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="mike" class="detalle">
      <h2>Mike Wheeler</h2>
      <p>Mike es el líder natural del grupo de amigos. Su valentía, lealtad y convicción lo impulsan a tomar decisiones difíciles y a nunca rendirse, especialmente cuando se trata de proteger a Eleven, con quien desarrolla un profundo vínculo emocional.</p>
      <p>Su carácter idealista y su deseo de hacer lo correcto lo convierten en el motor del grupo. A pesar de los peligros, Mike siempre mantiene la esperanza y representa la parte más humana y empática de la pandilla.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="eleven" class="detalle">
      <h2>Eleven (Once)</h2>
      <p>Eleven es una niña con poderes telequinéticos y un pasado marcado por el sufrimiento. Escapó de un laboratorio donde fue sometida a crueles experimentos, y al encontrarse con Mike, Lucas, Dustin y Will, descubre lo que significa tener amigos y familia.</p>
      <p>Con el tiempo, se convierte en el arma más poderosa contra las amenazas del Mundo del Revés. Aunque muchas veces se siente diferente, su búsqueda de identidad y pertenencia la hacen uno de los personajes más complejos y entrañables.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="lucas" class="detalle">
      <h2>Lucas Sinclair</h2>
      <p>Lucas es el más escéptico del grupo al inicio, pero su pragmatismo lo convierte en una voz necesaria en las decisiones del equipo. Aunque duda de Eleven en un principio, termina siendo uno de sus mayores defensores.</p>
      <p>Con el tiempo, demuestra un coraje admirable, enfrentando tanto a los monstruos como a los retos personales. Su relación con Max revela un lado más tierno y demuestra que, detrás de su dureza, es un chico leal y protector.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="max" class="detalle">
      <h2>Max Mayfield</h2>
      <p>Max llega en la segunda temporada para transformar la dinámica del grupo. Es independiente, fuerte y con una personalidad que no teme confrontar a los demás. Su habilidad para los videojuegos y el skate la convierten en alguien difícil de ignorar.</p>
      <p>En la cuarta temporada adquiere un papel fundamental, mostrando un lado más vulnerable y valiente al mismo tiempo. Su conexión con Vecna la sitúa en el centro del conflicto y la convierte en uno de los personajes más memorables de la serie.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="dustin" class="detalle">
      <h2>Dustin Henderson</h2>
      <p>Dustin es el cerebro ingenioso del grupo. Optimista, curioso y con un gran sentido del humor, siempre logra aligerar los momentos más tensos. Su creatividad le permite resolver problemas que otros no ven.</p>
      <p>Más allá de su intelecto, Dustin es el corazón del equipo, siempre dispuesto a unirlos cuando hay conflictos. Su amistad con Steve Harrington aporta momentos entrañables y refuerza su papel como el alma optimista del grupo.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="jonathan" class="detalle">
      <h2>Jonathan Byers</h2>
      <p>Jonathan es el hermano mayor de Will y uno de los personajes más sensibles de la serie. Amante de la fotografía, su mirada artística lo diferencia de los demás adolescentes de Hawkins.</p>
      <p>Aunque callado y reservado, Jonathan demuestra una valentía silenciosa al proteger a su hermano y apoyar a Nancy en la investigación de los sucesos extraños. Su carácter reflexivo lo convierte en una figura de madurez dentro del grupo juvenil.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="nancy" class="detalle">
      <h2>Nancy Wheeler</h2>
      <p>Nancy comienza como una adolescente común, pero rápidamente se convierte en una joven decidida y valiente. Su curiosidad y deseo de descubrir la verdad la llevan a investigar los horrores del laboratorio de Hawkins.</p>
      <p>A lo largo de la historia, Nancy se consolida como una investigadora implacable, enfrentando criaturas y conspiraciones con determinación. Su evolución refleja el paso de la inocencia a la madurez en un contexto de constante peligro.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="robin" class="detalle">
      <h2>Robin Buckley</h2>
      <p>Robin aparece en la tercera temporada y se gana un lugar crucial en el equipo. Ingeniosa, divertida y perspicaz, rápidamente se convierte en una aliada indispensable en la lucha contra las fuerzas del mal.</p>
      <p>Su amistad con Steve Harrington destaca por la autenticidad y complicidad que comparten. Robin representa frescura, ingenio y diversidad dentro del grupo de héroes.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="erica" class="detalle">
      <h2>Erica Sinclair</h2>
      <p>Erica, la hermana menor de Lucas, irrumpe en la historia con un carácter sarcástico y una confianza que contrasta con su edad. Aunque al principio parece solo un personaje secundario, su inteligencia y valentía la hacen ganar protagonismo.</p>
      <p>Con su ingenio y desparpajo, Erica se convierte en un miembro clave en las misiones, demostrando que la valentía no tiene que ver con la edad.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="joyce" class="detalle">
      <h2>Joyce Byers</h2>
      <p>Joyce es la madre de Will y Jonathan, y representa el amor y la perseverancia maternal. Desde el inicio, es la primera en percibir que la desaparición de su hijo tiene causas sobrenaturales, aunque nadie la crea.</p>
      <p>Su determinación inquebrantable y su intuición la llevan a enfrentarse a fuerzas mucho más grandes que ella. Joyce encarna la lucha de una madre dispuesta a todo por salvar a su familia.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>

    <article id="hopper" class="detalle">
      <h2>Jim Hopper</h2>
      <p>Hopper es el jefe de policía de Hawkins. Al inicio, parece un hombre desgastado y escéptico, pero pronto revela una fuerza y un sentido de justicia que lo convierten en un pilar en la lucha contra el laboratorio y el Mundo del Revés.</p>
      <p>Con una mezcla de dureza y ternura, Hopper desarrolla una relación paternal con Eleven, dándole un lugar seguro y un vínculo emocional que transforma a ambos. Su figura es la de un protector que, a pesar de sus cicatrices, nunca deja de luchar.</p>
      <a class="back-top" href="#top-personajes">Volver arriba ↑</a>
    </article>
  </section>
</main>

<?php include 'footer.php'; ?>
<script src="js/jsapp.js"></script>
</body>
</html>
