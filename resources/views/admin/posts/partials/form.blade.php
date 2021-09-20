<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
    @error('name')
        <small class="text-danger">{{$message}} </small>     
    @enderror

    </div>

    <div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}} </small>     
    @enderror
    </div>

    <div class="form-group">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{$message}} </small>     
    @enderror
    </div>

    <div class="form-group">
        <p class="font-weigth-bold">Etiquetas</p>
        @foreach ($tags as $tag)
        <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name}}
        </label>
            
        @endforeach
        
      
        @error('tags')
        <br>
        <small class="text-danger">{{$message}} </small>     
        @enderror


    </div>
    
    <div class="form-group">
        <p class="font-weigth-bold">Estado</p>
        <label>
            {!! Form::radio('status', 1, true) !!}
            Borrador
        </label>

        <label>
            {!! Form::radio('status', 2) !!}
            Publicado
        </label>
        

        @error('status')
        <br>
        <small class="text-danger">{{$message}} </small>     
        @enderror

    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset($post->image)
                <img id="picture" src="{{asset(Storage::url($post->image->url))}}" alt=""> 
                @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2021/08/10/18/32/cat-6536684_1280.jpg" alt=""> 
                @endif

            </div>
            
        </div>
        
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
            @error('file')
                <small class="text-danger">{{$message}} </small>     
            @enderror

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla vitae architecto voluptates, aspernatur commodi ipsa laudantium! Maxime eveniet debitis tempore pariatur a, cum nostrum id voluptates vero iste, tenetur nisi.</p>
        </div>

    </div>
    
    <div class="form-group">
        {!! Form::label('extract', 'Extracto:') !!}    
        {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
        @error('extract')
        <small class="text-danger">{{$message}} </small>     
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Cuerpo del post:') !!}    
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        
        @error('body')
        <small class="text-danger">{{$message}} </small>     
        @enderror
    
    </div>