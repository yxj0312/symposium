<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('length');
            $table->string('type');
            $table->text('abstract');
            $table->text('organizer_notes');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('talks');
    }
};
