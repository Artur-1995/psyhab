<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            // Основные поля
            $table->bigIncrements('id'); // Уникальный ID
            $table->string('title')->nullable(); // Заголовок статьи
            $table->text('description')->nullable(); // Краткое описание
            $table->longText('content')->nullable(); // Основное содержание статьи
            $table->string('author')->nullable(); // Автор статьи
            $table->string('category')->nullable(); // Категория
            $table->string('subcategory')->nullable(); // Подкатегория

            // Метрики и статистика
            $table->date('publication_date')->nullable(); // Дата публикации
            $table->time('reading_time')->nullable(); // Рекомендуемое время чтения
            $table->integer('views_count')->default(0); // Просмотры
            $table->integer('likes_count')->default(0); // Лайки
            $table->integer('comments_count')->default(0); // Комментарии

            // Временные метки
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
