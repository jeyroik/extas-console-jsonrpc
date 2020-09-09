<?php
namespace extas\components\plugins\commands;

use extas\commands\DefaultCommand;
use extas\commands\JsonrpcCommand;
use extas\components\plugins\Plugin;
use extas\interfaces\stages\IStageInstallerCommand;

/**
 * Class CommandJsonRpc
 * @package extas\components\plugins\commands
 */
class CommandJsonRpc extends Plugin implements IStageInstallerCommand
{
    /**
     * @return DefaultCommand
     */
    public function __invoke(): DefaultCommand
    {
        return new JsonrpcCommand();
    }
}
