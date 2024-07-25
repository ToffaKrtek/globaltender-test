<?php
namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageController extends Controller {
    public function getMessages(Request $request): JsonResource {
        $messages = Message::query()
        ->when($request->search, function($query) use ($request){
            $query->where('body', $request->search);
        })
        ->when($request->questionId, function($query) use ($request){
            $query->where('question_id', $request->questionId);
        })
        ->paginate();
        return MessageResource::collection($messages);
    }
}