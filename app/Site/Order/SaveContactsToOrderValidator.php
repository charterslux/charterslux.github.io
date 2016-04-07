<?php namespace Site\Order;

use API\Exception\ValidationException;
use Validator;

class SaveContactsToOrderValidator
{

    /**
     * @param SaveContactsToOrderCommand $command
     *
     * @return mixed
     * @throws
     */
    public function validate($command)
    {
        $validator = Validator::make([
            'phone_number' => $command->contactPhone,
            'first_name'   => $command->contactName,
            'email'   => $command->contactEmail,
        ],
            [
                'phone_number' => 'required',
                'first_name'   => 'required',
            ],
            [

            ],
            [
                'first_name'   => trans('forms.labels.first_name'),
                'phone_number' => trans('forms.labels.phone_number'),
                'email' => trans('forms.labels.email'),
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator->errors());
        }
    }
}