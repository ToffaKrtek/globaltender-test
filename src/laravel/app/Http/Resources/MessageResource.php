<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Message;

/*
* @var Message $resource
*/
class MessageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'body' => $this->resource->body,
            'question_id' => $this->resource->question_id,
            'user_name' => $this->resource->userName,
            'files' => $this->resource->files
        ];
    }
}