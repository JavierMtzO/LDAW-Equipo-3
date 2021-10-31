<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_categorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId("libro_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
            $table->foreignId("categoria_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
            $table->unique(["libro_id","categoria_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro_categorias');
    }
}
