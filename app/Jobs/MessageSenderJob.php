<?php

namespace App\Jobs;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MessageSenderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $sender;
    public $receivers;
    public $body;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sender,$receivers,$body)
    {
        $this->sender = $sender;
        $this->receivers = $receivers;
        $this->body = $body;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->receivers as $id) 
        {
            Message::create([
                'from' => $this->sender,
                'to' => $id,
                'body' => $this->body,
                ]);
        }
    }
}
