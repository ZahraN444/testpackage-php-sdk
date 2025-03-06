<?php

declare(strict_types=1);

/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIMATICCalculatorLib\Controllers;

use APIMATICCalculatorLib\Exceptions\ApiException;
use APIMATICCalculatorLib\Models\OperationTypeEnum;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class SimpleCalculatorController extends BaseController
{
    /**
     * Calculates the expression using the specified operation.
     *
     * @param array $options Array with all options for search
     *
     * @return float Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getCalculate(array $options): float
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{operation}')
            ->parameters(
                TemplateParam::init('operation', $options)
                    ->extract('operation')
                    ->serializeBy([OperationTypeEnum::class, 'checkValue']),
                QueryParam::init('x', $options)->extract('x'),
                QueryParam::init('y', $options)->extract('y')
            );

        return $this->execute($_reqBuilder);
    }
}
