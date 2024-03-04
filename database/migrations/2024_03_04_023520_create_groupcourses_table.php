<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupcourses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('group_id')->unique(); 
            $table->unsignedBigInteger('course_id')->unique(); 

            $table->foreign('group_id') 
                ->references('id') 
                ->on('group') 
                ->onDelete('cascade') 
                ->unique(); 
                
            $table->foreign('course_id') 
                ->references('id') 
                ->on('course') 
                ->onDelete('cascade') 
                ->unique(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupcourses');
    }
};
