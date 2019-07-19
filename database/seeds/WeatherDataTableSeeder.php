<?php

use Illuminate\Database\Seeder;

class WeatherDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_data')->delete();
        $statement = "ALTER TABLE weather_data AUTO_INCREMENT = 1;";
        DB::unprepared($statement);
    
        $csv = dirname(__FILE__) . '/metocean.csv';
        $file_handle = fopen($csv, "r");
    
        echo PHP_EOL;
        echo '------------------------------------------ open file ------------------------------------------';
        echo PHP_EOL;
    
        while (!feof($file_handle)) {
    
            $line = fgetcsv($file_handle);
            if (empty($line)) {
                continue; // skip blank lines
            }
            if ($line[0] == 'Time[UTC+0.0]') {
                continue; // skip column headers
            }
            if ($line[0] == 'Column1') {
                continue; // skip column headers
            }
    

    
                $insert = array();
                $insert['time'] = $line[0];
                $insert['lev'] = $line[1];
                $insert['hs'] = $line[2];
                $insert['hx'] = $line[3];
                $insert['tp'] = $line[4];
                $insert['tm01'] = $line[5];
                $insert['tm02'] = $line[6];
                $insert['dp'] = $line[7];
                $insert['dpm'] = $line[8];
                $insert['hs_sw1'] = $line[9];
                $insert['hs_sw8'] = $line[10];
                $insert['tp_sw1'] = $line[11];
                $insert['tp_sw8'] = $line[12];
                $insert['dpm_sw8'] = $line[13];
                $insert['dpm_sw1'] = $line[14];
                $insert['hs_sea8'] = $line[15];
                $insert['hs_sea'] = $line[16];
                $insert['tp_sea8'] = $line[17];
                $insert['tp_sea'] = $line[18];
                $insert['tm_sea'] = $line[19];
                $insert['dpm_sea8'] = $line[20];
                $insert['dpm_sea'] = $line[21];
                $insert['hs_ig'] = $line[22];
                $insert['hs_fig'] = $line[23];
                $insert['wsp'] = $line[24];
                $insert['gst'] = $line[25];
                $insert['wd'] = $line[26];
                $insert['wsp100'] = $line[27];
                $insert['wsp50'] = $line[28];
                $insert['wsp80'] = $line[29];
                $insert['precip'] = $line[30];
                $insert['tmp'] = $line[31];
                $insert['rh'] = $line[32];
                $insert['vis'] = $line[33];
                $insert['cld'] = $line[34];
                $insert['cb'] = $line[35];
                $insert['csp0'] = $line[36];
                $insert['cd0'] = $line[37];
                $insert['ss'] = $line[38];
                $insert['sst'] = $line[39];
    // insert
                DB::table('weather_data')->insert($insert);
    
                echo 'insert: ' . $line[1] ;
                echo PHP_EOL;
    
            }
    
        // }
    
        fclose($file_handle);
    
        echo PHP_EOL;
        echo '------------------------------------------ close file ------------------------------------------';
        echo PHP_EOL;
    }
}
