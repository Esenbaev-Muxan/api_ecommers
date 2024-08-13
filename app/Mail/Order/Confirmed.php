<?php

namespace App\Mail\Order;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Confirmed extends Mailable
{
    use Queueable, SerializesModels;

 
    public function __construct(
        protected Order $order
    )
    {
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('support@example.com', 'dasdasd'),
            subject: 'Buyurtmangiz yaratildi',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'view.mail.order.confirmed',
        );
    }

 
    public function attachments(): array
    {
        return [];
    }
}
