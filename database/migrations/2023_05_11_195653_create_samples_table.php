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
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('sample_code')->unique();
            $table->foreignId('sample_method_id')->nullable()->constrained('sample_methods');
            $table->string('latitude');
            $table->string('longitude');
            $table->foreignId('province_id')->nullable()->constrained('provinces');
            $table->foreignId('regency_id')->nullable()->constrained('regencies');
            $table->foreignId('district_id')->nullable()->constrained('districts');
            $table->foreignId('morphotype_id')->constrained('morphotypes');
            $table->foreignId('viruses_id')->constrained('viruses');
            $table->integer('amount');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
