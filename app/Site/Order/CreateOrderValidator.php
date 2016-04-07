<?php namespace Site\Order;

use API\Exception\ValidationException;
use Validator;

class CreateOrderValidator
{

    /**
     * @param CreateOrderCommand $command
     *
     * @throws ValidationException
     */
    public function validate($command)
    {
        $validator = Validator::make([
            'airport_from'   => $command->airport_from,
            'airport_to'     => $command->airport_to,
            'departure_date' => $command->departure_date,
            'departure_time' => $command->departure_time,
            'passengers'     => $command->passengers,
        ],
            [
                'airport_from'   => 'required|numeric',
                'airport_to'     => 'required|numeric',
                'departure_date' => 'required',
                'departure_time' => 'required',
                'passengers'     => 'required|numeric',
            ],
            [],
            [
                'airport_from' => trans('forms.labels.airport_from'),
                'airport_to' => trans('forms.labels.airport_to'),
                'departure_date' => trans('forms.labels.departure_date'),
                'departure_time' => trans('forms.labels.departure_time'),
                'passengers' => trans('forms.labels.passengers'),
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator->errors());
        }
    }
}