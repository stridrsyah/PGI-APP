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
        Schema::create('handphones', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | IDENTITAS
            |--------------------------------------------------------------------------
            */

            $table->string('kode_hp')->unique();
            $table->string('imei')->unique();
            $table->string('imei2')->nullable()->unique();
            $table->string('serial_number')->nullable()->unique();

            /*
            |--------------------------------------------------------------------------
            | RELASI
            |--------------------------------------------------------------------------
            */

            $table->foreignId('merek_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | SPESIFIKASI
            |--------------------------------------------------------------------------
            */

            $table->string('model');
            $table->string('warna')->nullable();
            $table->string('ram', 20)->nullable();
            $table->string('storage', 20)->nullable();
            $table->string('chipset')->nullable();
            $table->string('kapasitas_baterai')->nullable();

            /*
            |--------------------------------------------------------------------------
            | KONDISI
            |--------------------------------------------------------------------------
            */

            $table->unsignedTinyInteger('battery_health')
                ->nullable()
                ->comment('0-100');

            $table->enum('grade', [
                'A',
                'B',
                'C'
            ]);

            $table->enum('jenis_unit', [
                'Resmi Indonesia',
                'Ex Inter'
            ]);

            $table->boolean('lcd_original')->default(true);
            $table->boolean('mesin_original')->default(true);

            /*
            |--------------------------------------------------------------------------
            | FITUR
            |--------------------------------------------------------------------------
            */

            $table->boolean('face_id')->nullable();
            $table->boolean('fingerprint')->nullable();

            /*
            |--------------------------------------------------------------------------
            | KELENGKAPAN
            |--------------------------------------------------------------------------
            */

            $table->text('kelengkapan')->nullable();

            /*
            |--------------------------------------------------------------------------
            | HARGA
            |--------------------------------------------------------------------------
            */

            $table->decimal('harga_modal', 15, 2);
            $table->decimal('harga_jual', 15, 2);

            /*
            |--------------------------------------------------------------------------
            | STATUS
            |--------------------------------------------------------------------------
            */

            $table->enum('status', [
                'Tersedia',
                'Booking',
                'Terjual',
                'Servis'
            ])->default('Tersedia');

            /*
            |--------------------------------------------------------------------------
            | CATATAN
            |--------------------------------------------------------------------------
            */

            $table->longText('catatan')->nullable();

            /*
            |--------------------------------------------------------------------------
            | AUDIT
            |--------------------------------------------------------------------------
            */

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('updated_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('deleted_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();

            /*
            |--------------------------------------------------------------------------
            | INDEX
            |--------------------------------------------------------------------------
            */

            $table->index('status');
            $table->index('grade');
            $table->index('jenis_unit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handphones');
    }
};
