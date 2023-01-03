<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->timestamps();
            $startAt = Carbon::now()->toDateTimeString();
            $endAT = Carbon::now()->toDateTimeString();
            // $table->timestamps('startAt')->useCurrent();
            // $table->timestamp('endAt')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
