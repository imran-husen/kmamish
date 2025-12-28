<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


 return new class extends Migration {
    public function up(): void
    {
        Schema::create('copyright_patents', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // image path
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('copyright_patents');
    }
};
