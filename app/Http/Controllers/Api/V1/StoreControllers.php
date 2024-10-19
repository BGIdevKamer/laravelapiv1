<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\DataTransfertObject\Invoice\InvoiceDataObject;
use App\Actions\Invoice\StoreInvoiceAction;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request):Response
    {
        $invoiceDto = new InvoiceDataObject(
            amount: $request->amount,
            billedDate: $request->billedDate,
            paidDate: $request->paidDate,
            status: $request->status,
            customerId: $request->customerId,
        );
        (new StoreInvoiceAction)
            ->handle(
                ...$invoiceDto->toArray(),
            );
    }
}
