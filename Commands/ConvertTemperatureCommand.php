<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class ConvertTemperatureCommand extends Command
{
	protected $signature = "convert-temperature {temperature}";

	protected $description = "Converts a temperature from Fahrenheit to Celcius. (To input a negative temperature for conversion, use a double dash prior to the temperature input, e.g. php artisan convert-temperature -- -10";

	public function handle()
	{
		$tempF = $this->argument(('temperature'));

        $validator = Validator::make([
            'temperature' => $tempF,
        ],
        [
            'temperature' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->get('temperature') as $error) {
                $this->line($error);
            }
            return;
        }

        $tempC = ($tempF - 32) / 1.8;

        $this->line($tempF . ' degrees Fahrenheit = ' . number_format($tempC, 2) . ' degrees Celsius');
	}
}