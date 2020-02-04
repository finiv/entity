<?php

namespace App\Action;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

abstract class DataProvider
{
    /**
     * @var array
     */
    protected $requestData;

    /**
     * DataProvider constructor.
     *
     * @param array $input
     */
    public function __construct(array $input = null)
    {
        $this->requestData = $input;
    }

    /**
     * Make instance from request.
     *
     * @param FormRequest|Request $request
     * @return DataProvider
     */
    public static function fromRequest($request): DataProvider
    {
        $data = $request instanceof FormRequest ?
            $request->validated() :
            $request->all();

        return new static($data);
    }

    /**
     * Make empty instance.
     *
     * @return DataProvider
     */
    public static function instance()
    {
        return new static();
    }

    /**
     * Public properties to array.
     *
     * @return array
     */
    public function toArray(): array
    {
        try{
            $reflection = new \ReflectionClass(static::class);
            $props = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);

            $array = [];
            foreach ($props as $prop) {
                $propName = $prop->getName();
                $array[$propName] = $this->{$propName};
            }
        }catch(\ReflectionException $exception){
            $array = [];
        }

        return $array;
    }
}