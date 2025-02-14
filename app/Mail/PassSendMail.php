<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class PassSendMail extends Mailable
{
    use Queueable, SerializesModels;
    protected array $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Вы успешно зарегистрировались miparfume.ru',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        //dd($this->data);
        return new Content(
            view: 'Mails.pass',
            with: ['pass' =>$this->data['pass'],'login' =>$this->data['login']]
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
