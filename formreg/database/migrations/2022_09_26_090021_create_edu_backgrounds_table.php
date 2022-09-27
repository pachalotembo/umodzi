<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->string('highest_qualification')->nullable();
            $table->string('institution')->nullable();
            $table->string('location')->nullable();
            $table->string('start_date')->nullable();
            $table->string('graduation_date')->nullable();
            $table->string('not_graduated')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('edu_backgrounds');
    }
}
