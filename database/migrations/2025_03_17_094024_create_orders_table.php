<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId("category_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum("status", ["Новый", "В работе", "Отклонен"])->default("Новый");
            $table->text("description");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
