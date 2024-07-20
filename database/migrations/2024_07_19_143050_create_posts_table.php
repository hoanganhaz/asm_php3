<?php

use App\Models\Category;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->index()->constrained();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sub_title')->nullable()->comment('tiêu đề phụ');
            $table->string('imgage')->nullable();
            $table->longText('content')->nullable();

            $table->boolean('is_active')->default(true);
            $table->boolean('is_hot_post')->default(false);
            $table->boolean('is_news')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
