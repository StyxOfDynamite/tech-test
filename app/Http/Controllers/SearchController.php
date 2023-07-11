<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request): JsonResponse
    {
        $make = $request->input('make');
        $model = $request->input('model');
        $registration = $request->input('registration');

        $vehicles = Vehicle::query();
        if ($make) {
            $vehicles->where('make', 'LIKE', "%$make%");
        }
        if ($model) {
            $vehicles->where('model', 'LIKE', "%$model%");
        }
        if ($registration) {
            $vehicles->where('registration', 'LIKE', "%$registration%");
        }
        return response()->json($vehicles->get());
    }
}
