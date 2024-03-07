<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('registro_atencion_sedes', function (Blueprint $table) {
            $table->date('fecha_exp');
            $table->string('tipologia', 50);
            $table->string('rama_drecho', 13);
            $table->string('tipo_atencion', 15);
            $table->string('edad', 3);
            $table->string('cui', 13);
            $table->string('apellido', 50);
            $table->string('apellido2', 50)->nullable();
            $table->string('apellido_cas', 50)->nullable();
            $table->string('nombre', 50);
            $table->string('seg_nombre', 50)->nullable();
            $table->string('ter_nombre', 50)->nullable();
            $table->string('sexo', 15);
            $table->date('fecha_nac');
            $table->string('ocupacion', 50)->nullable();
            $table->boolean('trabaja')->default(false);
            $table->string('telefono', 15)->nullable();
            $table->string('lugar_poblado', 100)->nullable();
            $table->string('direccion_res', 100)->nullable();
            $table->string('institucion', 50);
            $table->string('programa', 50);
            $table->string('beneficio', 50);
            $table->date('fecha_otor_benef');
            $table->string('valor', 50)->nullable();
            $table->string('Discapacidad', 50)->nullable();
            $table->string('Cantidad', 50)->nullable();

            $table->unsignedBigInteger('tipo_servicio_id'); // Clave foránea
            $table->unsignedBigInteger('user_creator_id'); // Clave foránea

            $table->foreign('user_creator_id')->references('id')->on('users');
            $table->foreign('tipo_servicio_id')->references('id')->on('service_types')->onDelete('cascade');

            $table->boolean('estado')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registro_atencion_sedes', function (Blueprint $table) {
            //
        });
    }
};
