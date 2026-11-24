<form class="row row-cols-2 w-50" method="post" action="" enctype="multipart/form-data">

    <div class="mb-3">
        <label class="form-label" for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo">
    </div>

    <div class="mb-3">
        <label class="form-label" for="universe">Universo</label>
        <select class="form-select" name="universe" id="universe">
            <option selected="selected">Seleccione...</option>
            <option value="marvel">Marvel</option>
            <option value="dc">DC</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label" for="director">Director</label>
        <input type="text" class="form-control" name="director" id="director">
    </div>

    <div class="mb-3">
        <label class="form-label" for="anyo">Año</label>
        <input type="date" class="form-control" name="anyo" id="anyo">
    </div>

    <div class="mb-3 form-check form-switch">
        <input type="checkbox" class="form-check-input" name="disponible" id="disponible" checked>
        <label class="form-check-label" for="disponible">Disponible</label>
    </div>

    <div>
        <button type="submit" class="btn btn-outline-primary">Crear nueva pelicula</button>
    </div>


</form>