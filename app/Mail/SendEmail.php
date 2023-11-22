<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class SendEmail extends Mailable
{
 use Queueable, SerializesModels;
 public $data_send;
 public function __construct(array $data_send)
 {
 $this->data_send = $data_send;
 }
 public function build()
 {
 return $this->subject($this->data_send['subject'])
 ->view('sendemail');
 }
}
