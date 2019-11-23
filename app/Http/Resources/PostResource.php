<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\Eloquent\Collection;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'title'      => $this->title,
            'body'       => $this->body,
            'image_url'  => $this->image,
            'created_at' => $this->convertToHangulNotation($this->created_at),
            'updated_at' => $this->convertToHangulNotation($this->updated_at),

            'author'     => $this->author,
            'tags'       => $this->TagsToArray($this->tags),
        ];
    }

    // ------------------------------------------------------------------------

    private function TagsToArray(?Collection $tags) 
    {
        $tagsToArray = [];

        foreach ($tags as $tag) {
            $tagsToArray[] = [
                'id'   => $tag->id,
                'name' => $tag->name,
            ];
        }

        return $tagsToArray;
    }

    private function convertToHangulNotation($timestamp)
    {
        $date = Carbon::parse($timestamp)->format('Y.m.d A h:i:s');
        return preg_replace('/PM/', '오후', preg_replace('/AM/', '오전', $date));
    }
}
