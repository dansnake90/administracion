
    <div class="row">
      <div class="col-sm-9">
    <div class="form-group">
    
    @error('federacion_id')
        <small class="text-danger">{{$message}} </small>     
    @enderror
    </div>

    <div class="form-row">
      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Federación:') !!}
        {!! Form::select('federacion_id', $federaciones, $ficha->federacion->id, ['class' => 'form-control']) !!}
      </div>

      <div class="col-md-6 mb-3">
        <label for="validationDefault02">Otra federacion</label>
        <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="{{$ficha->federacion->nombre}}" required>
      </div>

    </div>

    <div class="form-row">
      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Disciplina:') !!}
        {!! Form::select('federacion_id', $federaciones, null, ['class' => 'form-control']) !!}
        </div>

     
      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Club:') !!}
        {!! Form::text('club', $ficha->club, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div>
  
    </div>

  
    <div class="form-row">
      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Primer nombre:') !!}
        {!! Form::text('email', $ficha->p_nombre, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>

      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Segundo nombre:') !!}
        {!! Form::text('email', $ficha->s_nombre, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>

      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Apellido paterno:') !!}
        {!! Form::text('email', $ficha->ape_paterno, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div>

     
      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Apellido materno:') !!}
        {!! Form::text('email', $ficha->ape_materno, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div>
  
    </div>

   
    <div class="form-row">
      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Nombre preferido:') !!}
        {!! Form::text('email', $ficha->nom_preferido, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>
      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Apellido preferido:') !!}
        {!! Form::text('email', $ficha->ape_preferido, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>

       
          <div class="col-md-2 mb-3">
            {!! Form::label('federacion_id', 'F. nacimiento:') !!}

            {!! Form::select('federacion_id', $dias, $dfecha, ['class' => 'form-control']) !!}
          </div>  
          <div class="col-md-2 mb-3">
            {!! Form::label('federacion_id', '&nbsp;') !!}
            {!! Form::select('federacion_id', $meses, $mfecha, ['class' => 'form-control']) !!}
          </div>  
          <div class="col-md-2 mb-3">
            {!! Form::label('federacion_id', '&nbsp;') !!}
            {!! Form::select('years', $years, $idyearfecha, ['class' => 'form-control']) !!}
          </div>
      
        
    </div>
        
    

    <div class="form-row">
      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Genero:') !!}
        {!! Form::select('federacion_id', $federaciones, null, ['class' => 'form-control']) !!}
        </div>

     
      <div class="col-md-6 mb-6">
        {!! Form::label('federacion_id', 'Grupo sanguíneo:') !!}
        {!! Form::select('federacion_id', $federaciones, null, ['class' => 'form-control']) !!}
        </div>
  
    </div>

    <div class="form-row">
      <div class="col-md-4 mb-3">
        {!! Form::label('federacion_id', 'Nacionalidad:') !!}
        {!! Form::select('federacion_id', $federaciones, null, ['class' => 'form-control']) !!}
      </div>

      <div class="col-md-4 mb-3">
        {!! Form::label('federacion_id', 'País de nacimiento:') !!}
        {!! Form::select('federacion_id', $paises, null, ['class' => 'form-control']) !!}
      </div>

      <div class="col-md-4 mb-3">
        {!! Form::label('federacion_id', 'Cuidad de nacimiento:') !!}
        {!! Form::select('federacion_id', $federaciones, null, ['class' => 'form-control']) !!}
      </div>
  
    </div>


    <div class="form-row">
      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'País residencia:') !!}
        {!! Form::select('federacion_id', $paises, null, ['class' => 'form-control']) !!}
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationDefault02">Región/Estado</label>
        <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationDefaultUsername">Ciudad / Provincia (Chile)</label>
          <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
        </div>

     
      <div class="col-md-3 mb-3">
        <label for="validationDefaultUsername">Comuna (Chile)</label>
          <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
        </div>
  
    </div>


    <div class="form-row">
      
      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Dirección:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>

      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>

    </div>

    <div class="form-row">
      
      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Telefono fijo:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div>

        <div class="col-md-3 mb-3">
          {!! Form::label('federacion_id', 'Celular:') !!}
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2">+569</span>
            </div>
            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          {!! Form::label('federacion_id', 'Estatura (cm):') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
          </div>

      <div class="col-md-3 mb-3">
        {!! Form::label('federacion_id', 'Peso (kg):') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div> 
  
    </div>


    <div class="form-row">
      
        <div class="col-md-2 mb-3">
        {!! Form::label('federacion_id', 'Telefono fijo:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div>

        <div class="col-md-2 mb-3">
          {!! Form::label('federacion_id', 'Telefono fijo:') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
          </div>

        <div class="col-md-2 mb-3">
          {!! Form::label('federacion_id', 'Telefono fijo:') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div>

        <div class="col-md-2 mb-3">
          {!! Form::label('federacion_id', 'Estatura (cm):') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
          </div>

        <div class="col-md-2 mb-3">
          {!! Form::label('federacion_id', 'Estatura (cm):') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
          </div>

      <div class="col-md-2 mb-3">
        {!! Form::label('federacion_id', 'Peso (kg):') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
        </div> 
  
    </div>
    
    <div class="form-row">
      
      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Nombre completo madre:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>

      <div class="col-md-6 mb-3">
        {!! Form::label('federacion_id', 'Nombre completo padre:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
      </div>
    </div>
     
</div>


<div class="col-sm-3">

    <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
      @isset($ficha->image)
      <img class="card-img-top" src="{{asset(Storage::url($ficha->image->url))}}"" alt="Card image cap">
                @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2021/08/10/18/32/cat-6536684_1280.jpg" alt=""> 
                @endif
      
      <div class="card-body">
        <h5 class="card-title">Imagen acreditación:</h5>
        <p class="card-text">Sube una foto tipo pasaporte, de frente, con fondo blanco plano y sin accesorios.</p>
        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
      </div>
    </div>

       
        <fieldset class="scheduler-border">
          <legend class="scheduler-border">Cedula identidad</legend>
          <div class="control-group">
            <div class="form-row">
              <div class="col-md-9 mb-3">
            {!! Form::label('federacion_id', 'RUT') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
              </div>
              <div class="col-md-3 mb-3">
                  {!! Form::label('federacion_id', 'DV:') !!}
                  {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
              </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  {!! Form::label('federacion_id', 'Fecha emisión') !!}
                      {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
                    </div>

              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  {!! Form::label('federacion_id', 'Fecha de vencimiento') !!}
                      {!! Form::text('name', null, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
                    </div>

              </div>
              <div class="form-row">
                {!! Form::label('federacion_id', 'Subir cédula') !!}
              {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
              </div>
          </div>


      </fieldset>


      <fieldset class="scheduler-border">
        <legend class="scheduler-border">Pasaporte</legend>
        <div class="control-group">
          <div class="form-row">
                {!! Form::label('federacion_id', 'Número pasaporte:') !!}
                {!! Form::text('name', $ficha->pasaporte->numero, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
            </div>
            </div>

            <div class="form-row">
             
                {!! Form::label('federacion_id', 'Fecha emisión') !!}
                    {!! Form::text('name', $ficha->pasaporte->emision, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}
            

            </div>

            <div class="form-row">
              
                {!! Form::label('federacion_id', 'Fecha de expiración') !!}
                    {!! Form::text('name', $ficha->pasaporte->expiracion, ['class' => 'form-control', 'paceholder' => 'ingrese el nombre del post']) !!}

            </div>


            <div class="form-row">
        
                {!! Form::label('federacion_id', 'País de emisión') !!}
                {!! Form::select('pais_id', $paises, $ficha->pasaporte->pais_id, ['class' => 'form-control']) !!}

            </div>
            <div class="form-row">
              {!! Form::label('federacion_id', 'Subir cédula') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
       


    </fieldset>


    <fieldset class="scheduler-border">
      <legend class="scheduler-border">Curriculum deportivo</legend>
      <div class="control-group">
        <div class="form-row">
         
            {!! Form::label('federacion_id', 'Subir cédula') !!}
          {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
          </div>
      </div>


  </fieldset>
    
      </div>
  
    </div>
  

  </div>
</div>


</div>


