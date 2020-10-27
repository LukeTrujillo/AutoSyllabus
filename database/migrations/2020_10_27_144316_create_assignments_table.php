<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            //Basic information
            $table->id();
            $table->string("name")
            $table->text("description")->nullable()
            $table->string("link")->nullable()

            //Course infomration
            $table->integer("course_id")

            //Assignment Due Date
            $table->timestamp("due_date")->nullable()
            $table->timestamp("available_until")->nullable()

            //Just for record keeping
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
        Schema::dropIfExists('assignments');
    }
}
