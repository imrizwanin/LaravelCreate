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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->string('code', 10);
            $table->string('fullName', 100);
            $table->enum('gender', ['M','F','T']);
            $table->bigInteger('contactNo');
            $table->string('email', 100);
            $table->text('address');
            $table->string('password', 255);
            $table->date('dob');
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
        Schema::dropIfExists('students');
    }
};
