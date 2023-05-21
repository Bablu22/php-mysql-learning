<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    public function welcome(): JsonResponse
    {
        return response()->json("Hi there welcome");
    }

    public function StoreUser(Request $request): JsonResponse
    {
        $name = $request->input('name');
        $userAgent = $request->header('User-Agent');
        return response()->json(array('name' => $name, 'header' => $userAgent));
    }

    public function getPage(Request $request): JsonResponse
    {
        $page = $request->query('page', null);
        return response()->json($page);
    }

    public function getData(Request $request): JsonResponse
    {
        $data = [
            "message" => "Success",
            "data" => [
                "name" => "John Doe",
                "age" => 25
            ]
        ];
        return response()->json($data);
    }

    public function fileUpload(Request $request): JsonResponse
    {
        $request->file('avatar')->storeAs('public/uploads', $request->file('avatar')->getClientOriginalName());

        $data = [
            "message" => "Success",
        ];
        return response()->json($data);
    }

    public function remember_token(Request $request): JsonResponse
    {
        $rememberToken = $request->cookie('remember_token', null);
        return response()->json($rememberToken);
    }

    public function submitData(Request $request): JsonResponse
    {
        $email = $request->input('email');
        $response = [
            "success" => true,
            "message" => "Form submitted successfully."
        ];
        return response()->json($response);
    }
}
