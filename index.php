<?php

echo json_encode([
    'info' => [
        'name' => 'Heli kopter',
        'description' => 'Heli Kopter favorite topic'
    ],
    'data' => [
        [
            'title' => 'title1',
            'description' => 'Description1',
            'image' => 'https://tak17.janek.itmajakas.ee/code/hajusrakendused/ylesanne5/upload/image.jpeg',
            'topic1' => 'topic1',
            'topic2' => 'topic2',
        ],
        [
            'title' => 'title2',
            'description' => 'Description2',
            'image' => 'https://image.link2.com',
            'topic1' => 'topic1',
            'topic2' => 'topic2',
        ],
        [
            'title' => 'title3',
            'description' => 'Description3',
            'image' => 'https://image.link3.com',
            'topic1' => 'topic1',
            'topic2' => 'topic2',
        ],
    ]

]);