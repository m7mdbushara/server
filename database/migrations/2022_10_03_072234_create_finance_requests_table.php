<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kid_id');
            $table->foreignId('parent_id');
            $table->enum('status', ['pending','accepted','rejected']);
            $table->double('amount');
            $table->text('description');
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
        Schema::dropIfExists('finance_requests');
    }
};
