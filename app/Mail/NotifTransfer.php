<?php

namespace App\Mail;

use App\Models\Person;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class NotifTransfer extends Mailable
{
    use Queueable, SerializesModels;

    public $person; // <--- TAMBAH INI

    /**
     * Create a new message instance.
     */
    public function __construct(Person $person) // <--- TAMBAH PARAMETER
    {
        $this->person = $person;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notif Transfer: ' . $this->person->name, // opsional, bisa personalisasi
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.transfer',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
