<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name'); // مثلا: Exness, XM, TradingView
            $table->string('slug')->unique(); // مثلا: exness
            $table->string('logo')->nullable();
            $table->decimal('rating', 2, 1)->default(5.0); // التقييم من 5
            $table->string('highlight_text')->nullable(); // مثلا: "أقل سبريد + سحب فوري"
            $table->string('min_deposit')->nullable(); // مثلا: "$10"
            $table->string('affiliate_url'); // الرابط الخاص بك اللي كتربح منو
            $table->json('features')->nullable(); // المميزات
            $table->unsignedBigInteger('clicks_count')->default(0); // عداد النقرات
            $table->boolean('is_featured')->default(false); // واش يبان فـ Top 3؟
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('platforms');
    }
};