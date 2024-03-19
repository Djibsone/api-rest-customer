<?php

namespace App\Http\Filters\V1;

use App\Http\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter {

    protected $safeParams = [
        'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'customerId' => ['eq', 'gt', 'lt'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'gt', 'lt'],
        'paidDate' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'ne' => '!=',
    ];

}