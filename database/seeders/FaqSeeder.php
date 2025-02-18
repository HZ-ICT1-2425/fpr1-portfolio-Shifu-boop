<?php

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        Faq::create([
            'question' => 'How can I print a document at HZ?',
            'answer' => 'Go to the HZ website, login, and select the printer. Then use your HZ pass to print.'
        ]);

        Faq::create([
            'question' => 'How can I scan a document at HZ?',
            'answer' => 'Use the TouchID scanner at the university to scan and send documents to your email.'
        ]);

        Faq::create([
            'question' => 'How can I book a project space?',
            'answer' => 'Go to the self-service portal on MyLearn and select "Reserve a room".'
        ]);
    }
}
