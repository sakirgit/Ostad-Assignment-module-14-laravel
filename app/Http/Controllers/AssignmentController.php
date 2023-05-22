<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{

    /* ======= Module 14 | Assignment Question (1) ======= */
    public function submitForm(Request $request)
    {
        // Retrieve the 'name' input field value from the request
        $name = $request->input('name');
        return $name;
    }


    /* ======= Module 14 | Assignment Question (2) ======= */
    public function headerUserAgent(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }


    /* ======= Module 14 | Assignment Question (3) ======= */
    public function api_endpoint(Request $request)
    {
        // Retrieve the value of the 'page' query parameter from the request
        $page = $request->query('page', null);
    }


    /* ======= Module 14 | Assignment Question (4) ======= */
    public function json_user_data(Request $request)
    {
        $responseData = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];

        return response()->json($responseData);
    }


    /* ======= Module 14 | Assignment Question (5)   ======= */
    public function upload(Request $request)
    {
        // Check if a file was uploaded
        if ($request->hasFile('avatar')) {
            // Store the uploaded file in the 'public/uploads' directory with the original filename
            $path = $request->file('avatar')->storeAs('public/uploads', $request->file('avatar')->getClientOriginalName());
        }
    }


    /* ======= Module 14 | Assignment Question (6)   ======= */
    public function retrieveRememberToken(Request $request)
    {
        // Retrieve the value of the 'remember_token' cookie from the request
        $rememberToken = $request->cookie('remember_token', null);
    }



    /* ======= Module 14 | Assignment Question (7)   ======= */
    public function submit(Request $request)
    {
        // Retrieve the 'email' input parameter from the request
        $email = $request->input('email');

        // Process the email or perform any desired operations

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Form submitted successfully.'
        ]);
    }

}
