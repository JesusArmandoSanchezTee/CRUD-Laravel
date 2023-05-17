<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 id="title" class="text-center">Empleado</h1>
        <div class="form-wrap">
            <form action="{{url('empleado')}}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="Nombre" class="form-label">Nombre</label>
                                <input type="text" name="Nombre" id="Nombre" placeholder="Enter your name"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
                                <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" placeholder="Enter your name"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>


                {{-- segunda columna --}}


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <div class="mb-3">
                                <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
                                <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" placeholder="Enter your name"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <div class="mb-3">
                                <label for="Correo" class="form-label">Correo</label>
                                <input type="email" name="Correo" id="Correo" placeholder="Enter your name"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <div class="mb-3">
                                <label for="Foto" class="form-label">Foto</label>
                                <br>
                                <input type="file" name="Foto" id="Foto">
                            </div>
                            
                        </div>
                    </div>
                </div>
    
    
    
    
    
                <div class="mb-3">
                    <input class="btn btn-success text-center" type="submit" value="Enviar">
                </div>
    
    
    
            </form>
        </div>
        
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap');

        .form-label {
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
        }

        .container {
            max-width: 1230px;
            width: 100%;
        }

        h1 {
            font-weight: 700;
            font-size: 45px;
            font-family: 'Roboto', sans-serif;
        }

        .form-control {
            height: 50px;
            background: #ecf0f4;
            border-color: transparent;
            padding: 0 15px;
            font-size: 16px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .form-wrap {
            background: rgba(255, 255, 255, 1);
            width: 100%;
            max-width: 850px;
            padding: 50px;
            margin: 0 auto;
            position: relative;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        }
    </style>
</body>

</html>