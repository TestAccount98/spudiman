<?php

namespace App;

use App\Task;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Database\Capsule\Manager as Capsule;

class TaskMaster
{
    private static $config = [];
    private static $tasks = [];

    public static function addTask($dir, $regexp)
    {
        Capsule::table('tasks')->insert([
            'dir' => $dir,
            'reg' => $regexp
        ]);
    }
    
    public static function runTasks()
    {
        self::setupConfig();
        self::getTasksList();
    }

    private static function setupConfig()
    {
        $path = __CONFIG__ . '/app.yaml';
        self::$config = Yaml::parse(file_get_contents($path));
    }
    
    private static function getTasksList()
    {
        self::$tasks = Capsule::table('tasks')->select('dir', 'reg')->get();
    }
}