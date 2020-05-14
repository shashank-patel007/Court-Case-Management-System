<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->foreignId('id')->constrained('advocate')->onDelete('cascade');
            $table->string('case_id');
            $table->string('case_name');
            $table->string('case_details');
            $table->string('case_type');
            $table->date('next_hearing_date')->nullable();
            $table->date('prev_hearing_date')->nullable();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cases');
    }
}
