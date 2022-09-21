<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); //id
            $table->string( 'name', 50);
            $table->date( 'date_birth');
            $table->enum( 'gender', [ 'male', 'female']);
            $table->text( 'address');
            $table->string( 'major')->nullable();
            $table->timestamps(); // kolom created_at, update_at
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
}
