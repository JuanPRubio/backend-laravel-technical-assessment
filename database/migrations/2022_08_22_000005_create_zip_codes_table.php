<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->string('zip_code')->primary();
            $table->string('locality');
            $table->timestamps();

            //RELATIONS
            $table->bigInteger('federal_entity_id')->nullable();
            $table->foreign('federal_entity_id')->references('key')->on('federal_entities');
            $table->bigInteger('municipality_id')->nullable();
            $table->foreign('municipality_id')->references('key')->on('municipalities');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_codes');
    }
}
