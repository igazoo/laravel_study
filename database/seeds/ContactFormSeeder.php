<?php

use Illuminate\Database\Seeder;
use App\Models\ContactForm;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ダミー２００件作成
        factory(ContactForm::class,200)->create();
    }
}
