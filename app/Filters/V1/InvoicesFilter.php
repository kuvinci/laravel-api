<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\APIFilter;

class InvoicesFilter extends APIFilter {

    protected array $allowedParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'status' => ['eq', 'ne'],
        'billed_date' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'paid_date' => ['eq', 'lt', 'lte', 'gt', 'gte'],
    ];

    protected array $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected array $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];

}
