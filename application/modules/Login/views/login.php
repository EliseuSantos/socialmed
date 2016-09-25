<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SocialMed - Login</title>
  <link rel="stylesheet" href="/socialmedHUB/assets/css/login.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Entrar</h1>
      <form method="post" action="Home">
        <p><input type="text" name="login" value="" placeholder="Usuário ou Email cadastrado"></p>
        <p><input type="password" name="password" value="" placeholder="Senha"></p>
        <p class="lembre-me">
          <label>
            <input type="checkbox" name="lembre-me" id="lembre-me">
            Lembre-me
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Entrar"></p>
      </form>
    </div>
  </section>
</body>
</html>
