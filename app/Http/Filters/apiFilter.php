<?php

namespace App\Http\Filters;
use Illuminate\Http\Request;

class apiFilter{

    protected $safeparams = [];
    protected $operatorMap = [];
    protected $columnMap = [];

    public function transform(Request $request){
        $finalQuery = [];
        foreach ($this->safeparams as $param => $operators) {
            $query = $request->query($param);

            if(!isset($query)){
                continue;
            }

            $column = $this->columnMap[$param] ?? $param;
            foreach ($operators as $operator) {
                if(isset($query[$operator])){
                    $finalQuery[] = [$column,$this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        
        return $finalQuery;
    }
}

