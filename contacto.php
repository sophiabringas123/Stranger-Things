<?php /* contacto.php */
require __DIR__ . '/db.php';

$ok = false;
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Sanitizar
  $nombre  = trim($_POST['nombre'] ?? '');
  $email   = trim($_POST['email'] ?? '');
  $mensaje = trim($_POST['mensaje'] ?? '');

  // Validar
  if ($nombre === '')  { $errores[] = 'El nombre es obligatorio.'; }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errores[] = 'El email no es válido.'; }
  if ($mensaje === '') { $errores[] = 'El mensaje es obligatorio.'; }

  // Si no hay errores, guardamos en MySQL
  if (!$errores) {
    $sql = "INSERT INTO contacto (nombre, email, mensaje, fecha)
            VALUES (?, ?, ?, NOW())";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $nombre, $email, $mensaje);
    $ok = mysqli_stmt_execute($stmt);
    if (!$ok) { $errores[] = 'Error al guardar: ' . mysqli_error($conn); }
    mysqli_stmt_close($stmt);
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contacto</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
 
<?php include 'header.php'; ?>


  <main>
     <section class="hero">
    <h1>Contacto</h1>
    <p>
      ¿Tenés una teoría sobre la Temporada 5? ¿Querés compartir un fan art espectacular
      o simplemente mandar un saludo a Hawkins? ¡Este es tu canal directo con el staff!
    </p>
    <p style="margin-top: 10px;">
      Usá el formulario para dejarnos tu mensaje. Recordá que todos los comentarios 
      recibidos se publican en la sección de Comunidad. 💬
    </p>
  </section>

    <section class="contacto-form">
      <?php if ($ok): ?>
        <div class="alert ok">¡Gracias! Tu mensaje fue enviado.</div>
      <?php endif; ?>

      <?php if ($errores): ?>
        <div class="alert error">
          <ul><?php foreach($errores as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?></ul>
        </div>
      <?php endif; ?>

      <form class="needs-confirm" method="post" action="">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>" required />

        <label>Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required />

        <label>Mensaje</label>
        <textarea name="mensaje" rows="5" required><?= htmlspecialchars($_POST['mensaje'] ?? '') ?></textarea>

        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>
<?php include 'footer.php'; ?>
<script src="js/jsapp.js"></script>
</body>
</html>