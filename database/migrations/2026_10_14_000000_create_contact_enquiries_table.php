<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('company', 160)->nullable();
            $table->string('email', 254);
            $table->string('phone', 40)->nullable();
            $table->text('message');
            $table->string('notification_status')->default('pending')->index();
            $table->timestamp('emailed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_enquiries');
    }
};
