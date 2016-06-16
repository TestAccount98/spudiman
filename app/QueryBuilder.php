<?php

use Symfony\Component\Yaml\Yaml;
use Illuminate\Database\Capsule\Manager as Capsule;


$config = Yaml::parse(file_get_contents(__CONFIG__ . '/db.yaml'));

$capsule = new Capsule();

$capsule->addConnection($config);

$capsule->setAsGlobal();