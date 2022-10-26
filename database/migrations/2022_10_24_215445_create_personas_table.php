<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('antecedentePolicial');
            $table->string('fechaEmision');
            $table->string('fechaVencimiento');
            $table->string('nroCedula');
            $table->string('nroRuc');
            $table->string('digitoIndicador');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('apellidoCasada');
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('sexo');
            $table->string('fechaNaciemiento');
            $table->string('paisNacimiento');
            $table->string('ciudadNacimiento');
            $table->string('paisResidenciaActual');
            $table->string('estadoCivil');
            $table->string('cantidadHijosEdades');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
            $table->string('callePrincipal');
            $table->string('calleTransversal');
            $table->string('nroCasa');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('barrio');
            $table->string('cargoUnibe');
            $table->string('areaDesempeño');
            $table->string('lugarDesempeñoAsuncionSanLorenzo');
            $table->string('gradoAcademico');
            $table->string('subirDocumentoIdentidad');
            $table->string('subirCv');
            $table->string('adjTitulosGrado');
            $table->string('adjTituloPostgrado');
            $table->string('adjOtrosCertificados');
            $table->string('adjRegistroProfesional');
            $table->string('enfermedades');
            $table->string('contactoEmergencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
