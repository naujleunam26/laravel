<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Calculadora IMC</title>
</head>
<body>
<div class="container">
    <h1>Calculadora de IMC</h1>
    <form action="index.php" method="POST">
        <div class="mb-3">
            <label for="weight" class="form-label">Peso (kg)</label>
            <input type="number" name="weight" id="weight" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Altura (m)</label>
            <input type="number" step="0.01" name="height" id="height" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
</body>
</html>
