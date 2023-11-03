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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable()->comment = 'Imagen principal de la noticia';
            $table->string('title')->nullable()->comment = 'Titulo de la noticia';
            $table->longText('pre_description')->nullable()->comment = 'Pre descripcion de la noticia';
            $table->longText('description')->nullable()->comment = 'Descripcion general de la noticia';
            $table->enum('type_file',[1,2,3])->nullable()->comment = 'Tipo de sub imagen, video o audio';
            $table->enum('direction_file',[1,2])->nullable()->comment = 'Direccion de la imagen o video';
            $table->string('sub_imagen')->nullable()->comment = 'Campo para la imagen video o audio';
            $table->longText('document')->nullable()->comment = 'Documento de la noticia';
            $table->bigInteger('state_id')->unsigned()->nullable()->default(1)->comment = 'Estado del usuario';
            $table->bigInteger('category_id')->unsigned()->nullable()->comment = 'Categoria';
            $table->bigInteger('user_id')->unsigned()->nullable()->comment = 'usuario';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
