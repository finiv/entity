<?php

namespace App\Action;

use App\Entity;
use App\Resource\EntityResource;

class EntityAction extends Action
{
    /**
     * Execute action.
     *
     * @return mixed
     */
    public function execute()
    {
        $entity = Entity::query()
            ->oldest('title')
            ->get();
        
        return EntityResource::collection($entity);
    }
}
