<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ticket extends JsonResource
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
            'title' => 'Titre du ticket : ' . $this->title,
            'user_id' => 'Créé par : ' . $this->user_id,
            'content' => 'Description : ' . $this->content,
            'created_at' => 'Ouvert depuis : ' . $this->created_at,
            'completed' => 'Etat : ' .$this->completed,
            'severity' => 'Urgence : ' . $this->severity,
        ];
    }
}
