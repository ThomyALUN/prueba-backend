<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>Gestión de productos</title>
    </head>
    <body>
        <div class="container text-center">
            <a href="{{route('products.create')}}">
            <button class="btn btn-success btn-block">
                Crear
            </button>
        </a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td> {{$product->id}} </td>
                    <td> {{$product->name}} </td>
                    <td> {{$product->description}} </td>
                    <td> {{$product->price}} </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}", method="post">
                        @method('DELETE')
                        @csrf  
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>