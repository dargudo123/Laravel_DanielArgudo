<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container text-center">
      <div class="row">
        <div class="col">1 of 3</div>
        <div class="col-6">
          <h1>Listado de Proyectos</h1>
        </div>
        <div class="col">3 of 3</div>
      </div>

      <div class="row">
        <div class="col">1 of 3</div>
        <div class="col-9">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha creación</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($proyectos as $proyecto)
              <tr>
                <th scope="row">{{ $proyecto->id }}</th>
                <td>{{ $proyecto->nombre }}</td>
                <td>{{ $proyecto->descripcion }}</td>
                <td>{{ $proyecto->created_at }}</td>
                <td class="d-flex gap-2">
                  
                  <!-- Botón Editar -->
                  <a href="{{ route('projects.edit', $proyecto->id) }}" class="btn btn-warning btn-sm">
                    Editar
                  </a>

                  <!-- Botón Eliminar -->
                  <form action="{{ route('projects.destroy', $proyecto->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este proyecto?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                      Eliminar
                    </button>
                  </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
