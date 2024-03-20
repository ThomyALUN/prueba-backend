<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label>
            Ingrese el nombre del producto
            <input type="text" name="product_name" placeholder="Ingresa el nombre del producto" id="">
        </label>
        <label>
            Ingrese el precio del producto
            <input step="0.5" type="number" name="product_price" placeholder="Ingresa el precio del producto" id="">
        </label>
        <label>
            Ingrese el stock del producto
            <input type="number" name="product_stock" placeholder="Ingresa el stock del producto" id="">
        </label>
        <button type="submit">Guardar info</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products }}
</body>
</html>