<?php namespace API;

use Illuminate\Http\JsonResponse as JsonResponse;
use Illuminate\Support\Contracts\ArrayableInterface;
use Illuminate\Support\Facades\Response as BaseResponse;
use Illuminate\Support\MessageBag;
use Paginator;
use Symfony\Component\HttpFoundation\Response as ResponsePackage;

class Response extends BaseResponse {

	/**
	 * @var int
	 */
	protected $statusCode = 200;

	/**
	 * @var string
	 */
	protected $redirectUrl;

	/**
	 * @var array
	 */
	protected $data = [];

	/**
	 * @var array
	 */
	protected $messages;

	/**
	 * @return array
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * @param array $data
	 */
	public function setData($data)
	{
		$this->data = $data;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStatusCode()
	{
		return $this->statusCode;
	}

	/**
	 * @param mixed $statusCode
	 *
	 * @return $this
	 */
	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;

		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getRedirectUrl()
	{
		return $this->redirectUrl;
	}

	/**
	 * @param mixed $redirectUrl
	 */
	public function setRedirectUrl($redirectUrl)
	{
		$this->redirectUrl = $redirectUrl;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getMessages()
	{
		return $this->messages;
	}

	/**
	 * @param $message
	 */
	public function respondWithNotFound($message = 'Not found', $section = NULL)
	{
		return $this->setStatusCode(ResponsePackage::HTTP_NOT_FOUND)->respondWithError($message, $section);
	}

	/**
	 * @param $message
	 */
	public function respondWithForbidden($message = 'Forbidden')
	{
		return $this->setStatusCode(ResponsePackage::HTTP_FORBIDDEN)->respondWithError($message);
	}

	/**
	 * @param $message
	 */
	public function respondWithUnauthorized($message = 'Unauthorized')
	{
		return $this->setStatusCode(ResponsePackage::HTTP_UNAUTHORIZED)->respondWithError($message);
	}

	/**
	 * @param $message
	 */
	public function respondWithInternalError($message = 'Internal Server Error')
	{
		return $this->setStatusCode(ResponsePackage::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
	}

	public function respondWithBadRequest($message = 'Bad Request', $section = NULL)
	{
		return $this->setStatusCode(ResponsePackage::HTTP_BAD_REQUEST)->respondWithError($message, $section);
	}

	/**
	 * @param $message
	 */
	public function respondWithError($message, $section = NULL)
	{
		return $this->respond([
			'message' => $this->getMessage('error', $message, $section)
		]);
	}

	/**
	 * @param $message
	 */
	public function respondWithSuccess($message)
	{
		return $this->respond([
			'message' => $this->getMessage('success', $message),
		]);
	}

	public function getErrorType()
	{
	}

	/**
	 * @param Paginator  $object
	 * @param            $data
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function respondWithPagination(Paginator $object, $data, $pagination_view = FALSE)
	{
		$total_pages = ceil($object->getTotal() / $object->getPerPage());
		$next_page = ($object->getCurrentPage() == $object->getLastPage()) ? NULL : $object->getCurrentPage() + 1;
		$previous_page = ($object->getCurrentPage() == 1) ? NULL : $object->getCurrentPage() - 1;

		$paginator = [
			'pagination' => ($pagination_view)
				? $object->links()->render()
				: [
					'total_items'  => $object->getTotal(),
					'total_pages'  => $total_pages,
					'per_page'     => $object->getPerPage(),
					'current_page' => $object->getCurrentPage(),
					'previous_page' => $previous_page,
					'next_page'    => $next_page,
					'last_page'    => $object->getLastPage(),
				]
		];

		$data = array_merge($data, $paginator);

		return $this->respond($data);
	}

	/**
	 * @param       $message
	 * @param array $headers
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function respond($data, $headers = [])
	{
		$data += ['status' => $this->getStatusCode()];

		if($this->getRedirectUrl())
			$data += ['redirect' => $this->getRedirectUrl()];

		if($this->getData())
			$data += ['data' => $this->getData()];

		$headers += [
			'Access-Control-Allow-Origin' => '*',
			'Access-Control-Allow-Methods' => 'GET, POST'
		];

		return \Response::json($data, $this->getStatusCode(), $headers, JSON_UNESCAPED_UNICODE);
	}

	/**
	 * @param      $type
	 * @param      $message
	 * @param null $section
	 *
	 * @return array
	 */
	public function getMessage($type, $message, $section = NULL)
	{
		$messages = [];

		if(is_array($message))
		{
			foreach($message as $_section => $error)
			{
				if(is_string($_section))
					$section = $_section;

				$messages[] = $this->prepareMessage($type, $error, $section);
			}
		}
		elseif($message instanceof MessageBag)
		{
			foreach($message->toArray() as $_section => $_messages)
			{
				foreach($_messages as $_message)
				{
					$messages[] = $this->prepareMessage($type, $_message, $_section);
				}
			}
		}
		else
		{
			$messages[] = $this->prepareMessage($type, $message, $section);
		}

		return $messages;
	}

	/**
	 * @param      $type
	 * @param      $message
	 * @param null $section
	 *
	 * @return array
	 */
	public function setMessages($message, $type, $section = NULL)
	{
		if(is_array($message))
		{
			foreach($message as $_section => $error)
			{
				if(is_string($_section))
					$section = $_section;

				$this->messages[] = $this->prepareMessage($type, $error, $section);
			}
		}
		elseif($message instanceof MessageBag)
		{
			foreach($message->toArray() as $_section => $_messages)
			{
				foreach($_messages as $_message)
					$this->messages[] = $this->prepareMessage($type, $_message, $_section);
			}
		}
		else
		{
			$this->messages[] = $this->prepareMessage($type, $message, $section);
		}

		return $this->messages;
	}

	/**
	 * @param $type
	 * @param $message
	 * @param $section
	 *
	 * @return array
	 */
	private function prepareMessage($type, $message, $section)
	{
		return [
			'type'        => $type,
			'text'        => $message,
//			'status_code' => $this->getStatusCode(),
			'section'     => $section,
		];
	}

	/**
	 * @param $code
	 *
	 * @return JsonResponse
	 */public static function error($code)
	{
		return Response::json(array('error' => trans('messages.api.'.$code)), 404);
	}

	/**
	 * Return a new JSON response from the application.
	 *
	 * @param  string|array  $data
	 * @param  int    $status
	 * @param  array  $headers
	 * @param  int    $options
	 * @deprecated
	 * @return JsonResponse
	 */
	public static function json($data = array(), $status = 200, array $headers = array(), $options = 0)
	{
		if ($data instanceof ArrayableInterface)
		{
			$data = $data->toArray();
		}

		$messages = array_only($data, array('message', 'messages', 'error', 'errors'));

		$message = NULL;
		foreach($messages as $type => $error)
		{
			switch($type)
			{
				case 'message':
				case 'messages':
					$type = 'message';
					break;
				case 'error':
				case 'errors':
					$type = 'error';
//					$response_status = $status;
					break;
			}

			if(is_array($error))
			{
				foreach($error as $section => $text)
				{
					$message[] = array('type' => $type, 'text' => $text, 'section' => $section);
				}
			}
			else
			{
				$message[] = array('type' => $type, 'text' => $error);
			}
		}

		unset($data['message']);
		unset($data['messages']);
		unset($data['error']);
		unset($data['errors']);
		unset($data['status']);
		unset($data['code']);

		if($message)
			$data['message'] = $message;

		$data += array('status' => $status);

		$options = $options|JSON_UNESCAPED_UNICODE;

		$headers +=array('Access-Control-Allow-Origin' => '*', 'Access-Control-Allow-Methods' => 'GET, POST');

		return new JsonResponse($data, $status, $headers, $options);
	}
}
