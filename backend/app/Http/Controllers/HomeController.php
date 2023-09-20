<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        //challenge 2
        $num = [2,3,1,2,3];
        $output = [];
        $arrCount = array_count_values($num);
        foreach ($arrCount as $key => $val) {
            if ($val > 1) {
                array_push($output, $key);
            }
        }

        //challenge 4
        $arr = ["insurance.txt" => "Company A", "letter.docx" => "Company A", "Contract.docx" => "Company B"];
        $result = [];

        foreach ($arr as $key => $val) {
            $result[$val][] = $key;
        }

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => [
                'challenge_2' => $output,
                'challenge_4' => $result
            ]
        ]);
    }

    public function uploadExcelFile(Request $request)
    {
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx,csv'
        ]);
        return $this->customerRequestService->importCRM($request);
    }
}
