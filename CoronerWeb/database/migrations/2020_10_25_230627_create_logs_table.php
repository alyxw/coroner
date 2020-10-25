<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('log_type',32);
            $table->ipAddress('log_ip_address')->nullable();
            $table->bigInteger('log_user_id')->nullable();
            $table->bigInteger('log_device_id')->nullable();
            $table->bigInteger('log_token_id')->nullable();
            $table->text('log_other_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
