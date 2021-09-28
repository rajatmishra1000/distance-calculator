<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostalCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal_codes', function (Blueprint $table) {
            $table->id();
            $table->string('circle')->nullable();
            $table->string('region')->nullable();
            $table->string('division')->nullable();
            $table->string('office')->nullable();
            $table->integer('pincode');
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->double('latitude', 8, 6);
            $table->double('longitude', 8, 6);
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
        Schema::dropIfExists('postal_codes');
    }
}
