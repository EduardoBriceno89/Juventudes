<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/loginStyles.css" />
  </head>
  <body>
    <main class="container d-flex justify-content-center align-items-center">
      <form action="<?=base_url()?>/validate" method="post">
        <img src="<?=base_url()?>/assets/images/logo.jpg" alt="" srcset="" class="logo" />
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example1">Correo</label>
          <input
            type="email"
            id="form1Example1"
            class="form-control"
            required
          />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Contraseña</label>
          <input
            type="password"
            id="form1Example2"
            class="form-control"
            required
          />
        </div>

        <button type="submit" class="btn btn-primary btn-block button">
          Iniciar Sesión
        </button>
      </form>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
