<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Educations; // importing Models


use Illuminate\Http\Request;
use Response;

class AddEducationController extends Controller
{

    function educationform($id)
    {
        $loginUserdata = User::find($id);
        return view('dashboard', compact('loginUserdata'));
    }

    function addeducation(Request $request)
    {
        $educationData = new Educations();
        $educationData->user_id = $request->user_id;
        $educationData->degree = $request->degree;
        $educationData->subject = $request->subject;
        $educationData->institute = $request->institute;
        $educationData->year = $request->year;
        $educationData->result = $request->result;
        $educationData->out_of = $request->out_of;
        $educationData->save();

        // return (json_encode(array('statusCode' => 200)));
        return redirect('dashboard');
    }

    // display education data

    function get_education_data(Request $request)
    {
        $educations = Educations::select('user_id', 'degree', 'subject', 'institute', 'year', 'result', 'out_of')->where('user_id', $request->user_id)->get();
        // return response()->json($educations);
        // return view('educationInformation', compact('educations'));'
        return response()->ajax() ?
            response()->json($educations, response()->HTTP_OK)
            : abort(404);
    }


    // return view('educationInformation', compact('education'));
    // return response()->json($educations);
    // return view('educationInformation')->with('education', json_decode($education, true));
    // return view('educationInformation', ['education_data ' =>  $education]);
    // return view('educationInformation')->with('$educations', $educations);
    // return view('dashboard')->with(compact('educations'))->render();
    // return view('dashboard', ['educations' => $educations]);


    // return DB::table('users')
    //     ->join('education', 'education.user_id', '=', 'users.id')
    //     ->select('education.*')
    //     ->get("\n");


    // function show($id)
    // {
    //     $educationId = Education::find($id);
    //     $education = Education::select(`degree`, `subject`, `institute`, `year`, `result`, `out_of`)->where('id', $educationId)->get();
    //     return response()->json($education);
    // }

    // public function getUserData($user_id)
    // {
    //     $userData = Education::find($user_id);
    //     return json_encode(array('data' => $userData));
    // }
}
