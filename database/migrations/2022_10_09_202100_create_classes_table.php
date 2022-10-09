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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('club_id');
            $table->bigInteger('term_id')->nullable();
            $table->string('code');
            $table->text('description');
            $table->bigInteger('classtype_id')->nullable();
            $table->bigInteger('bookingtype_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('capacity')->nullable();
            $table->integer('status');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
