<?php

namespace App\Action;



abstract class Action
{
    /**
     * @var DataProvider|null
     */
    protected $data;

    /**
     * Action constructor.
     *
     * @param DataProvider|null $data
     */
    public function __construct(DataProvider $data = null)
    {
        $this->data = $data;
    }

    abstract public function execute();
}