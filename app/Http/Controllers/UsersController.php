<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){

        $records = User::all()->toArray();
        $pdf = Pdf::loadView('pdf', ['records' => $records]); // Pass records as an array

        return $pdf->download('Rohail.pdf');
    }

}
