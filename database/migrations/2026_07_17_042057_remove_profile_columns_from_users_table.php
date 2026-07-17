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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'last_name',
                'phone',
                'birth_date',
                'address',
                'city',
                'state',
                'zip_code',
                'country',
                'travel_frequency',
                'travel_purpose',
                'preferences',
                'membership_type',
                'membership_price',
                'membership_start',
                'membership_end',
                'newsletter',
                'profile_picture'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Restore is omitted for brevity in structural teardown
        });
    }
};
