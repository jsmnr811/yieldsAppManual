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
        Schema::create('specific_section_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_information_id');
            $table->text('section_title');
            $table->text('rating');
            $table->text('difficulty');
            $table->text('data_compliance');
            $table->text('comments')->nullable();

            // Set foreign key constraint
            $table->foreign('user_information_id')->references('id')->on('user_information')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('specific_section_feedback');
    }
};
