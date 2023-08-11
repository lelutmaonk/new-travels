<?php

namespace Database\Seeders;

use App\Models\Packages;
use App\Models\PackagesAdditionalNote;
use App\Models\PackagesIncluded;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Packages::create([
            'slug' => 'denpasar-tour',
            'packages_name' => 'Denpasar Tour',
            'packages_name_in' => 'Tur Denpasar',
            'packages_duration' => '10 Hrs',
            'packages_duration_in' => '10 Jam',
            'minimun_order' => '2',
            'minimun_order_in' => '2',
            'price' => 'USD 40',
            'price_in' => 'Rp. 608.928',
            'description' => 'Denpasar Tour program will bring you to visit Iconic places in Denpasar city, in Bali Province. Denpasar is the capital city of Bali Province, this city is also the business city on the island. And, of course, Denpasar is the central government of Bali Province, at the same time, Denpasar is the biggest and busiest city on Bali Island.',
            'description_in' => 'Program Denpasar Tour akan membawa anda mengunjungi tempat-tempat Iconic di kota Denpasar, di Propinsi Bali. Denpasar adalah ibu kota Provinsi Bali, kota ini juga merupakan kota bisnis di pulau ini. Dan tentunya Denpasar merupakan pusat pemerintahan Provinsi Bali, sekaligus Denpasar merupakan kota terbesar dan tersibuk di Pulau Bali.',
            'image' => 'https://media.istockphoto.com/id/1174482465/photo/bajra-sandhi-monument-denpasar-indonesia.webp?b=1&s=170667a&w=0&k=20&c=KRlsMvfnmc98vTUkByjXoEHwTmwQQbEwg60bETZ0SUI=',
        ]);

        PackagesIncluded::create([
            'packages_id' => 1,
            'included_name' => 'Bajra Sandhi Museum Entrance Ticket',
            'included_name_in' => 'Tiket Masuk Museum Bajra Sandhi',
        ]);

        PackagesIncluded::create([
            'packages_id' => 1,
            'included_name' => 'Bali Museum Entrance Ticket',
            'included_name_in' => 'Tiket Masuk Museum Bali',
        ]);

        PackagesIncluded::create([
            'packages_id' => 1,
            'included_name' => 'Private Car, Gasoline, Driver Fee',
            'included_name_in' => 'Mobil Pribadi, Bensin, Biaya Pengemudi',
        ]);

        PackagesAdditionalNote::create([
            'packages_id' => 1,
            'additional_note_name' => 'Make sure standby at your hotels lobby 15 min before Pick up Time',
            'additional_note_name_in' => 'Pastikan standby di lobi hotel Anda 15 menit sebelum Waktu Penjemputan',
        ]);

        PackagesAdditionalNote::create([
            'packages_id' => 1,
            'additional_note_name' => 'Bali Best Adventures will not refund any payment if the guest NO SHOW or make a cancellation one day before the trip.',
            'additional_note_name_in' => 'Bali Best Adventures tidak akan mengembalikan pembayaran apapun jika tamu NO SHOW atau melakukan pembatalan satu hari sebelum perjalanan.',
        ]);

       



    }
}
