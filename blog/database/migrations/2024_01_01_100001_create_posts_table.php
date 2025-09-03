<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('slug')->unique();
            $table->text('contenido');
            $table->enum('estatus_publicacion', ['draft', 'published'])->default('draft');
            $table->timestamp('fecha_publicacion')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();

            $table->index('estatus_publicacion');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
