<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('antecedentePolicial') }}
            {{ Form::text('antecedentePolicial', $persona->antecedentePolicial, ['class' => 'form-control' . ($errors->has('antecedentePolicial') ? ' is-invalid' : ''), 'placeholder' => 'Antecedentepolicial']) }}
            {!! $errors->first('antecedentePolicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaEmision') }}
            {{ Form::text('fechaEmision', $persona->fechaEmision, ['class' => 'form-control' . ($errors->has('fechaEmision') ? ' is-invalid' : ''), 'placeholder' => 'Fechaemision']) }}
            {!! $errors->first('fechaEmision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaVencimiento') }}
            {{ Form::text('fechaVencimiento', $persona->fechaVencimiento, ['class' => 'form-control' . ($errors->has('fechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
            {!! $errors->first('fechaVencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nroCedula') }}
            {{ Form::text('nroCedula', $persona->nroCedula, ['class' => 'form-control' . ($errors->has('nroCedula') ? ' is-invalid' : ''), 'placeholder' => 'Nrocedula']) }}
            {!! $errors->first('nroCedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nroRuc') }}
            {{ Form::text('nroRuc', $persona->nroRuc, ['class' => 'form-control' . ($errors->has('nroRuc') ? ' is-invalid' : ''), 'placeholder' => 'Nroruc']) }}
            {!! $errors->first('nroRuc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('digitoIndicador') }}
            {{ Form::text('digitoIndicador', $persona->digitoIndicador, ['class' => 'form-control' . ($errors->has('digitoIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Digitoindicador']) }}
            {!! $errors->first('digitoIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primerApellido') }}
            {{ Form::text('primerApellido', $persona->primerApellido, ['class' => 'form-control' . ($errors->has('primerApellido') ? ' is-invalid' : ''), 'placeholder' => 'Primerapellido']) }}
            {!! $errors->first('primerApellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundoApellido') }}
            {{ Form::text('segundoApellido', $persona->segundoApellido, ['class' => 'form-control' . ($errors->has('segundoApellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundoapellido']) }}
            {!! $errors->first('segundoApellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoCasada') }}
            {{ Form::text('apellidoCasada', $persona->apellidoCasada, ['class' => 'form-control' . ($errors->has('apellidoCasada') ? ' is-invalid' : ''), 'placeholder' => 'Apellidocasada']) }}
            {!! $errors->first('apellidoCasada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primerNombre') }}
            {{ Form::text('primerNombre', $persona->primerNombre, ['class' => 'form-control' . ($errors->has('primerNombre') ? ' is-invalid' : ''), 'placeholder' => 'Primernombre']) }}
            {!! $errors->first('primerNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundoNombre') }}
            {{ Form::text('segundoNombre', $persona->segundoNombre, ['class' => 'form-control' . ($errors->has('segundoNombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundonombre']) }}
            {!! $errors->first('segundoNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $persona->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaNaciemiento') }}
            {{ Form::text('fechaNaciemiento', $persona->fechaNaciemiento, ['class' => 'form-control' . ($errors->has('fechaNaciemiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanaciemiento']) }}
            {!! $errors->first('fechaNaciemiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paisNacimiento') }}
            {{ Form::text('paisNacimiento', $persona->paisNacimiento, ['class' => 'form-control' . ($errors->has('paisNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Paisnacimiento']) }}
            {!! $errors->first('paisNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudadNacimiento') }}
            {{ Form::text('ciudadNacimiento', $persona->ciudadNacimiento, ['class' => 'form-control' . ($errors->has('ciudadNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Ciudadnacimiento']) }}
            {!! $errors->first('ciudadNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paisResidenciaActual') }}
            {{ Form::text('paisResidenciaActual', $persona->paisResidenciaActual, ['class' => 'form-control' . ($errors->has('paisResidenciaActual') ? ' is-invalid' : ''), 'placeholder' => 'Paisresidenciaactual']) }}
            {!! $errors->first('paisResidenciaActual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoCivil') }}
            {{ Form::text('estadoCivil', $persona->estadoCivil, ['class' => 'form-control' . ($errors->has('estadoCivil') ? ' is-invalid' : ''), 'placeholder' => 'Estadocivil']) }}
            {!! $errors->first('estadoCivil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadHijosEdades') }}
            {{ Form::text('cantidadHijosEdades', $persona->cantidadHijosEdades, ['class' => 'form-control' . ($errors->has('cantidadHijosEdades') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadhijosedades']) }}
            {!! $errors->first('cantidadHijosEdades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $persona->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $persona->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $persona->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('callePrincipal') }}
            {{ Form::text('callePrincipal', $persona->callePrincipal, ['class' => 'form-control' . ($errors->has('callePrincipal') ? ' is-invalid' : ''), 'placeholder' => 'Calleprincipal']) }}
            {!! $errors->first('callePrincipal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calleTransversal') }}
            {{ Form::text('calleTransversal', $persona->calleTransversal, ['class' => 'form-control' . ($errors->has('calleTransversal') ? ' is-invalid' : ''), 'placeholder' => 'Calletransversal']) }}
            {!! $errors->first('calleTransversal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nroCasa') }}
            {{ Form::text('nroCasa', $persona->nroCasa, ['class' => 'form-control' . ($errors->has('nroCasa') ? ' is-invalid' : ''), 'placeholder' => 'Nrocasa']) }}
            {!! $errors->first('nroCasa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamento') }}
            {{ Form::text('departamento', $persona->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::text('ciudad', $persona->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('barrio') }}
            {{ Form::text('barrio', $persona->barrio, ['class' => 'form-control' . ($errors->has('barrio') ? ' is-invalid' : ''), 'placeholder' => 'Barrio']) }}
            {!! $errors->first('barrio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargoUnibe') }}
            {{ Form::text('cargoUnibe', $persona->cargoUnibe, ['class' => 'form-control' . ($errors->has('cargoUnibe') ? ' is-invalid' : ''), 'placeholder' => 'Cargounibe']) }}
            {!! $errors->first('cargoUnibe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('areaDesempeño') }}
            {{ Form::text('areaDesempeño', $persona->areaDesempeño, ['class' => 'form-control' . ($errors->has('areaDesempeño') ? ' is-invalid' : ''), 'placeholder' => 'Areadesempeño']) }}
            {!! $errors->first('areaDesempeño', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugarDesempeñoAsuncionSanLorenzo') }}
            {{ Form::text('lugarDesempeñoAsuncionSanLorenzo', $persona->lugarDesempeñoAsuncionSanLorenzo, ['class' => 'form-control' . ($errors->has('lugarDesempeñoAsuncionSanLorenzo') ? ' is-invalid' : ''), 'placeholder' => 'Lugardesempeñoasuncionsanlorenzo']) }}
            {!! $errors->first('lugarDesempeñoAsuncionSanLorenzo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gradoAcademico') }}
            {{ Form::text('gradoAcademico', $persona->gradoAcademico, ['class' => 'form-control' . ($errors->has('gradoAcademico') ? ' is-invalid' : ''), 'placeholder' => 'Gradoacademico']) }}
            {!! $errors->first('gradoAcademico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subirDocumentoIdentidad') }}
            {{ Form::text('subirDocumentoIdentidad', $persona->subirDocumentoIdentidad, ['class' => 'form-control' . ($errors->has('subirDocumentoIdentidad') ? ' is-invalid' : ''), 'placeholder' => 'Subirdocumentoidentidad']) }}
            {!! $errors->first('subirDocumentoIdentidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subirCv') }}
            {{ Form::text('subirCv', $persona->subirCv, ['class' => 'form-control' . ($errors->has('subirCv') ? ' is-invalid' : ''), 'placeholder' => 'Subircv']) }}
            {!! $errors->first('subirCv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adjTitulosGrado') }}
            {{ Form::text('adjTitulosGrado', $persona->adjTitulosGrado, ['class' => 'form-control' . ($errors->has('adjTitulosGrado') ? ' is-invalid' : ''), 'placeholder' => 'Adjtitulosgrado']) }}
            {!! $errors->first('adjTitulosGrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adjTituloPostgrado') }}
            {{ Form::text('adjTituloPostgrado', $persona->adjTituloPostgrado, ['class' => 'form-control' . ($errors->has('adjTituloPostgrado') ? ' is-invalid' : ''), 'placeholder' => 'Adjtitulopostgrado']) }}
            {!! $errors->first('adjTituloPostgrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adjOtrosCertificados') }}
            {{ Form::text('adjOtrosCertificados', $persona->adjOtrosCertificados, ['class' => 'form-control' . ($errors->has('adjOtrosCertificados') ? ' is-invalid' : ''), 'placeholder' => 'Adjotroscertificados']) }}
            {!! $errors->first('adjOtrosCertificados', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adjRegistroProfesional') }}
            {{ Form::text('adjRegistroProfesional', $persona->adjRegistroProfesional, ['class' => 'form-control' . ($errors->has('adjRegistroProfesional') ? ' is-invalid' : ''), 'placeholder' => 'Adjregistroprofesional']) }}
            {!! $errors->first('adjRegistroProfesional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enfermedades') }}
            {{ Form::text('enfermedades', $persona->enfermedades, ['class' => 'form-control' . ($errors->has('enfermedades') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedades']) }}
            {!! $errors->first('enfermedades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contactoEmergencia') }}
            {{ Form::text('contactoEmergencia', $persona->contactoEmergencia, ['class' => 'form-control' . ($errors->has('contactoEmergencia') ? ' is-invalid' : ''), 'placeholder' => 'Contactoemergencia']) }}
            {!! $errors->first('contactoEmergencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>