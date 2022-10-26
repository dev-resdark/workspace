@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? 'Show Persona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Antecedentepolicial:</strong>
                            {{ $persona->antecedentePolicial }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaemision:</strong>
                            {{ $persona->fechaEmision }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $persona->fechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Nrocedula:</strong>
                            {{ $persona->nroCedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nroruc:</strong>
                            {{ $persona->nroRuc }}
                        </div>
                        <div class="form-group">
                            <strong>Digitoindicador:</strong>
                            {{ $persona->digitoIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Primerapellido:</strong>
                            {{ $persona->primerApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundoapellido:</strong>
                            {{ $persona->segundoApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidocasada:</strong>
                            {{ $persona->apellidoCasada }}
                        </div>
                        <div class="form-group">
                            <strong>Primernombre:</strong>
                            {{ $persona->primerNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundonombre:</strong>
                            {{ $persona->segundoNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $persona->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanaciemiento:</strong>
                            {{ $persona->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Paisnacimiento:</strong>
                            {{ $persona->paisNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudadnacimiento:</strong>
                            {{ $persona->ciudadNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Paisresidenciaactual:</strong>
                            {{ $persona->paisResidenciaActual }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocivil:</strong>
                            {{ $persona->estadoCivil }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadhijosedades:</strong>
                            {{ $persona->cantidadHijosEdades }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $persona->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $persona->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $persona->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Calleprincipal:</strong>
                            {{ $persona->callePrincipal }}
                        </div>
                        <div class="form-group">
                            <strong>Calletransversal:</strong>
                            {{ $persona->calleTransversal }}
                        </div>
                        <div class="form-group">
                            <strong>Nrocasa:</strong>
                            {{ $persona->nroCasa }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $persona->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $persona->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Barrio:</strong>
                            {{ $persona->barrio }}
                        </div>
                        <div class="form-group">
                            <strong>Cargounibe:</strong>
                            {{ $persona->cargoUnibe }}
                        </div>
                        <div class="form-group">
                            <strong>Areadesempeño:</strong>
                            {{ $persona->areaDesempeño }}
                        </div>
                        <div class="form-group">
                            <strong>Lugardesempeñoasuncionsanlorenzo:</strong>
                            {{ $persona->lugarDesempeñoAsuncionSanLorenzo }}
                        </div>
                        <div class="form-group">
                            <strong>Gradoacademico:</strong>
                            {{ $persona->gradoAcademico }}
                        </div>
                        <div class="form-group">
                            <strong>Subirdocumentoidentidad:</strong>
                            {{ $persona->subirDocumentoIdentidad }}
                        </div>
                        <div class="form-group">
                            <strong>Subircv:</strong>
                            {{ $persona->subirCv }}
                        </div>
                        <div class="form-group">
                            <strong>Adjtitulosgrado:</strong>
                            {{ $persona->adjTitulosGrado }}
                        </div>
                        <div class="form-group">
                            <strong>Adjtitulopostgrado:</strong>
                            {{ $persona->adjTituloPostgrado }}
                        </div>
                        <div class="form-group">
                            <strong>Adjotroscertificados:</strong>
                            {{ $persona->adjOtrosCertificados }}
                        </div>
                        <div class="form-group">
                            <strong>Adjregistroprofesional:</strong>
                            {{ $persona->adjRegistroProfesional }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedades:</strong>
                            {{ $persona->enfermedades }}
                        </div>
                        <div class="form-group">
                            <strong>Contactoemergencia:</strong>
                            {{ $persona->contactoEmergencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
