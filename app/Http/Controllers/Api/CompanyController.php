<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCompanyRequest;
use App\Models\Company;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    public function createCompany(CreateCompanyRequest $request): jsonResponse {
        
        /**
         * Não preciso usar validated->fails(), pois não aceita nesses formato, a própria class createCompanyRequest
         * Vai se responsabilizar para verificar os erros e retornar um resultado de sucesso ou false.
         */

        $validated = $request->validated();        

        $validated['url_logo'] = $request->file('url_logo')->store('images/logo');
        $data = Company::create($validated);
        return response()->json(array($data, Response::HTTP_CREATED));
    }
}
