<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-11-4
 * Time: 下午2:14
 */

namespace App\Task;


use EasySwoole\EasySwoole\Crontab\AbstractCronTask;

class CrontabTask extends AbstractCronTask
{

    public static function getRule(): string
    {
        // TODO: Implement getRule() method.
        return '*/1 * * * *';
    }

    public static function getTaskName(): string
    {
        // TODO: Implement getTaskName() method.
        return 'crontabTask';
    }

    function run(int $taskId, int $workerIndex)
    {
        // TODO: Implement run() method.
        var_dump(date('Y-m-d H:i:s'));
    }

    function onException(\Throwable $throwable, int $taskId, int $workerIndex)
    {
        // TODO: Implement onException() method.
        return $throwable->getMessage();
    }
}