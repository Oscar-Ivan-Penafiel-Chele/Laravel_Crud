<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Pasantias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        #ti{
            margin-bottom:30px;
            font-size:25px;
            text-align:center;
            width: 100%;
            height: 60px;
            background: #30E8BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FF8235, #30E8BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FF8235, #30E8BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            

        }
        #todo{
            display: flex;
            margin-bottom: 30px;
        }
        .nuevo{
            width: 50%;
        }
        .t-b{
            width: 50%;
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
        <div id="ti">
            <p><b>CRUD de Clientes</b></p>
        </div> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('cliente.index')}}" method="get">
                        <div class="form-row" id="todo">
                            <div class="nuevo">
                                <a href="{{route('cliente.create')}}" class="btn btn-success">Nuevo</a>
                            </div>
                            <div class="t-b">
                                <input id="b" type="text" class="form-control" name="texto" value="{{$texto}}" placeholder="Nombre, Apellido o Documento">
                                <input type="submit" class="btn btn-primary" value="Buscar" style="margin-left: 10px">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cedula</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                </tr>
                                <tbody> 
                                    @if(count($clientes)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultado</td>
                                        </tr>    
                                    @else
                                        @foreach ($clientes as $cliente)
                                            <tr>
                                                <td>
                                                    <a href="{{route('cliente.edit',$cliente->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$cliente->id}}">
                                                        Eliminar
                                                    </button>     
                                                </td>
                                                <td>{{$cliente->id}}</td>
                                                <td>{{$cliente->nombre}}</td>
                                                <td>{{$cliente->apellido}}</td>
                                                <td>{{$cliente->documento}}</td>
                                                <td>{{$cliente->direccion}}</td>
                                                <td>{{$cliente->telefono}}</td>
                                                <td>{{$cliente->email}}</td>
                                            </tr>
                                            @include('cliente.delete')
                                        @endforeach
                                    @endif
                                </tbody>
                                {{$clientes->links()}}
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>