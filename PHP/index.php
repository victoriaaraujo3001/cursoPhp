<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>
<body>
  <section class="content">
      <div class="contato">
      <h2>Formulario para contato</h2>
    <form action="./dados.php" class="form" method="POST">
        <input type="text" name="name" class="field" placeholder="Digite seu nome">
        <input type="email" name="email" class="field" placeholder="Digite seu email">
        <textarea name="message" class="field"></textarea>
        <input class= "field"type="submit" value="Enviar">
    </form>
      </div>
  </section>
</body>
</html>