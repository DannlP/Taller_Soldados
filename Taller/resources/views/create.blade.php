
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    

    <form action="{{ route('soldados.store') }}" method="POST">
        @csrf
        
        <h1>INGRESA TUS DATOS</h1>

        <label for="Cod_s">Código:</label>
        <input type="text" name="Cod_s" id="Cod_s" required>
        <br>
    
        <label for="Nom_s">Nombre:</label>
        <input type="text" name="Nom_s" id="Nom_s" required>
        <br>
    
        <label for="Apell_s">Apellido:</label>
        <input type="text" name="Apell_s" id="Apell_s" required>
        <br>
    
        <label for="Grado_s">Grado:</label>
        <input type="text" name="Grado_s" id="Grado_s" required>
        <br>
    
        <label for="Cod_ce1">Código Cuerpo de Ejército:</label>
        <input type="number" name="Cod_ce1" id="Cod_ce1" required>
        <br>
    
        <label for="Num_com1">Número Compañía:</label>
        <input type="number" name="Num_com1" id="Num_com1" required>
        <br>
    
        <label for="Cod_c2">Código Cuartel:</label>
        <input type="number" name="Cod_c2" id="Cod_c2" required>
        <br>
    
        <button type="submit">Guardar</button>
    </form>
    

<style>

    h1{
        display: flex
    }
    form {
        max-width: 400px;
        margin: 0 auto;
    }

    div {
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button[type="submit"] {
        padding: 10px 15px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style>
    

</body>
</html>
