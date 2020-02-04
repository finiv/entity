<?php

namespace App\Resource;

use App\Models\Currency\Currency;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CurrencyResource
 * @package App\Http\Resources\v1\Purchase
 *
 * @mixin Currency
 */
class EntityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->getKey(),
            'title' => $this->entity
        ];
    }
}
