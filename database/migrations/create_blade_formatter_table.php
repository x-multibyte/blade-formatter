<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('blade_formatter', function (Blueprint $table) {
            $table->id();


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blade_formatter');
    }
};
