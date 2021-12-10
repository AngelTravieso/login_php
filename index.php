<?php include_once 'includes/header.php'; ?>

<body>
    <div class="container">
        <div class="row">
            <div class="card col-6 mx-auto">
                <div class="card-body">
                    <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="correo@correo.com" required>  
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="******" required>
                    </div>

                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <input type="submit" id='formulario' class="btn btn-primary" value="Iniciar sesión">
                        <a href="views/signup.php" class="text-decoration-none">¿Aún no tienes cuenta?</a>
                    </div>
                </form>
                </div>
             </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src='js/index.js'></script>
</body>
</html>