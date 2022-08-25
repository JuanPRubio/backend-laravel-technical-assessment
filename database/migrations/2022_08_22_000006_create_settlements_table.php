<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedInteger('key');
            $table->string('name');
            $table->string('zone_type');
            $table->timestamps();

            //RELATIONS
            $table->string('type_id')->nullable();
            $table->foreign('type_id')->references('key')->on('settlement_types');
            $table->string('zip_code')->nullable();
            $table->foreign('zip_code')->references('zip_code')->on('zip_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
}
