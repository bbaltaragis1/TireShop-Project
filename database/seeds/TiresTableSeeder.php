<?php

use Illuminate\Database\Seeder;

class TiresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tires')->delete();
        
        \DB::table('tires')->insert(array (
            0 => 
            array (
                'tireID' => 1,
                'name' => 'Hankook DynaPro ATM RF10 Off-Road Tire - 265/70R17 113T',
                'price' => '114.97',
                'rating' => '4.4',
                'brand' => 'Hankook',
                'rimDiameter' => 17,
                'stock' => 107,
            ),
            1 => 
            array (
                'tireID' => 2,
                'name' => 'Westlake RP18 Touring Radial Tire - 215/60R16 95H',
                'price' => '59.20',
                'rating' => '4.4',
                'brand' => 'Westlake',
                'rimDiameter' => 16,
                'stock' => 47,
            ),
            2 => 
            array (
                'tireID' => 3,
                'name' => 'Hankook Optimo H724 All-Season Tire - 185/65R15 86T',
                'price' => '52.44',
                'rating' => '4.9',
                'brand' => 'Hankook',
                'rimDiameter' => 15,
                'stock' => 93,
            ),
            3 => 
            array (
                'tireID' => 4,
                'name' => 'Sumic GT-A All-Season Radial Tire - 225/60R16 98H',
                'price' => '56.36',
                'rating' => '4.5',
                'brand' => 'SUMIC',
                'rimDiameter' => 16,
                'stock' => 122,
            ),
            4 => 
            array (
                'tireID' => 5,
                'name' => 'Falken Wildpeak AT3W All Terrain Radial Tire - 265/70R17 115T',
                'price' => '139.00',
                'rating' => '4.9',
                'brand' => 'Falken',
                'rimDiameter' => 17,
                'stock' => 132,
            ),
            5 => 
            array (
                'tireID' => 6,
                'name' => 'Lexani LX-TWENTY Performance Radial Tire - 245/35r20 95W',
                'price' => '70.97',
                'rating' => '5.0',
                'brand' => 'Lexani',
                'rimDiameter' => 20,
                'stock' => 96,
            ),
            6 => 
            array (
                'tireID' => 7,
                'name' => 'Falken Wildpeak AT3W All Terrain Radial Tire - 235/75R15 109T',
                'price' => '98.62',
                'rating' => '5.0',
                'brand' => 'Falken',
                'rimDiameter' => 15,
                'stock' => 73,
            ),
            7 => 
            array (
                'tireID' => 8,
                'name' => 'Trailer King ST Radial Trailer Tire - 205/75R15 107L',
                'price' => '58.61',
                'rating' => '4.3',
                'brand' => 'TRAILER KING',
                'rimDiameter' => 15,
                'stock' => 67,
            ),
            8 => 
            array (
                'tireID' => 9,
                'name' => 'Cooper Starfire RS-C 2.0 All-Season Radial Tire - 215/60R16 95V',
                'price' => '66.99',
                'rating' => '4.7',
                'brand' => 'Starfire',
                'rimDiameter' => 16,
                'stock' => 107,
            ),
            9 => 
            array (
                'tireID' => 10,
                'name' => 'Lexani LX-TWENTY Performance Radial Tire - 265/40r22 106W',
                'price' => '120.86',
                'rating' => '5.0',
                'brand' => 'Lexani',
                'rimDiameter' => 22,
                'stock' => 132,
            ),
            10 => 
            array (
                'tireID' => 11,
                'name' => 'Kumho Solus TA31 Touring Radial Tire - 205/65R16 95H',
                'price' => '70.36',
                'rating' => '3.8',
                'brand' => 'Kumho',
                'rimDiameter' => 16,
                'stock' => 139,
            ),
            11 => 
            array (
                'tireID' => 12,
                'name' => 'Hankook Optimo H727 All-Season Tire - 185/60R15 84T',
                'price' => '63.97',
                'rating' => '4.8',
                'brand' => 'Hankook',
                'rimDiameter' => 15,
                'stock' => 98,
            ),
            12 => 
            array (
                'tireID' => 13,
                'name' => 'Falken Wildpeak AT3W All Terrain Radial Tire - 31x10.5R15 109S',
                'price' => '137.23',
                'rating' => '5.0',
                'brand' => 'Falken',
                'rimDiameter' => 18,
                'stock' => 66,
            ),
            13 => 
            array (
                'tireID' => 14,
                'name' => 'Pirelli SCORPION VERDE Season Plus Touring Radial Tire - 235/55R18 104V',
                'price' => '151.00',
                'rating' => '4.8',
                'brand' => 'Pirelli',
                'rimDiameter' => 18,
                'stock' => 25,
            ),
            14 => 
            array (
                'tireID' => 15,
                'name' => 'Doral SDL-A All-Season Radial Tire - 185/60R15 84T',
                'price' => '41.64',
                'rating' => '4.9',
                'brand' => 'Doral',
                'rimDiameter' => 15,
                'stock' => 105,
            ),
            15 => 
            array (
                'tireID' => 16,
                'name' => 'Hankook Optimo H724 All-Season Tire - 185/70R14 87T',
                'price' => '43.97',
                'rating' => '4.6',
                'brand' => 'Hankook',
                'rimDiameter' => 14,
                'stock' => 62,
            ),
            16 => 
            array (
                'tireID' => 17,
                'name' => 'GT Radial CHAMPIRO VP1 All-Season Radial Tire - 175/65R14 82T',
                'price' => '36.68',
                'rating' => '3.3',
                'brand' => 'GT Radial',
                'rimDiameter' => 14,
                'stock' => 176,
            ),
            17 => 
            array (
                'tireID' => 18,
                'name' => 'General Grabber AT2 Radial Tire - 30/950R15 104S',
                'price' => '123.00',
                'rating' => '5.0',
                'brand' => 'General Tire',
                'rimDiameter' => 15,
                'stock' => 114,
            ),
            18 => 
            array (
                'tireID' => 19,
                'name' => 'General Altimax RT43 Radial Tire - 205/55R16 91H',
                'price' => '85.97',
                'rating' => '4.7',
                'brand' => 'General Tire',
                'rimDiameter' => 16,
                'stock' => 30,
            ),
            19 => 
            array (
                'tireID' => 20,
                'name' => 'Mastercraft Courser AXT Radial Tire - 265/75R16 116T',
                'price' => '121.97',
                'rating' => '4.1',
                'brand' => 'Mastercraft',
                'rimDiameter' => 16,
                'stock' => 181,
            ),
            20 => 
            array (
                'tireID' => 21,
                'name' => 'Kumho Road Venture AT51 All-Season Radial Tire - LT245/75R16/10 120R',
                'price' => '135.13',
                'rating' => '5.0',
                'brand' => 'Kumho',
                'rimDiameter' => 16,
                'stock' => 42,
            ),
            21 => 
            array (
                'tireID' => 22,
                'name' => 'Grenlander L-FINDER 78 All-Season Radial Tire - P235/65R17 103T',
                'price' => '72.92',
                'rating' => '4.1',
                'brand' => 'Grenlander',
                'rimDiameter' => 17,
                'stock' => 38,
            ),
            22 => 
            array (
                'tireID' => 23,
                'name' => 'Falken Wildpeak AT3W All Terrain Radial Tire - 275/55R20 117T',
                'price' => '161.95',
                'rating' => '5.0',
                'brand' => 'Falken',
                'rimDiameter' => 20,
                'stock' => 55,
            ),
            23 => 
            array (
                'tireID' => 24,
                'name' => 'Nankang CX668 Radial Tire - 165/70R12 77T',
                'price' => '41.03',
                'rating' => '4.7',
                'brand' => 'Nankang',
                'rimDiameter' => 12,
                'stock' => 149,
            ),
            24 => 
            array (
                'tireID' => 25,
                'name' => 'Westlake RP18 Touring Radial Tire - 175/65R14 82H',
                'price' => '33.70',
                'rating' => '4.3',
                'brand' => 'Westlake',
                'rimDiameter' => 14,
                'stock' => 190,
            ),
            25 => 
            array (
                'tireID' => 26,
                'name' => 'Hankook Optimo H724 All-Season Tire - 215/60R16 94T',
                'price' => '84.92',
                'rating' => '4.8',
                'brand' => 'Hankook',
                'rimDiameter' => 16,
                'stock' => 112,
            ),
            26 => 
            array (
                'tireID' => 27,
                'name' => 'Toyo Open Country A/T II Radial Tire - 265/70R17 113S',
                'price' => '153.73',
                'rating' => '4.0',
                'brand' => 'Toyo Tires',
                'rimDiameter' => 17,
                'stock' => 171,
            ),
            27 => 
            array (
                'tireID' => 28,
                'name' => 'Hankook Optimo H727 All-Season Tire - 215/60R16 94T',
                'price' => '79.70',
                'rating' => '4.4',
                'brand' => 'Hankook',
                'rimDiameter' => 17,
                'stock' => 128,
            ),
            28 => 
            array (
                'tireID' => 29,
                'name' => 'Nitto Terra Grappler G2 Traction Radial Tire - 285/70R17 116T',
                'price' => '180.00',
                'rating' => '4.8',
                'brand' => 'Nitto',
                'rimDiameter' => 17,
                'stock' => 117,
            ),
            29 => 
            array (
                'tireID' => 30,
                'name' => 'Cooper Discoverer A/T3 Traction Radial Tire - 265/75R16 116T',
                'price' => '132.97',
                'rating' => '4.5',
                'brand' => 'Cooper Tire',
                'rimDiameter' => 16,
                'stock' => 192,
            ),
            30 => 
            array (
                'tireID' => 31,
                'name' => 'ST 175/80R13 Freestar M-108 6 Ply C Load Radial Trailer Tire 1758013',
                'price' => '33.55',
                'rating' => '4.5',
                'brand' => 'Freestar',
                'rimDiameter' => 13,
                'stock' => 27,
            ),
            31 => 
            array (
                'tireID' => 32,
                'name' => 'Goodyear Eagle RS-A Radial Tire - 245/45R18 96VR',
                'price' => '119.34',
                'rating' => '4.7',
                'brand' => 'Goodyear',
                'rimDiameter' => 18,
                'stock' => 119,
            ),
            32 => 
            array (
                'tireID' => 33,
                'name' => 'Goodyear Eagle RS-A Radial Tire - 255/60R19 108H',
                'price' => '159.97',
                'rating' => '4.2',
                'brand' => 'Goodyear',
                'rimDiameter' => 17,
                'stock' => 126,
            ),
            33 => 
            array (
                'tireID' => 34,
                'name' => 'Michelin Latitude Tour All-Season Radial Tire - P225/65R17 100T',
                'price' => '140.98',
                'rating' => '4.2',
                'brand' => 'MICHELIN',
                'rimDiameter' => 17,
                'stock' => 74,
            ),
            34 => 
            array (
                'tireID' => 35,
                'name' => 'Nankang SP-9 Cross-Sport All-Season Radial Tire - 205/60R14 88H',
                'price' => '53.32',
                'rating' => '3.9',
                'brand' => 'Nankang',
                'rimDiameter' => 14,
                'stock' => 170,
            ),
            35 => 
            array (
                'tireID' => 36,
                'name' => 'Sumic GT-A All-Season Radial Tire - 175/70R13 82S',
                'price' => '42.59',
                'rating' => '5.0',
                'brand' => 'SUMIC',
                'rimDiameter' => 13,
                'stock' => 47,
            ),
            36 => 
            array (
                'tireID' => 37,
                'name' => 'Cooper Starfire SF-510 All-Season Radial Tire - 31/10.50R15 109R',
                'price' => '107.97',
                'rating' => '3.9',
                'brand' => 'Starfire',
                'rimDiameter' => 15,
                'stock' => 94,
            ),
            37 => 
            array (
                'tireID' => 38,
                'name' => 'Falken Wildpeak AT3W All Terrain Radial Tire - 33x12.5R15 108R',
                'price' => '158.42',
                'rating' => '4.8',
                'brand' => 'Falken',
                'rimDiameter' => 15,
                'stock' => 131,
            ),
            38 => 
            array (
                'tireID' => 39,
                'name' => 'Cooper Adventurer A/T 90000019939 Tire - 265/70R17',
                'price' => '116.60',
                'rating' => '4.6',
                'brand' => 'Cooper Tire',
                'rimDiameter' => 13,
                'stock' => 171,
            ),
            39 => 
            array (
                'tireID' => 40,
                'name' => 'Sumic GT-A All-Season Radial Tire - 215/60R16 95H',
                'price' => '56.93',
                'rating' => '3.3',
                'brand' => 'SUMIC',
                'rimDiameter' => 16,
                'stock' => 73,
            ),
            40 => 
            array (
                'tireID' => 41,
                'name' => 'BFGoodrich All-Terrain T/A KO2 Radial Tire - 275/70R17 121R',
                'price' => '219.97',
                'rating' => '4.7',
                'brand' => 'BFGoodrich',
                'rimDiameter' => 17,
                'stock' => 31,
            ),
            41 => 
            array (
                'tireID' => 42,
                'name' => 'Doral SDL-A All-Season Radial Tire - 215/65R17 99T',
                'price' => '69.98',
                'rating' => '4.8',
                'brand' => 'Doral',
                'rimDiameter' => 17,
                'stock' => 117,
            ),
            42 => 
            array (
                'tireID' => 43,
                'name' => 'Firestone FR710 Radial Tire - 225/65R16 100T',
                'price' => '87.90',
                'rating' => '5.0',
                'brand' => 'Firestone',
                'rimDiameter' => 16,
                'stock' => 102,
            ),
            43 => 
            array (
                'tireID' => 44,
                'name' => 'Fuzion Touring All-Season Radial Tire - 225/60R17 99H',
                'price' => '79.00',
                'rating' => '3.8',
                'brand' => 'Fuzion',
                'rimDiameter' => 17,
                'stock' => 149,
            ),
            44 => 
            array (
                'tireID' => 45,
                'name' => 'Mastercraft SRT Touring Touring Radial Tire -225/65R16 100T',
                'price' => '79.75',
                'rating' => '4.7',
                'brand' => 'Mastercraft',
                'rimDiameter' => 16,
                'stock' => 50,
            ),
            45 => 
            array (
                'tireID' => 46,
                'name' => 'Doral SDL-A All-Season Radial Tire - 195/55R15 85V',
                'price' => '48.97',
                'rating' => '5.0',
                'brand' => 'Doral',
                'rimDiameter' => 15,
                'stock' => 173,
            ),
            46 => 
            array (
                'tireID' => 47,
                'name' => 'Achilles 122 All-Season Radial Tire - 155/70R13 75T',
                'price' => '50.00',
                'rating' => '3.7',
                'brand' => 'Achilles',
                'rimDiameter' => 14,
                'stock' => 136,
            ),
            47 => 
            array (
                'tireID' => 48,
                'name' => 'Firestone Winterforce Winter Radial Tire - 195/70R14 91S',
                'price' => '61.80',
                'rating' => '4.8',
                'brand' => 'Firestone',
                'rimDiameter' => 16,
                'stock' => 150,
            ),
            48 => 
            array (
                'tireID' => 49,
                'name' => 'Yokohama Geolandar A/T G015 All-Terrain Radial Tire - 265/75R16 114T',
                'price' => '134.23',
                'rating' => '4.6',
                'brand' => 'Yokohama',
                'rimDiameter' => 16,
                'stock' => 140,
            ),
            49 => 
            array (
                'tireID' => 50,
                'name' => 'Cooper Weather-Master S/T 2 Winter Radial Tire - 225/65R17 102T',
                'price' => '118.14',
                'rating' => '5.0',
                'brand' => 'Cooper Tire',
                'rimDiameter' => 17,
                'stock' => 51,
            ),
            50 => 
            array (
                'tireID' => 51,
                'name' => 'Carlisle Radial Trail HD Trailer Tire - 205/75R14 100M',
                'price' => '50.00',
                'rating' => '4.0',
                'brand' => 'Carlisle',
                'rimDiameter' => 14,
                'stock' => 17,
            ),
            51 => 
            array (
                'tireID' => 52,
                'name' => 'Hankook Optimo H724 Radial Tire - 175/70R14 84T',
                'price' => '46.97',
                'rating' => '4.5',
                'brand' => 'Hankook',
                'rimDiameter' => 14,
                'stock' => 112,
            ),
            52 => 
            array (
                'tireID' => 53,
                'name' => 'Yokohama GEOLANDAR AT G015 All-Terrain Radial Tire - P265/70R17 113T',
                'price' => '142.13',
                'rating' => '5.0',
                'brand' => 'Yokohama',
                'rimDiameter' => 17,
                'stock' => 116,
            ),
            53 => 
            array (
                'tireID' => 54,
                'name' => 'Milestar MS775 All-Season Radial Tire - P155/80R13',
                'price' => '30.81',
                'rating' => '3.7',
                'brand' => 'Milestar',
                'rimDiameter' => 13,
                'stock' => 46,
            ),
            54 => 
            array (
                'tireID' => 55,
                'name' => 'Achilles ATR Sport 2 Performance Radial Tire - 225/45R18 95W',
                'price' => '99.34',
                'rating' => '5.0',
                'brand' => 'Achilles',
                'rimDiameter' => 18,
                'stock' => 61,
            ),
            55 => 
            array (
                'tireID' => 56,
                'name' => 'Hankook Ventus V2 concept 2 All-Season Radial Tire - 205/45R17 V',
                'price' => '69.00',
                'rating' => '5.0',
                'brand' => 'Hankook',
                'rimDiameter' => 17,
                'stock' => 158,
            ),
            56 => 
            array (
                'tireID' => 57,
                'name' => 'GT Radial KOMODO M/T Plus All-Terrain Radial Tire - 31X10.50R15LT 109Q',
                'price' => '132.90',
                'rating' => '4.2',
                'brand' => 'GT Radial',
                'rimDiameter' => 15,
                'stock' => 28,
            ),
            57 => 
            array (
                'tireID' => 58,
                'name' => 'Cooper Discoverer H/T Plus All-Season Tire - 275/55R20 117T',
                'price' => '137.43',
                'rating' => '4.9',
                'brand' => 'Cooper Tire',
                'rimDiameter' => 20,
                'stock' => 35,
            ),
            58 => 
            array (
                'tireID' => 59,
                'name' => 'Continental PureContact Radial Tire - 235/55R18 100V',
                'price' => '156.55',
                'rating' => '5.0',
                'brand' => 'Continental',
                'rimDiameter' => 18,
                'stock' => 82,
            ),
        ));
        
        
    }
}