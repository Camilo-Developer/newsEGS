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
            $table->string('imagen')->nullable();
            $table->string('title')->nullable();
            $table->longText('pre_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('sub_imagen')->nullable();
            $table->longText('document')->nullable();
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
