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
            // Связи
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Внешний ключ, связанный с таблицей users
            $table->string('title'); // Заголовок статьи
            $table->text('description'); // Краткое описание
            $table->longText('content'); // Основное содержание статьи
            $table->string('category'); // Категория
            $table->enum('status', ['published', 'draft']);

            // Метрики и статистика
            $table->integer('views')->default(0);

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
