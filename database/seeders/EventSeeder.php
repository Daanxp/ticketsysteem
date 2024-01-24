<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();
        $event->title = 'NK Atletiek';
        $event->address = 'Dr. Schaepmanlaan 4';
        $event->zip = '4837BW';
        $event->city = 'Breda';
        $event->start_date = '2024-06-25 12:00:00';
        $event->end_date = '2024-06-25 20:00:00';
        $event->service_costs = '0';
        $event->ticket_price = '19.99';
        $event->description = 'Nederlands Kampioenschap Atletiek';
        $event->save();

        $event = new Event();
        $event->title = 'WK Bodybuilding';
        $event->address = 'Jaarbeursplein';
        $event->zip = '3521AL';
        $event->city = 'Utrecht';
        $event->start_date = '2024-08-25 14:30:00';
        $event->end_date = '2024-08-25 21:30:00';
        $event->service_costs = '19.99';
        $event->ticket_price = '25.00';
        $event->description = 'Wereld Kampioenschap Bodybuilding';
        $event->save();
    }
}
