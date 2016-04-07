<?php  namespace Site\Order;

use API\Exception\ValidationException;
use Validator;

class SendOrderValidator {

	/**
	 * @param SendOrderCommand $command
	 *
	 * @return mixed
	 * @throws
	 */
	public function validate($command)
	{
		$validator = Validator::make([
			'id' => $command->order_id
		], [
			'id' => 'required|integer'
		]);

		if($validator->fails())
		{
			throw new ValidationException($validator->errors());
		}
	}

}