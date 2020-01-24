<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $password;
    public $client_first_name;
    public $client_email;
    /**
     * Create a new message instance.
     *
     * @return void
     * @return void
     */
    public function __construct($password,$client_first_name,$client_email)
    {
        $this->password = $password;
        $this->client_first_name = $client_first_name;
        $this->client_email = $client_email;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('client_password');
    }
}
