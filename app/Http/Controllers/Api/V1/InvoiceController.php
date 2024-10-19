<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Requests\StoreinvoiceRequest;
use App\Http\Requests\UpdateinvoiceRequest;
use App\Http\Controllers\Controller;
use App\Models\invoice;

use App\Http\Resources\V1\InvoiceResource;
use App\Http\Resources\V1\InvoiceCollection;
use App\Http\Filters\V1\invoiceFilter;


class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $filter = new invoiceFilter;
        $queryItems = $filter->transform($request);
        if(count($queryItems) == 0){
            return new InvoiceCollection(invoice::paginate());
        }else{
            $invoices = invoice::Where($queryItems)->paginate();
            return new InvoiceCollection($invoices->appends($request->query()));
        }
    }

    public function show(invoice $invoice)
    {
        return new InvoiceResource($invoice);
    }
}
