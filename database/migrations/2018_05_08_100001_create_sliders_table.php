<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: sliders
         */
        Schema::create(config('litecms.slider.slider.model.table'), function ($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('user_type', 25)->nullable();
            $table->string('name', 250)->nullable();
            $table->string('heading', 250)->nullable();
            $table->string('subheading', 250)->nullable();
            $table->string('slug', 50)->nullable();
            $table->text('images')->nullable();
            $table->enum('status', ['Show','Hide'])->nullable();
            $table->text('upload_folder')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('litecms.slider.slider.model.table'));
    }
}
