<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property string|null $author
 * @property string|null $category
 * @property string|null $subcategory
 * @property string|null $publication_date
 * @property string|null $reading_time
 * @property int $views_count
 * @property int $likes_count
 * @property int $comments_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCommentsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereLikesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublicationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereReadingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSubcategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereViewsCount($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'content',
        'author',
        'category',
        'subcategory',
        'publication_date',
        'reading_time',
        'views_count',
        'likes_count',
        'comments_count'
    ];

    public function getPublicationDateAttribute($value)
    {
        $date = Carbon::parse($value);
        $months = [
            'January' => 'января',
            'February' => 'февраля',
            'March' => 'марта',
            'April' => 'апреля',
            'May' => 'мая',
            'June' => 'июня',
            'July' => 'июля',
            'August' => 'августа',
            'September' => 'сентября',
            'October' => 'октября',
            'November' => 'ноября',
            'December' => 'декабря',
        ];

        return $date->format('d') . ' ' . $months[$date->format('F')] . ' ' . $date->format('Y');
    }
}
