<?php

namespace App\Http\Filters\V1;
use Illuminate\Http\Request;
use App\Http\Filters\apiFilter;

class customerFilter extends apiFilter{

    protected $safeparams = [
        'name' => ['eq'],
        'type' => ['eq'],
    ];
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
    ];
    protected $columnMap = [
        'code_postal' => 'code_postal',
    ];

}

