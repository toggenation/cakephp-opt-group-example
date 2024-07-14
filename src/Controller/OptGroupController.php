<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * OptGroup Controller
 *
 */
class OptGroupController extends AppController
{
    public function index()
    {
        $optGroup = [
            'Category1' => [
                1 => 'AthleteGroupA',
                2 => 'AthleteGroupB',

            ], 'Category2' => [
                3 =>  'AthleteGroupC',
                4 => 'AthleteGroupD',
            ], 'Category3' => [
                5 => 'AthleteGroupE',
                6 => 'AthleteGroupF',
            ]
        ];

        $optGroup = [
            [
                'text' => 'Category1',
                // 'value' => 'Category1',
                'data-id' => "id-1",
                'options' => [
                    [
                        'text' =>  'AthleteGroupA',
                        'value' => 1,
                        'data-id' => 'id-1-1'
                    ]
                ]
            ],
            [
                'text' => 'Category2',
                // 'value' => 'Category2',
                'data-id' => "id-2",
                'options' =>
                [
                    [
                        'value' => 2,
                        'text' => 'AthleteGroupB',
                        'data-id' => "id-2-2",
                    ]
                ]
            ]
        ];
        // dd($optGroup);
        $this->set('optGroup', $optGroup);
    }
}
