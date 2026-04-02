<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected ContactMessage $contactMessage;

    /**
     * Create a new message instance.
     */
    public function __construct(ContactMessage $contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-notification',
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

    public function build()
    {
        return $this->subject('新的网站咨询消息 - ' . config('app.name'))
            ->view('emails.contact-notification')
            ->with([
                'email' => $this->contactMessage->email,
                'content' => $this->contactMessage->message,
                'time' => $this->contactMessage->created_at->format('Y-m-d H:i:s'),
                'ip' => $this->contactMessage->ip_address,
                'firstname' => $this->contactMessage->firstname,
                'lastname' => $this->contactMessage->lastname,
                'nationality' => $this->contactMessage->nationality,
                'host' => $this->contactMessage->host,
            ]);
    }
}
