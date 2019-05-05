<?php


namespace App\Services;


use App\Helper\LoggerTrait;
use Nexy\Slack\Client;

class SlackClient
{
    use LoggerTrait;

    private $slack;

    public function __construct(Client $slack)
    {
        $this->slack = $slack;
    }

    public function sendNotification(string $from, string $message):void
    {
        $this->logInfo('Sending a Slack Notification',[
            'message' => $message
            ]);

        $slackNotification = $this->slack->createMessage()
            ->from($from)
            //->withIcon(':ghost:')
            ->setText($message)
        ;

        $this->slack->sendMessage($slackNotification);

    }

}