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
        Schema::create('setting_aplikasis', function (Blueprint $table) {
            $table->id();

            $table->string('nama_toko');
            $table->string('logo')->nullable();

            $table->text('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('email')->nullable();

            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('website')->nullable();

            $table->string('mata_uang')->default('IDR');
            $table->decimal('pajak', 5, 2)->default(0);

            $table->text('footer_struk')->nullable();

            $table->boolean('is_aktif')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_aplikasis');
    }
};
