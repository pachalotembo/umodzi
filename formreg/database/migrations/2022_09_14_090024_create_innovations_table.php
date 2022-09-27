<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovations', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->string('project_goals')->nullable();
            $table->string('other_services')->nullable();
            $table->string('individual_skills')->nullable();
            $table->string('raised_funding')->nullable();
            $table->string('project_registration')->nullable();
            $table->string('pending_funding')->nullable();
            $table->string('registration_type')->nullable();
            $table->string('project_type')->nullable();
            $table->string('organisation_services')->nullable();
            $table->string('development_stage')->nullable();
            $table->string('current_invest')->nullable();
            $table->string('market_type')->nullable();
            $table->string('solve_problems')->nullable();
            $table->string('competitors')->nullable();
            $table->string('usefulness')->nullable();
            $table->string('cost')->nullable();
            $table->string('technological_idea')->nullable();
            $table->string('time_to_market')->nullable();
            $table->string('accessibility')->nullable();
            $table->string('support_needed')->nullable();
            $table->string('documents')->nullable();
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
        Schema::dropIfExists('innovations');
    }
}
