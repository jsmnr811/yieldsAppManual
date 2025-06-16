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
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_information_id'); 
            $table->text('improvements')->nullable();
            $table->text('topics_to_expand')->nullable();
            $table->text('additional_comments')->nullable();

            // Set foreign key constraint
            $table->foreign('user_information_id')->references('id')->on('user_information')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recommendations');
    }
};
