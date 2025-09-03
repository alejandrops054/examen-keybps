<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
            'autor' => $this->whenLoaded('user', fn () => $this->user->nombre),
            'categorias' => $this->whenLoaded('categories', fn () => $this->categories->pluck('nombre')),
            'fecha_publicacion' => $this->fecha_publicacion,
        ];
    }
}
