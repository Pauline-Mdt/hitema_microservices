<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @OA\Get(
     *     path="/api",
     *     tags={"Home"},
     *     summary="Home",
     *     description="Home",
     *     operationId="home",
     *     @OA\Response(
     *          response=200,
     *          description="Successful connection",
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Server error",
     *     ),
     * )
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function home() {
        return response()->json([
            'message' => 'Successful connection.'
        ]);
    }

    public function routeError() {
        return response()->json([
            'message' => 'No route matches the incoming request.'
        ], 404);
    }
}
