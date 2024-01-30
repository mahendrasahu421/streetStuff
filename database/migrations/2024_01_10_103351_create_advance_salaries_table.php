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
        Schema::create('advance_salaries', function (Blueprint $table) {
            $table->bigIncrements('id'); // Corrected primary key definition
            $table->string('empId'); // Change to string if it's a base64-encoded ID
            $table->decimal('advancePayment', 10, 2); // Assuming it's a decimal value, adjust as needed
            $table->enum('status', [1, 2]);
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
        Schema::dropIfExists('advance_salaries');
    }
};
