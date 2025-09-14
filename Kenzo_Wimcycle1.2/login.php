<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Wimcycle</title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
</head>
<body>
    <?php include "./includes/header.php" ?>
    <section>
  <div class="container py-2">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://sdmntpraustraliaeast.oaiusercontent.com/files/00000000-0b94-61fa-993b-cebb15912808/raw?se=2025-09-14T08%3A25%3A24Z&sp=r&sv=2024-08-04&sr=b&scid=16ea12c7-f790-54bc-ba3c-12d2721f066e&skoid=b7fc319f-b93c-4fac-ba5f-14fdc3f9209f&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-09-13T20%3A21%3A31Z&ske=2025-09-14T20%3A21%3A31Z&sks=b&skv=2024-08-04&sig=cHfJDKKjL3K4SdKXgn7RMC9c87RT9hu0qelIBwRIJsE%3D"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Username</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>
        

          <!-- Submit button -->
          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</section>

    <?php include "./includes/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>