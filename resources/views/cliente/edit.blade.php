<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Pantias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Editar Cliente</h4>
        <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('cliente.update',$cliente->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" required maxlength="100" value="{{$cliente->nombre}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Apellido: </label>
                            <input type="text" class="form-control" name="apellido" required maxlength="100" value="{{$cliente->apellido}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Cedula: </label>
                            <input type="text" class="form-control" name="documento" required maxlength="10" value="{{$cliente->documento}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Direccion: </label>
                            <input type="text" class="form-control" name="direccion" required maxlength="100" value="{{$cliente->direccion}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Telefono: </label>
                            <input type="text" class="form-control" name="telefono" required maxlength="10" value="{{$cliente->telefono}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Email: </label>
                            <input type="text" class="form-control" name="email" required maxlength="100" value="{{$cliente->email}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Save">
                            <input type="reset" class="btn btn-danger" value="Cancel">
                            <a href="javascript:history.back()" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>