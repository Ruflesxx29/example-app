<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancion', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 80)->unique();
            $table->string('interprete', 100);
            $table->string('autor', 80)->nullable();
            $table->time('duracion')->nullable();
            $table->string('genero', 20);
            $table->string('album', 70)->nullable();
            $table->smallInteger('orden')->nullable();
            $table->date('fechapublicacion');
            $table->timestamps(); 
            $table->unique(['album','orden']);
            //foreing keys
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancion');
    }
};
