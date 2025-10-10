<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
      crossorigin="anonymous"
    >
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col">1 of 3</div>
        <div class="col-6">2 of 3 (wider)</div>
        <div class="col">3 of 3</div>
      </div>

      <div class="row">
        <div class="col">1 of 3</div>
        <div class="col-5">
          <form action="{{ route('projects.update', $proyecto->id) }}" method="post">
            @csrf
            @method('PUT')
            <input class="form-control" 
                name="nombre" 
                id="nombre" 
                type="text" 
                value="{{ $proyecto->nombre }}"
                placeholder="Ingrese el título del proyecto:" 
                aria-label="Título Proyecto">
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción del proyecto</label>
              <textarea class="form-control" 
                 id="descripcion" 
                name="descripcion" 
                 rows="3">{{ $proyecto->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        </div>
        <div class="col">3 of 3</div>
      </div>
    </div>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
      crossorigin="anonymous"
    ></script>
  </body>
</html>