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
        Schema::create('overall_impressions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_information_id');
            $table->enum('overall_impression', ['Excellent', 'Good', 'Fair', 'Poor','Very Poor']);
            $table->enum('expectation_met', ['Yes', 'No', 'Partially']);
            // Set foreign key constraint
            $table->foreign('user_information_id')->references('id')->on('user_information')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('overall_impressions');
    }
};
