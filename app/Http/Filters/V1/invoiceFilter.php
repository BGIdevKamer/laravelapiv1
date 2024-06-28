<?php

namespace App\Http\Filters\V1;
use Illuminate\Http\Request;
use App\Http\Filters\apiFilter;

class invoiceFilter extends apiFilter{

    protected $safeparams = [
        'customerId' => ['eq','gt','lt'],
        'amount' => ['eq','gt','lt','gte','lte'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq','gt','lt'],
        'paidDate' => ['eq','gt','lt'],
    ];
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lte' => '=<',
        'lt' => '<',
        'ne' => '!=',
    ];
    protected $columnMap = [
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
        'customerId' => 'customer_id',
    ];
}

