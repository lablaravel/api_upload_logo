<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function createCompany(CreateCompanyRequest $request){
        $validated = $request->validated();
    }
}
