<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('cliente.destroy',$cliente->id)}}" method="POST">
            @csrf
            @method('DELETE')
           
       
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Desea eliminar el registro de: {{$cliente->nombre." ".$cliente->apellido}} ?
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-danger" value="Eliminar">
          <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </form>
    </div>
  </div>