<?php  namespace Site\Order;

use API\Exception\ValidationException;
use Carbon\Carbon;
use Validator;

/**
 * Class SetOrderValidator
 * @package Site\Order
 */
class SetOrderValidator {

	/**
	 * @param SetOrderCommand $command
	 *
	 * @throws ValidationException
	 */
	public function validate($command)
	{
		$_legs = $command->legs;
		foreach($_legs as $leg)
		{
			$timestamp = array_get($leg, 'departure_time', NULL)/1000;

			$departure_time = NULL;

			if($timestamp)
				$departure_time = Carbon::createFromTimestamp($timestamp);

			$time_interval =  array_get($leg, 'time_interval', NULL);

			$validator = Validator::make([
					'airport_from_id' => intval(array_get($leg, 'airport_from_id'), NULL),
					'airport_to_id'   => intval(array_get($leg, 'airport_to_id'), NULL),
					'departure_time'  => $departure_time,
					'time_interval'   => $time_interval,
					'passengers'      => array_get($leg, 'passengers', NULL),
				], [
					'airport_from_id' => 'required|integer',
					'airport_to_id'   => 'required|integer',
					'departure_time'  => 'required',
					'time_interval'   => 'required',
					'passengers'      => 'required|integer',
				]
			);

			if($validator->fails())
			{
				throw new ValidationException($validator->errors());
			}
		}
	}
}