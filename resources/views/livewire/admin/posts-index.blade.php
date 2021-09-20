
<div class="card">
    {{$search}}
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese el nombre del post" >
    </div>
    @if($posts->count())
    
    <div class="card-body">
        <table id="tabla" class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2"></th>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td with="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                        </td>
                        <td with="10px">
                            <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
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
        {{$posts->links()}}
    </div>
        
    @else
        <div class="card-body">
            <strong>No hay registros...</strong>
        </div>
    @endif

</div>




