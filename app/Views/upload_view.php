<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php base_url() ?>./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>./assets/css/CardStyle.css">
  <title>Selector</title>
</head>

<body>
  <div class="d-flex justify-content-center align-items-center" style="margin: 2rem 0 2rem 0;">
    <div class="card" style="width: 20rem;">
      <img src="./images/profile.jpg" class="card-img-top" alt="seleccion de imagen" style="width: 100%; height: 400px;">
      <div class="card-body">
        <h5 class="card-title">Nombre del postulante</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id veniam facere ea, aut impedit sapiente enim pariatur et obcaecati debitis velit nam, doloremque dolores eum repellat suscipit, molestiae quidem minus?</p>
        <div class="d-flex justify-content-center gap-2">
          <a href="#" class="btn btn-primary">Aceptar</a>
          <a href="#" class="btn btn-danger">Rechazar</a>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url() ?>./assets/js/bootstrap.min.js"></script>
</body>

</html>