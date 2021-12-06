
<div class="card">
    {{$search}}
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese el nombre del post" >
    </div>
    @if($fichas->count())
    
    <div class="card-body">
        <table id="tabla" class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Federación</th>
                <th>Imagen</th>
                <th>Pasaporte</th>
                <th colspan="2"></th>
            </thead>

            <tbody>
                @foreach ($fichas as $ficha)
                    <tr>
                <td>{{$ficha->id}}</td>
                <td>{{$ficha->primerNombre}}</td>
                <td>{{$ficha->apelPater}}</td>
                <td>{{$ficha->email}}</td>
                <td>{{$ficha->federacion->nombre}}</td>
                <td>
                        @isset($ficha->image)
                        <img id="picture" style="height:40px;" src="{{asset(Storage::url($ficha->image->url))}}" alt=""> 
                        @endif
                </td>
                <td>
                        @isset($ficha->pasaporte)
                        <img id="picture" style="height:40px;" src="{{asset(Storage::url($ficha->pasaporte->url))}}" alt=""> 
                        @endif
                </td>
                <td with="10px">
                <a class="btn btn-primary btn-sm" href="{{route('admin.fichas.edit', $ficha)}}">Editar</a>
                </td>
                <td with="10px">
                <form action="" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            
                            </form>
                        </td>

                    </tr>
                    
                @endforeach

            </tbody>

        </table>
    </div>

    <div class="card-footer">
        {{$fichas->links()}}
    </div>
        
    @else
        <div class="card-body">
            <strong>No hay registros...</strong>
        </div>
    @endif

</div>




