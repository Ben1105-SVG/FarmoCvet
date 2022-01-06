<?php

namespace App\Http\Controllers;

use App\Http\Resources\MedicineResource;
use App\Models\Medicine;

class MedicineController extends Controller
{
    /**
     * @var Medicine
     */
    private $model;

    /**
     * MedicineController constructor.
     * @param Medicine $model
     */
    public function __construct(Medicine $model)
    {
        $this->model = $model;
    }

    /**
     * @param $param
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByParam($param)
    {
        $medicine = $this->model->query()->where(function ($query) use ($param) {
            $query->where(function ($query) use ($param) {
                $query->where(function ($query) use ($param) {
                    $query->whereHas('plants', function ($query) use ($param) {
                        $query->where('name', 'like', '%' . $param . '%');
                    });
                }) 
                ->orWhere(function ($query) use ($param) {
                    $query->whereHas('pharmoAgents', function ($query) use ($param) {
                        $query->where('name', 'like', '%' . $param . '%');
                    });
                })
                ->orWhere(function ($query) use ($param) {
                        $query->where('name', 'like', '%' . $param . '%');
                });

            });
        })
        ->get();
        if (count($medicine)) {
            return response()->json([
                'success' => true,
                'message' => 'Medicines by search param',
                'data' => MedicineResource::collection($medicine)
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Medicines by search was not found',
            'data' => []
        ]);

    }
}
