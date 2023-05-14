<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $fromAddress ,$to , $subject , $body , $username , $fullname ;

     
    public function __construct($fromAddress , $body , $subject , $fullname , $username)
    {
        $this->fromAddress = $fromAddress;
        $this->body = $body;
        $this->subject = $subject;
        $this->fullname = $fullname;
        $this->username = $username;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from : $this->fromAddress,
            subject : $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.added',
            with: ['fullname' => $this->fullname , 'username' =>$this->username , 'body' => $this->body] ,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
