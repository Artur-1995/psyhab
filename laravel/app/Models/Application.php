<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    /**
     * Имя таблицы в БД
     */
    protected $table = 'applications'; // По умолчанию совпадает с названием класса, но можно переопределить

    /**
     * Поля, доступные для массового присваивания
     *
     * @var array
     */
    protected $fillable = [
        'for',
        'phone',
        'email',
        'message',
    ];

    /**
     * Дополнительные даты, которые будут храниться как объекты Carbon
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Атрибуты, которые нельзя устанавливать массовым присваиванием
     *
     * @var array
     */
    protected $guarded = [];

    // Тут можно добавить дополнительные методы и связи с другими моделями, если нужны
}
