<?php
/*
* Class for the filters we may want to appply to our API calls
*/

namespace App\Filters;

class ApiFilter
{
    // Parameters in the url which can be used, like this :'fornavn' => ['eq'],
    protected $allowedParms = [
    ];
    // Map of columns in the table
    protected $columnMap = [
    ];

    protected $operatorMap = [
    ];

    public function transform($request)
    {
        $queryItems = [];

        foreach ($this->allowedParms as $field => $operators) {
            $query = $request->query($field);

            if (!isset($query)) {
                continue;
            }
            $column = $this->columnMap[$field] ?? $field;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $queryItems[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $queryItems;
    }
}