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
        Schema::table('ootcs', function (Blueprint $table) {
            $table->text('correction_r_completed_by')->nullable();
            $table->text('correction_r_completed_on')->nullable();
            $table->text('correction_r_ncompleted_comment')->nullable();
            $table->text('cause_i_completed_by')->nullable();
            $table->text('cause_i_completed_on')->nullable();
            $table->text('correction_ooc_comment')->nullable();
            $table->text('correction_ooT_completed_by')->nullable();
            $table->text('correction_ooT_completed_on')->nullable();
            $table->text('correction_ooT_comment')->nullable();
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ootcs', function (Blueprint $table) {
            //
        });
    }
};
