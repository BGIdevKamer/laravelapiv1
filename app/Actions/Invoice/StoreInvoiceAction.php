<?php

declare(strict_types=1);

namespace App\Actions\Invoice;
use App\Models\invoice;

class StoreInvoiceAction{
    public function handle(
        $amount,
        $billedDate,
        $paidDate,
        $status,
        $customerId,
    ): void{
        invoice::create([
        'amount'=> $amount,
        'billed_date'=>$billedDate,
        'paid_date'=>$paidDate,
        'status'=>$status,
        'customer_id'=>$customerId,
       ]);
    }
}