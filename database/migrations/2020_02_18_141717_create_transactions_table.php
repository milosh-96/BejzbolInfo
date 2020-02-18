<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('trans_date_cd')->nullable();
            $table->integer('from_team_id')->nullable();
            $table->string('orig_asset')->nullable();
            $table->string('final_asset_type')->nullable();
            $table->string('player')->nullable();
            $table->string('resolution_cd')->nullable();
            $table->string('final_asset')->nullable();
            $table->string('name_display_first_last')->nullable();
            $table->string('type_cd')->nullable();
            $table->string('name_sort')->nullable();
            $table->string('resolution_date')->nullable();
            $table->string('conditional_sw')->nullable();
            $table->string('team')->nullable();
            $table->string('type')->nullable();
            $table->string('name_display_last_first')->nullable();
            $table->string('trans_date')->nullable();
            $table->string('effective_date')->nullable();
            $table->integer('player_id')->nullable();
            $table->string('orig_asset_type')->nullable();
            $table->string('from_team')->nullable();
            $table->integer('team_id')->nullable();
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

