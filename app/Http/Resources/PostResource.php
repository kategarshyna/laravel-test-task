<?php
namespace App\Http\Resources;

use App\Post;
use Illuminate\Http\Resources\Json\Resource;

/**
 * @mixin Post
 */
class PostResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'user' => $this->user,
            'comments' => $this->comments,
        ];
    }
}
