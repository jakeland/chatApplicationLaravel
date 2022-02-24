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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->integer('senderUserId'); // user sending the message
            $table->integer('recieverUserId'); // chat the message is recieving 
            $table->string('content'); // what was said
            $table->timestamps(); //
            $table->index('senderUserId');
            $table->index('recieverUserId');
            $table->index(['senderUserId', 'recieverUserId']); // for finding a specific chat faster 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
