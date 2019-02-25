<?php
/**
 * Project Leo
 *
 * @author    Huibo <huibo@22.cn>
 * @copyright Copyright (c) Hangzhou 22 Network & Technology Inc.
 */

namespace App\Http\Mapper;


use App\Models\Article;

class ArticleMapper
{
    /**
     * 获取文章列表
     *
     * @return Article[]|\Illuminate\Database\Eloquent\Collection
     */
    public function articleList()
    {
        return Article::orderBy('id', 'desc')->get();
    }

    /**
     * 获取文章详情
     *
     * @param $id
     */
    public function showArticle($id)
    {
        return Article::findOrFail($id);
    }
}
