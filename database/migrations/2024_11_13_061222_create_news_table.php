<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * menjalankan migrasi untuk membuat tabel 'news'.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // kolom primary key auto-increment
            $table->string('title'); // judul berita
            $table->string('author'); // penulis berita
            $table->string('description'); // deskripsi singkat berita
            $table->text('content'); // isi lengkap berita
            $table->string('url'); // URL berita
            $table->string('url_image'); // URL gambar berita
            $table->datetime('published_at'); // tanggal dan waktu publikasi berita (tipe data datetime)
            $table->string('category'); // mategori berita
            $table->timestamps(); // menyimpan kolom created_at dan updated_at
        });
    }

    /**
     * Membatalkan migrasi dengan menghapus tabel 'news'.
     */
    public function down(): void
    {
        Schema::dropIfExists('news'); // Menghapus tabel 'news' jika ada
    }
};
