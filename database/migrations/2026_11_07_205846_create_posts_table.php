<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platform_id')->nullable()->constrained()->onDelete('set null'); // المنصة اللي كيروج ليها المقال
            $table->string('title'); // عنوان المقال (مهم لـ Google)
            $table->string('slug')->unique();
            $table->string('excerpt')->nullable(); // ملخص قصير للـ SEO
            $table->longText('content'); // الشرح الكامل
            $table->unsignedBigInteger('views')->default(0); // عدد القراءات
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};