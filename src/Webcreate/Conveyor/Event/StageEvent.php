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

use Symfony\Component\EventDispatcher\Event;
use Webcreate\Conveyor\Context;
use Webcreate\Conveyor\Stage\AbstractStage;

class StageEvent extends Event
{
    protected $stage;
    protected $stageName;
    protected $context;
    protected $data;

    /**
     * Constructor.
     *
     * @param string        $stageName
     * @param AbstractStage $stage
     * @param Context       $context
     * @param mixed         $data      depending on the event some data can be given
     */
    public function __construct($stageName, $stage, $context, $data = null)
    {
        $this->stageName = $stageName;
        $this->stage     = $stage;
        $this->context   = $context;
        $this->data      = $data;
    }

    /**
     * @return AbstractStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @return string
     */
    public function getStageName()
    {
        return $this->stageName;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
        return $this->context;
    }

    public function getData()
    {
        return $this->data;
    }
}
