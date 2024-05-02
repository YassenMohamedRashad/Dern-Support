<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer("total_cost");
            $table->text("details");
            $table->string("status");
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate("cascade")->onDelete("cascade");
            $table->foreign('service_id')->references('id')->on('services')->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
