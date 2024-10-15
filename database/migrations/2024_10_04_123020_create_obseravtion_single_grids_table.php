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
        Schema::create('obseravtion_single_grids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('obs_id')->nullable();
            $table->string('identifier')->nullable();
            $table->longtext('data')->nullable();
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
        Schema::dropIfExists('obseravtion_single_grids');
    }
};
