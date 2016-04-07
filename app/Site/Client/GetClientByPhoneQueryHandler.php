<?php namespace Site\Client;

use Client;
use Laracasts\Commander\CommandHandler;

class GetClientByPhoneQueryHandler implements CommandHandler
{

    /**
     * Handle the command
     *
     * @param GetClientByPhoneQuery $command
     *
     * @return Client|null
     */
    public function handle($command)
    {
        $client = Client::where('phone', 'LIKE', $command->phone)->first();

        return $client;
    }
}