<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_logs', function (Blueprint $table) {
            $table->id();
            $table->string('project_title')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('url')->nullable();
            $table->string('browser')->nullable();
            $table->string('user')->default('guest');
            $table->softDeletes();
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
        Schema::dropIfExists('software_logs');
    }
}
