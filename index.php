<?php
// json only

require 'connect.php';

$query = "SELECT * FROM yes";

$datas =
    [
        'info' => [
            'name' => 'Aliandra Freimann',
            'description' => 'Books'
        ],
    ];

if ($result = $mysqli->query($query)) {
    while ($data = $result->fetch_array()) {
        $datas['data'][] =
            [
                'title' => $data['title'],
                'image' => $data['image'],
                'description' => $data['description'],
                'topic1'=> $data['author'],
                'topic2' => $data['year']
            ];
    }
    $result->close();
}

echo json_encode($datas);