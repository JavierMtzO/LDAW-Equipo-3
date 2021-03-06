<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text("comentario");
            $table->integer('calificacion');
            $table->foreignId("user_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
            $table->foreignId("libro_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
