

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<form method="POST" action="{{ route('cuartel.store') }}">
    @csrf

    <div>
        <label for="cod_c">Código Cuartel:</label>
        <input type="text" name="cod_c" id="cod_c" required>
    </div>

    <div>
        <label for="nom_c">Nombre Cuartel:</label>
        <input type="text" name="nom_c" id="nom_c" required>
    </div>

    <div>
        <label for="ubic_c">Ubicación Cuartel:</label>
        <input type="text" name="ubic_c" id="ubic_c" required>
    </div>

    <button type="submit">Guardar</button>

</form>

<style>
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

    input[type="text"] {
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
