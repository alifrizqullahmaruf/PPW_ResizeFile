<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $data_send;
    /**
     * Create a new job instance.
     */
    public function __construct(array $data_send)
    {
        $this->data_send = $data_send;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email = new SendEmail($this->data_send);
        Mail::to($this->data_send['email'])->send($email);
    }
}
