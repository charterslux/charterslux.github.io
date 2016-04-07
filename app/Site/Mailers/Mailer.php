<?php namespace Site\Mailers;

use API\Exception\InternalErrorException;
use API\Transformers\ClientTransformer;
use API\Transformers\JetClassTransformer;
use API\Transformers\JetMakerTransformer;
use API\Transformers\LegTransformer;
use Closure;
use Exception;
use I18n;
use Illuminate\Mail\Mailer as Mail;
use Illuminate\Mail\Message;
use Illuminate\Queue\QueueManager;
use Illuminate\Support\SerializableClosure;

/**
 * Class Mailer
 * @package Site\Mailers
 */
class Mailer {

	/*
	 * The QueueManager instance.
	 *
	 * @var \Illuminate\Queue\QueueManager
	 */
	private $queue;

	/**
	 * @var Mail
	 */
	private $mail;

	/**
	 * @var JetClassTransformer
	 */
	protected $jetClassTransformer;
	/**
	 * @var JetMakerTransformer
	 */
	protected $jetMakerTransformer;
	/**
	 * @var LegTransformer
	 */
	protected $legTransformer;
	/**
	 * @var ClientTransformer
	 */
	protected $clientTransformer;

	/**
	 * @param JetClassTransformer $jetClassTransformer
	 * @param JetMakerTransformer $jetMakerTransformer
	 * @param LegTransformer      $legTransformer
	 * @param ClientTransformer   $clientTransformer
	 * @param Mail                $mail
	 * @param QueueManager        $queue
	 */
	public function __construct(
		JetClassTransformer $jetClassTransformer,
		JetMakerTransformer $jetMakerTransformer,
		LegTransformer $legTransformer,
		ClientTransformer $clientTransformer,
		Mail $mail,
		QueueManager $queue)
	{
		$this->mail = $mail;
		$this->queue = $queue;
		$this->jetClassTransformer = $jetClassTransformer;
		$this->jetMakerTransformer = $jetMakerTransformer;
		$this->legTransformer = $legTransformer;
		$this->clientTransformer = $clientTransformer;
	}

	/**
	 * @param $email
	 * @param $subject
	 * @param $view
	 * @param $data
	 */
	public function sendTo($email, $subject, $view, $data = [])
	{
		$data = array_merge($data, ['lang' => I18n::getCurrentLocale()]);

		try
		{
			$this->queue($view, $data, function(Message $message) use ($email, $subject)
			{
				$message
					->to($email)
					->subject($subject)
					->bcc('sergey@chartersluxury.com')
				;
			});
		}
		catch(Exception $e)
		{
			throw new InternalErrorException($e->getMessage());
		}

	}

	/**
	 * Queue a new e-mail message for sending.
	 *
	 * @param  string|array  $view
	 * @param  array   $data
	 * @param  \Closure|string  $callback
	 * @param  string  $queue
	 * @return void
	 */
	public function queue($view, array $data, $callback, $queue = null)
	{
		$callback = $this->buildQueueCallable($callback);

		$this->queue->push('\Site\Mailers\Mailer@handleQueuedMessage', compact('view', 'data', 'callback'), $queue);
	}

	/**
	 * Build the callable for a queued e-mail job.
	 *
	 * @param  mixed  $callback
	 * @return mixed
	 */
	protected function buildQueueCallable($callback)
	{
		if ( ! $callback instanceof Closure) return $callback;

		return serialize(new SerializableClosure($callback));
	}

	/**
	 * Get the true callable for a queued e-mail message.
	 *
	 * @param  array  $data
	 * @return mixed
	 */
	protected function getQueuedCallable(array $data)
	{
		if (str_contains($data['callback'], 'SerializableClosure'))
		{
			return with(unserialize($data['callback']))->getClosure();
		}

		return $data['callback'];
	}

	/**
	 * Handle a queued e-mail message job.
	 *
	 * @param  \Illuminate\Queue\Jobs\Job  $job
	 * @param  array  $data
	 * @return void
	 */
	public function handleQueuedMessage($job, $data)
	{
		$lang = array_get($data['data'], 'lang');

		if($lang)
			I18n::setLocale($lang);

		$this->mail->send($data['view'], $data['data'], $this->getQueuedCallable($data));

		$job->delete();
	}
}