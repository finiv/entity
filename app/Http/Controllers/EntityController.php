<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action\EntityAction;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function index(EntityAction $action)
    {
        return response()->json($action->execute());
    }
}
