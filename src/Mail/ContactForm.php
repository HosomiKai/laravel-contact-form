<?php

namespace hosomikai\ContactForm\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * 寄件者姓名.
     *
     * @var string
     */
    public $name;

    /**
     * 寄件者Email.
     *
     * @var string
     */
    public $email;

    /**
     * 內容.
     *
     * @var string
     */
    public $content;

    /**
     * 寄件者聯絡電話.
     *
     * @var string
     */
    public $phone;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $content, string $phone = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->content = $content;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->name)->markdown('contact-form::email.contact_form');
    }
}
