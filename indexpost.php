<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-9 col-xl-9">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center bg-warning"> 
                    Inscripción concierto privado empresarial
                </div>
                <div class="card-body bg-secondary">
                <table class="table">
                    <tbody>
                        <form action="respuestapost.php" method="POST" class="row g-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="inputEmail4" class="form-label">Nombres</label>
                                    <input name="nombre" type="text" class="form-control" id="nombres">
                                  </div>
                                  <div class="col-6">
                                    <label for="inputPassword4" class="form-label">Apellidos</label>
                                    <input name="apellidos" type="text" class="form-control" id="apellidos">
                                  </div>
                                  <div class="col-6 mt-2">
                                    <label for="inputEmail4" class="form-label">Identificación</label>
                                    <input name="identificacion" type="text" class="form-control" id="identificacion">
                                  </div>
                                  <div class="col-6 mt-2">
                                    <label for="inputPassword4" class="form-label">Edad</label>
                                    <input name="edad" type="text" class="form-control" id="edad">
                                  </div>
                                  <div class="col-6 mt-2">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                  </div>
                                  <div class="col-6 mt-2">
                                    <label for="inputPassword4" class="form-label">Dirección</label>
                                    <input name="direccion" type="text" class="form-control" id="tiempo">
                                  </div>
                                  <div class="col-6 mt-2">
                                    <label for="inputPassword4" class="form-label">Colegio</label>
                                    <input name="colegio" type="text" class="form-control" id="tiempo">
                                  </div>
                                  <div class="col-6 mt-2">
                                    <label for="inputPassword4" class="form-label">Curso</label>
                                    <input name="curso" type="text" class="form-control" id="tiempo">
                                  </div>
                                  <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Inscribirse</button>
                                  </div>
                                </form>
                          </tbody>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</body> 
</html>