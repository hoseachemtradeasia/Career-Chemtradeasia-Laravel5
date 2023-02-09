<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('faq')->truncate();

        Faq::create(array(
            'faq_question' => 'Lorem Ipsum 1',
            'faq_answer' => 'Answer 1',
        ));
        Faq::create(array(
            'faq_question' => 'Lorem Ipsum 2',
            'faq_answer' => 'Answer 2',
        ));
    }
}
