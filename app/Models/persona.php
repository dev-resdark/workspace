<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $antecedentePolicial
 * @property $fechaEmision
 * @property $fechaVencimiento
 * @property $nroCedula
 * @property $nroRuc
 * @property $digitoIndicador
 * @property $primerApellido
 * @property $segundoApellido
 * @property $apellidoCasada
 * @property $primerNombre
 * @property $segundoNombre
 * @property $sexo
 * @property $fechaNaciemiento
 * @property $paisNacimiento
 * @property $ciudadNacimiento
 * @property $paisResidenciaActual
 * @property $estadoCivil
 * @property $cantidadHijosEdades
 * @property $telefono
 * @property $celular
 * @property $correo
 * @property $callePrincipal
 * @property $calleTransversal
 * @property $nroCasa
 * @property $departamento
 * @property $ciudad
 * @property $barrio
 * @property $cargoUnibe
 * @property $areaDesempeño
 * @property $lugarDesempeñoAsuncionSanLorenzo
 * @property $gradoAcademico
 * @property $subirDocumentoIdentidad
 * @property $subirCv
 * @property $adjTitulosGrado
 * @property $adjTituloPostgrado
 * @property $adjOtrosCertificados
 * @property $adjRegistroProfesional
 * @property $enfermedades
 * @property $contactoEmergencia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'antecedentePolicial' => 'required',
		'fechaEmision' => 'required',
		'fechaVencimiento' => 'required',
		'nroCedula' => 'required',
		'nroRuc' => 'required',
		'digitoIndicador' => 'required',
		'primerApellido' => 'required',
		'segundoApellido' => 'required',
		'apellidoCasada' => 'required',
		'primerNombre' => 'required',
		'segundoNombre' => 'required',
		'sexo' => 'required',
		'fechaNaciemiento' => 'required',
		'paisNacimiento' => 'required',
		'ciudadNacimiento' => 'required',
		'paisResidenciaActual' => 'required',
		'estadoCivil' => 'required',
		'cantidadHijosEdades' => 'required',
		'telefono' => 'required',
		'celular' => 'required',
		'correo' => 'required',
		'callePrincipal' => 'required',
		'calleTransversal' => 'required',
		'nroCasa' => 'required',
		'departamento' => 'required',
		'ciudad' => 'required',
		'barrio' => 'required',
		'cargoUnibe' => 'required',
		'areaDesempeño' => 'required',
		'lugarDesempeñoAsuncionSanLorenzo' => 'required',
		'gradoAcademico' => 'required',
		'subirDocumentoIdentidad' => 'required',
		'subirCv' => 'required',
		'adjTitulosGrado' => 'required',
		'adjTituloPostgrado' => 'required',
		'adjOtrosCertificados' => 'required',
		'adjRegistroProfesional' => 'required',
		'enfermedades' => 'required',
		'contactoEmergencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['antecedentePolicial','fechaEmision','fechaVencimiento','nroCedula','nroRuc','digitoIndicador','primerApellido','segundoApellido','apellidoCasada','primerNombre','segundoNombre','sexo','fechaNaciemiento','paisNacimiento','ciudadNacimiento','paisResidenciaActual','estadoCivil','cantidadHijosEdades','telefono','celular','correo','callePrincipal','calleTransversal','nroCasa','departamento','ciudad','barrio','cargoUnibe','areaDesempeño','lugarDesempeñoAsuncionSanLorenzo','gradoAcademico','subirDocumentoIdentidad','subirCv','adjTitulosGrado','adjTituloPostgrado','adjOtrosCertificados','adjRegistroProfesional','enfermedades','contactoEmergencia'];



}
