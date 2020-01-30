<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',191);
            $table->integer('code');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('batch', ['Morning', 'Afternoon', 'Evening']);
            $table->integer('fee');
            $table->string('place',191);
            $table->string('city',191);
            $table->string('state',191);
            $table->integer('pincode');
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
        Schema::dropIfExists('courses');
    }
}
