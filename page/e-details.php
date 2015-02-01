<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 26/1/14
 * Time: 12:10 PM
 */


$nfs = [
    "img"=>'../img/nfs.jpg',

    "type" => 'Gaming Events',

    "title"=>'NFS : Most Wanted',

    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate dolor
                    est modi, repellendus reprehenderit unde veniam! Expedita fugit, nemo. Adipisci at
                    commodi explicabo fugit itaque iusto labore libero vitae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate dolor
                    est modi, repellendus reprehenderit unde veniam! Expedita fugit, nemo.",

    "participants" => "Max Participants: 1"
];

$cs = [
    "img"=>'../img/cs.jpg',

    "type" => 'Gaming Events',

    "title"=>'Counter Strike 1.6',

    "content" => "Amet, consectetur adipisicing elit. Consectetur cupiditate dolor
                    est modi, repellendus reprehenderit unde veniam! Expedita fugit, nemo. Adipisci at
                    commodi explicabo fugit itaque iusto labore libero vitae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate dolor
                    est modi, repellendus reprehenderit unde veniam! Expedita fugit, nemo.",

    "participants" => "Max Participants: 2"
];

$fifa = [
    "img"=>'../img/fifa.jpg',

    "type" => 'Gaming Events',

    "title"=>'FIFA 11',

    "content" => "Consectetur adipisicing elit. Consectetur cupiditate dolor
                    est modi, repellendus reprehenderit unde veniam! Expedita fugit, nemo. Adipisci at
                    commodi explicabo fugit itaque iusto labore libero vitae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate dolor
                    est modi, repellendus reprehenderit unde veniam! Expedita fugit, nemo.",

    "participants" => "Max Participants: 1.3"
];

$events_container = ["nfs"=> $nfs ,"cs"=> $cs,"fifa"=> $fifa];


if(isset($_REQUEST['event']) && !empty($_REQUEST['event'])){
    $event = $_REQUEST['event'];
    echo json_encode($events_container[$event]);
}
