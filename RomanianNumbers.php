<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RomanianNumbersConverter extends Controller
{
    public function index ()
    {
        return view ('index.index');
    }

    public function convert (Request $request)
    {
        $userVal = $request->input('userValue');
        $romanianValue = '';

        while($userVal > 0) {
            if (($userVal / 1000) >= 1) {
                $userVal = (int)($userVal - 1000);
                $romanianValue .= 'M';
            } elseif (($userVal / 500) >= 1) {
                $userVal = (int)($userVal - 500);
                $romanianValue .= 'D';
            } elseif (($userVal / 100) >= 1) {
                $userVal = (int)($userVal - 100);
                $romanianValue .= 'C';
            } elseif (($userVal / 50) >= 1) {
                $userVal = (int)($userVal - 50);
                $romanianValue .= 'L';
            } elseif (($userVal / 10) >= 1) {
                $userVal = (int)($userVal - 10);
                $romanianValue .= 'X';
            } elseif (($userVal / 5) >= 1) {
                $userVal = (int)($userVal - 5);
                $romanianValue .= 'V';
            } elseif (($userVal / 1) >= 0) {
                $userVal = (int)($userVal - 1);
                $romanianValue .= 'I';
            } else break;
        }


        return view ('index.index', [
            'romanianValue' => $romanianValue,
        ]);
    }
    //
}
