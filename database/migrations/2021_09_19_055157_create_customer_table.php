<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id'); //customer_id
            $table->string('name',60);  
            $table->string('email',60);
            $table->enum('gender',['M','F','O'])->nullable();
            $table->longText('address')->nullable();
            $table->date('dob');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->string('password');
            $table->timestamps(); //created_at , updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
