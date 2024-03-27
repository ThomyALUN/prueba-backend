<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Crear productos</title>
    </head>
    <body>
        <div class="container text-center">
            <form action="{{route('products.store')}}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre
                        <input type="text" id="name" name="prod_name" class="form-control" require>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción:
                        <input type="text" id="description" name="prod_description" class="form-control" require>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio:
                        <input step="0.5" type="number" id="price" name="prod_price" class="form-control">
                    </label>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>