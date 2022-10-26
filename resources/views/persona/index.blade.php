@extends('layouts.app')

@section('template_title')
    Persona
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Persona') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Antecedentepolicial</th>
										<th>Fechaemision</th>
										<th>Fechavencimiento</th>
										<th>Nrocedula</th>
										<div>
											<h1>ver más</h1>
										</div>
										<th>Nroruc</th>
										<th>Digitoindicador</th>
										<th>Primerapellido</th>
										<th>Segundoapellido</th>
										<th>Apellidocasada</th>
										<th>Primernombre</th>
										<th>Segundonombre</th>
										<th>Sexo</th>
										<th>Fechanaciemiento</th>
										<th>Paisnacimiento</th>
										<th>Ciudadnacimiento</th>
										<th>Paisresidenciaactual</th>
										<th>Estadocivil</th>
										<th>Cantidadhijosedades</th>
										<th>Telefono</th>
										<th>Celular</th>
										<th>Correo</th>
										<th>Calleprincipal</th>
										<th>Calletransversal</th>
										<th>Nrocasa</th>
										<th>Departamento</th>
										<th>Ciudad</th>
										<th>Barrio</th>
										<th>Cargounibe</th>
										<th>Areadesempeño</th>
										<th>Lugardesempeñoasuncionsanlorenzo</th>
										<th>Gradoacademico</th>
										<th>Subirdocumentoidentidad</th>
										<th>Subircv</th>
										<th>Adjtitulosgrado</th>
										<th>Adjtitulopostgrado</th>
										<th>Adjotroscertificados</th>
										<th>Adjregistroprofesional</th>
										<th>Enfermedades</th>
										<th>Contactoemergencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $persona->antecedentePolicial }}</td>
											<td>{{ $persona->fechaEmision }}</td>
											<td>{{ $persona->fechaVencimiento }}</td>
											<td>{{ $persona->nroCedula }}</td>
											<td>{{ $persona->nroRuc }}</td>
											<td>{{ $persona->digitoIndicador }}</td>
											<td>{{ $persona->primerApellido }}</td>
											<td>{{ $persona->segundoApellido }}</td>
											<td>{{ $persona->apellidoCasada }}</td>
											<td>{{ $persona->primerNombre }}</td>
											<td>{{ $persona->segundoNombre }}</td>
											<td>{{ $persona->sexo }}</td>
											<td>{{ $persona->fechaNaciemiento }}</td>
											<td>{{ $persona->paisNacimiento }}</td>
											<td>{{ $persona->ciudadNacimiento }}</td>
											<td>{{ $persona->paisResidenciaActual }}</td>
											<td>{{ $persona->estadoCivil }}</td>
											<td>{{ $persona->cantidadHijosEdades }}</td>
											<td>{{ $persona->telefono }}</td>
											<td>{{ $persona->celular }}</td>
											<td>{{ $persona->correo }}</td>
											<td>{{ $persona->callePrincipal }}</td>
											<td>{{ $persona->calleTransversal }}</td>
											<td>{{ $persona->nroCasa }}</td>
											<td>{{ $persona->departamento }}</td>
											<td>{{ $persona->ciudad }}</td>
											<td>{{ $persona->barrio }}</td>
											<td>{{ $persona->cargoUnibe }}</td>
											<td>{{ $persona->areaDesempeño }}</td>
											<td>{{ $persona->lugarDesempeñoAsuncionSanLorenzo }}</td>
											<td>{{ $persona->gradoAcademico }}</td>
											<td>{{ $persona->subirDocumentoIdentidad }}</td>
											<td>{{ $persona->subirCv }}</td>
											<td>{{ $persona->adjTitulosGrado }}</td>
											<td>{{ $persona->adjTituloPostgrado }}</td>
											<td>{{ $persona->adjOtrosCertificados }}</td>
											<td>{{ $persona->adjRegistroProfesional }}</td>
											<td>{{ $persona->enfermedades }}</td>
											<td>{{ $persona->contactoEmergencia }}</td>

                                            <td>
                                                <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personas.show',$persona->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personas.edit',$persona->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personas->links() !!}
            </div>
        </div>
    </div>
@endsection
