<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('organization');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_information');
    }
};
