<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecolectaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recolecta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cultivos_id')->constrained('cultivos')->onDelete('cascade');
            $table->date('fecha_recolecta');
            $table->decimal('cantidad',10,2);
            $table->string('unidad');
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('recolecta');
    }
}