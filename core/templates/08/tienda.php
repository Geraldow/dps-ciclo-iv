<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Tecnología</title>
    <link rel="stylesheet" href="css/styles_tienda.css">
</head>
<body>
    <div class="container">
        <h1>Tienda "Don Pepito"</h1>
        <form action="operations.php" method="post">
            <label for="cliente">Nombre del Cliente:</label>
            <input type="text" id="cliente" name="cliente" required>

            <label for="producto">Producto:</label>
            <select id="producto" name="producto" required>
                <option value="Lavadora LG|1250.00">Lavadora LG - S/ 1250.00</option>
                <option value="Micrófono Shure|890.00">Micrófono Shure - S/ 890.00</option>
                <option value="Refrigeradora Samsung|1650.00">Refrigeradora Samsung - S/ 1650.00</option>
                <option value="Microondas|450.00">Microondas - S/ 450.00</option>
                <option value="TV LED 70''|2250.00">TV LED 70'' - S/ 2250.00</option>
                <option value="Licuadora Oster|184.00">Licuadora Oster - S/ 184.00</option>
                <option value="Luz LED|35.00">Luz LED - S/ 35.00</option>
                <option value="Tostadora|98.99">Tostadora - S/ 98.99</option>
                <option value="Cocina LG|760.00">Cocina LG - S/ 760.00</option>
                <option value="Cámara Web Logitech C920|500.00">Cámara Web Logitech C920 - S/ 500.00</option>
            </select>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" min="1" required>

            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>
