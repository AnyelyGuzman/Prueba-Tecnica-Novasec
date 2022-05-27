<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Prueba Tecnica</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/styles/disponibilidad.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="disponibilidad_content">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Disponibilidad de habitaciones</h5>
                    <p>
                        La habitacion <?= $resultFilter->name ?> tiene <?= $resultFilter->available_rooms ?> disponible
                        <?php if($resultFilter->available_rooms > 0) {?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Reservar
                          </button>
                        <?php } ?>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <form action="/" method="get">
                                <div class="mb-6">
                                    <label for="dateStart" class="form-label">Fecha ingreso</label>
                                    <input type="date" class="form-control" id="dateStart" name="dateStart" />
                                </div>
                                <div class="mb-6">
                                    <label for="dateEnd" class="form-label">Fecha salida</label>
                                    <input type="date" class="form-control" id="dateEnd" name="dateEnd" />
                                </div>
                                <div class="mb-6">
                                    <label for="habitacion" class="form-label">Clientes</label>
                                    <select class="form-select" aria-label="Default select example" name="habitacion">
                                        <option selected>Seleccione el cliente</option>
                                        <?php foreach ($resultUser as $el): ?>
                                            <option value="<?= esc($el['id']) ?>"> <?= esc($el['fullName']) ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
