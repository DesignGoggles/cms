<?php
# Install script
$db = new SQLite3('core/data/core.db');
$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO foo (bar) VALUES ('This is a test')");
$result = $db->query('SELECT bar FROM foo');
var_dump($result->fetchArray());