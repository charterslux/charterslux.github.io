<?php
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Laracasts\Commander\Events\EventGenerator;
use Site\Client\Events\ClientUpdated;

class Client extends Eloquent {

	protected $fillable   = [
		'suffix_id',
		'user_id',
		'first_name',
		'last_name',
		'patronymic',
		'borned_at',
		'sex',
		'citizenship_id',
		'passport',
		'phone_number',
		'preferred_language'
	];
	protected $guarded    = ['id', 'card_id'];
	use SoftDeletingTrait;
	use EventGenerator;
	public $timestamps = true;
	protected $dates = ['deleted_at', 'borned_at', 'created_at', 'updated_at'];

	public static $rules = array(
		'borned_at' => 'date|date_format:d.m.Y',
		'sex' => 'integer|in:1,2',
		'phone_number' => 'sometimes|required',
		'last_name' => 'sometimes|required',
		'first_name' => 'sometimes|required',
	);

	public function fio($short = FALSE)
	{
		$fio     = NULL;
		$fio_arr = array();
		if ( $this->exists)
		{
			$last_name = $this->last_name;

			if($last_name)
				$fio_arr[] = $last_name;

			$first_name = NULL;
			if ($this->first_name)
			{
				$first_name = ($short AND $last_name)
					? mb_strtoupper(mb_substr($this->first_name, 0, 1)) . '.'
					: $this->first_name;
			}

			if($first_name)
				$fio_arr[] = $first_name;

			$patronymic = NULL;
			if($this->patronymic)
			{
				$patronymic = ($short AND $last_name)
					? mb_strtoupper(mb_substr($this->patronymic, 0, 1)) . '.'
					: $this->patronymic;
			}
			if($patronymic)
				$fio_arr[] = $patronymic;

			$fio = implode(' ', $fio_arr);

			if( ! $fio)
				$fio = NULL;
		}

		return $fio;
	}

	public function suffix()
	{
		return $this->belongsTo('Suffix');
	}
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function citizenship()
	{
		return $this->belongsTo('Country', 'citizenship_id');
	}

	public function setPhoneNumberAttribute($number)
	{
		$this->attributes['phone_number'] = ($number) ? $this->clear_number($number) : NULL;
	}

	public function getPhoneNumberAttribute($number)
	{
		return $this->phone_format($number);
	}

	public function setBornedAtAttribute($value)
	{
		$this->attributes['borned_at'] = ($value) ? Carbon::createFromFormat(i18n_date_format(), $value) : NULL;
	}

	public function borned_at()
	{
		return ( ! $this->borned_at) ? NULL : $this->borned_at->format(i18n_date_format());
	}

	protected function phone_format($phone, $with_spaces = TRUE, $with_plus = TRUE)
	{
		$phone = $this->clear_number($phone);

		$plus = ($with_plus) ? '+' : NULL;
		if(strlen($phone) == 11)
		{
			$phone = ($with_spaces)
				? preg_replace('/(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/', $plus.'\1 \2 \3-\4-\5', $phone)
				: preg_replace('/(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/', $plus.'\1\2\3\4\5',     $phone)
			;
		}

		return $phone;
	}

	protected function clear_number($phone_number)
	{
		$phone_number = $this->rus_phone_code_check($phone_number);

		$formatted_phone_number = $this->numberize($phone_number);

		$phone = NULL;
		if(strlen($formatted_phone_number) > 9)
		{
			$phone = $formatted_phone_number;
		}
		else
		{
			$phone = $phone_number;
		}

		return $phone;
	}

	public function rus_phone_code_check($phone_number)
	{
		if(strlen($phone_number) == 11 AND $phone_number[0] == '8')
			$phone_number[0] = '7';

		if(strlen($this->numberize($phone_number)) == 10)
			$phone_number = '7'.$phone_number;

		return $phone_number;
	}

	public function numberize($number)
	{
		return trim(preg_replace('[\D]', '', $number));
	}

	public function io()
	{
		$io     = NULL;
		$io_arr = array();
		if ( $this->exists)
		{
			$first_name = ($this->first_name) ?: NULL;

			if($first_name)
				$io_arr[] = $first_name;

			$patronymic = ($this->patronymic) ?: NULL;

			if($patronymic)
				$fio_arr[] = $patronymic;

			$io = implode(' ', $io_arr);

			if( ! $io)
				$io = NULL;
		}

		return $io;
	}

	/**
	 * @param $data_object
	 *
	 * @return Client $this
	 */public function edit($data_object)
	{
		foreach($data_object as $name => $value)
		{
			if($name == 'suffix')
				$name .= '_id';

			if($value)
				$this->$name = $value;
		}

		$this->save();

		$this->raise(new ClientUpdated($this));

		return $this;
	}

	/**
	 * Вывод имени клиента по формату:
	 *  s - Титул
	 *  f - Фамилия
	 *  i - Имя
	 *  o - Отчество
	 * @param string $format
	 * @param bool   $short
	 *
	 * @return null|string
	 */public function name($format = 'fio', $short = FALSE)
	{
		$name_arr = [];
		foreach(str_split($format) as $param)
		{
			switch($param)
			{
				case 's':
					if($this->suffix_id)
						$name_arr[] = trans('suffixes.'.$this->suffix->alias);
					break;
				case 'f':
					if($this->last_name)
						$name_arr[] = $this->last_name;
					break;
				case 'i':
					if($this->first_name)
						$name_arr[] = $this->first_name;
					break;
				case 'o':
					if($this->patronymic)
						$name_arr[] = $this->patronymic;
					break;
				default:
					$name_arr[] = $param;
					break;
			}
		}

		if($short)
		{
			for($i = 1; $i < count($name_arr); $i++)
			{
				$name_arr[$i] = mb_strtoupper(mb_substr($name_arr[$i], 0, 1)) . '.';
			}
		}

		$name = implode(' ', $name_arr);

		if( ! $name)
			$name = NULL;

		return $name;
	}
}