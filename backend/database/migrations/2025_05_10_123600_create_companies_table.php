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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
             $table->foreignId('employer_id')->constrained()->onDelete('cascade');
        $table->string('company_name');
        $table->string('gst_number')->nullable();
        $table->string('company_location');
        $table->string('contact_person');
        $table->string('contact_email');
        $table->string('contact_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
