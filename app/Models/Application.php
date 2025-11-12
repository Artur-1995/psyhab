<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application
 *
 * @property int $id
 * @property string|null $for
 * @property string $phone
 * @property string|null $email
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
