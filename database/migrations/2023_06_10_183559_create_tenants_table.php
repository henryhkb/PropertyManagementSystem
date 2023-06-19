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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('Fullname');
            $table->string('Nationality');
            $table->string('NationalID');
            $table->string('TenancyAgreement');
            $table->string('TenantPhonenumber');
            $table->string('TenantDOB');
            $table->string('TenantEmail');
            $table->string('TenantEntryDate');
            $table->string('TenantDepatureDate');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
