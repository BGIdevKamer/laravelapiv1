<?php

declare(strict_types=1);

namespace App\DataTransfertObject\Invoice;

class InvoiceDataObject{
    public function  __construct(
        private readonly string $amount,
        private readonly string $billedDate,
        private readonly string $paidDate,
        private readonly string $status,
        private readonly string $customerId,
    ){}

    public function toArray(): array{
        return[
            'amount'=>$this->amount,
            'billedDate'=>$this->billedDate,
            'paidDate'=>$this->paidDate,
            'status'=>$this->status,
            'customerID'=>$this->customerId,
        ];
    }
}