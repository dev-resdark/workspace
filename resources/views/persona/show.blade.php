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
                            <strong>Nro cedula:</strong>
                            {{ $persona->nroCedula }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $persona->primerApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $persona->primerNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Naciemiento:</strong>
                            {{ $persona->fechaNaciemiento }}
                        </div>


                        <div class="form-group">
                            <strong>Antecedente Policial:</strong>
                            {{ $persona->antecedentePolicial }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Emision:</strong>
                            {{ $persona->fechaEmision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $persona->fechaVencimiento }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Nro RUC:</strong>
                            {{ $persona->nroRuc }}
                        </div>
                        <div class="form-group">
                            <strong>Digito Indicador:</strong>
                            {{ $persona->digitoIndicador }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $persona->segundoApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Casada:</strong>
                            {{ $persona->apellidoCasada }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $persona->segundoNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $persona->sexo }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Pais Nacimiento:</strong>
                            {{ $persona->paisNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad Nacimiento:</strong>
                            {{ $persona->ciudadNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Pais Residencia Actual:</strong>
                            {{ $persona->paisResidenciaActual }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civil:</strong>
                            {{ $persona->estadoCivil }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Hijos Edades:</strong>
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
                            <strong>Calle Principal:</strong>
                            {{ $persona->callePrincipal }}
                        </div>
                        <div class="form-group">
                            <strong>Calle Transversal:</strong>
                            {{ $persona->calleTransversal }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Casa:</strong>
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
                            <strong>Cargo Unibe:</strong>
                            {{ $persona->cargoUnibe }}
                        </div>
                        <div class="form-group">
                            <strong>Area Desempeño:</strong>
                            {{ $persona->areaDesempeño }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar desempeño (asuncion / sanlorenzo):</strong>
                            {{ $persona->lugarDesempeñoAsuncionSanLorenzo }}
                        </div>
                        <div class="form-group">
                            <strong>Gradoacademico:</strong>
                            {{ $persona->gradoAcademico }}
                        </div>
                        <div class="form-group">
                            <strong>Subir Documento Identidad:</strong>
                            {{ $persona->subirDocumentoIdentidad }}
                        </div>
                        <div class="form-group">
                            <strong>Subir Cv:</strong>
                            {{ $persona->subirCv }}
                        </div>
                        <div class="form-group">
                            <strong>Adj Titulos Grado:</strong>
                            {{ $persona->adjTitulosGrado }}
                        </div>
                        <div class="form-group">
                            <strong>Adj Titulo Postgrado:</strong>
                            {{ $persona->adjTituloPostgrado }}
                        </div>
                        <div class="form-group">
                            <strong>Adj otros Certificados:</strong>
                            {{ $persona->adjOtrosCertificados }}
                        </div>
                        <div class="form-group">
                            <strong>Adj Registro Profesional:</strong>
                            {{ $persona->adjRegistroProfesional }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedades:</strong>
                            {{ $persona->enfermedades }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto Emergencia:</strong>
                            {{ $persona->contactoEmergencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
