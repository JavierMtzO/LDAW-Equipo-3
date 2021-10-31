<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPrivilegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_privilegios', function (Blueprint $table) {
            $table->id();
            $table->foreignId("rol_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
            $table->foreignId("privilegio_id")
                ->nullable()
                ->constrained()
                ->onDelete("SET NULL")
                ->onUpdate("cascade");
            $table->unique(["rol_id","privilegio_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_privilegios');
    }
}
