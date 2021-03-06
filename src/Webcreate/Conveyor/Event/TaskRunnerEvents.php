<?php

/*
 * This file is part of the Conveyor package.
 *
 * (c) Jeroen Fiege <jeroen@webcreate.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webcreate\Conveyor\Event;

final class TaskRunnerEvents
{
    const TASKRUNNER_PRE_EXECUTE_TASK   = 'taskrunner.preTask';
    const TASKRUNNER_POST_EXECUTE_TASK  = 'taskrunner.postTask';
}
