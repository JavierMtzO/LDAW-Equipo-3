<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("libro_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
            $table->foreignId("user_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
            $table->unique(["libro_id","user_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoritos');
    }
}
