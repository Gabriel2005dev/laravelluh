<?php

namespace App\Data;


class Categories
{

    public static function all(): array
    {

        return [


            [

                'id' => 'cabelo',

                'name' => 'Cabelo',

                'icon' => 'cabelo.svg',


                'items' => [


                    [

                        'id' => 'cabelo-hidratacao',

                        'name' => 'Hidratação',

                        'icon' => 'cabelo-hidratacao.svg'

                    ],


                    [

                        'id' => 'cabelo-alisamento',

                        'name' => 'Alisamento',

                        'icon' => 'cabelo-alisamento.svg'

                    ],


                    [

                        'id' => 'cabelo-coloracao',

                        'name' => 'Coloração',

                        'icon' => 'cabelo-coloracao.svg'

                    ],


                    [

                        'id' => 'cabelo-finalizacao',

                        'name' => 'Finalização',

                        'icon' => 'cabelo-finalizacao.svg'

                    ],


                ]

            ],




            [

                'id' => 'unha',

                'name' => 'Unha',

                'icon' => 'unha.svg',


                'items' => [


                    [

                        'id' => 'unha-manicure',

                        'name' => 'Manicure',

                        'icon' => 'unha-manicure.svg'

                    ],


                    [

                        'id' => 'unha-alongamento',

                        'name' => 'Alongamento',

                        'icon' => 'unha-alongamento.svg'

                    ],


                    [

                        'id' => 'unha-extras',

                        'name' => 'Extras',

                        'icon' => 'unha-extras.svg'

                    ],


                ]

            ],


        ];

    }

}