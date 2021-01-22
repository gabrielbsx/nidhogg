<?php

define('INGAME', 'C:/New WYD/');
define('DBSRV', 'DBSrv/');
define('COMMON', 'Common/');
define('DROPLIST', 'MobDropList.txt');
define('RANKING', INGAME . COMMON . 'Ranking.txt');
define('RANKCITY', INGAME . COMMON . '/ChampionCity_00_00.csv');
$db = new mysqli('localhost', 'root', '', 'wydtok3');
if ($db) {
    $fp = fopen(RANKING, 'rb');
    $ranking = trim(fread($fp, filesize(RANKING)));
    $data = date("Y-m-d H:i:s");

    $stmt = $db->prepare('TRUNCATE TABLE ranking');
    $stmt->execute();

    $stmt = $db->prepare('TRUNCATE TABLE rankcity');
    $stmt->execute();

    $stmt = $db->prepare('INSERT INTO ranking(`id`, `nick`, `level`, `evolution`, `class`, `kingdom`, `guildid`, `created_at`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)');

    foreach (explode("\n", $ranking) as $key => $value) {
        $value = explode(',', $value);
        $value = array_map('trim', $value);
        
        //0 none
        $nick = $value[1];
        $level = intval($value[2]);
        $evolution = intval($value[3]);
        //4 points/level
        $class = intval($value[5]);
        $kingdom = intval($value[6]);
        $guildid = intval($value[7]);
        $stmt->bind_param('siiiiis', $nick, $level, $evolution, $class, $kingdom, $guildid, $data);
        $stmt->execute();
    }

    fclose($fp);

    $stmt = $db->prepare('INSERT INTO rankcity(id, city, guild, guildmark, created_at) VALUES (NULL, ?, ?, ?, ?)');

    $fp = fopen(RANKCITY, 'rb');
    $rankcity = trim(fread($fp, filesize(RANKCITY)));

    foreach (explode("\n", $rankcity) as $key => $value) {
        $value = explode(',', $value);
        $value = array_map('trim', $value);

        $stmt->bind_param('ssss', $value[0], $value[1], $value[2], $data);
        $stmt->execute();
    }
} else {
    exit();
}
