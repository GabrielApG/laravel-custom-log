<?php

namespace Log;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Class CustomWriteLogs
 * @package Log
 */
trait CustomWriteLogs
{
    /**
     * Write Log
     *
     * @param string $nameFileLog
     * @param $log
     */
    public function writeLog($nameFileLog = 'customLog', $log)
    {
        $orderLog = new Logger($nameFileLog);
        $orderLog->pushHandler(new StreamHandler(storage_path('logs/' . $nameFileLog . '.log')), Logger::INFO);
        $orderLog->info($nameFileLog, $log);
    }
}