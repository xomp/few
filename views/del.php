<?php

$id = $_GET['id'];

$event = new Event();
$event->del($id);
