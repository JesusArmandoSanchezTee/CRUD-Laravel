<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Empleado</h1>
    
    <form action="{{url('empleado')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre">
        </div>

        <div class="mb-3">
            <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
            <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
        </div>

        <div class="mb-3">
            <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
            <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
        </div>

        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="email" name="Correo" id="Correo">
        </div>

        <div class="mb-3">
            <label for="Foto" class="form-label">Foto</label>
            <input type="file" name="Foto" id="Foto">
        </div>

        <div class="mb-3">
            <input type="submit" value="Enviar">
        </div>



    </form>
</body>
</html>