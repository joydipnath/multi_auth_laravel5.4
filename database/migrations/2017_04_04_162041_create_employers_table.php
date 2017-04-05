<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->bigInteger('mobile');
            $table->bigInteger('landline');
            $table->string('companyname');
            $table->string('designation');
            $table->string('website');
            $table->string('workmail')->unique();
            $table->string('othermail')->unique();
            $table->string('logo');
            $table->string('business_sector');
            $table->string('password');
            $table->tinyInteger('verified')->default(0); // this column will be a TINYINT with a default value of 0 , [0 for false & 1 for true i.e. verified]
            $table->string('email_token')->nullable(); // this column will be a VARCHAR with no default value and will also BE NULLABLE

            $table->rememberToken();
            $table->timestamps();
        });
    }

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
