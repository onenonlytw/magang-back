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
        Schema::create('letterins', function (Blueprint $table) {
            $table->id();
            $table->string('noterima');
            $table->date('tglditerima');
            $table->string('dari');
            $table->string('nosurat');
            $table->date('tglsurat');
            $table->string('nd');
            $table->string('perihal');
            $table->string('pberwenang');
            $table->string('jenisurat');
            $table->string('kepada');
            $table->string('notatindakan');
            $table->date('tgldisposisi');
            $table->text('catatanevp')->nullable();
            $table->text('catatandevp')->nullable();
            $table->text('catatanosm')->nullable();
            // $table->string('upimage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letterins');
    }
};
