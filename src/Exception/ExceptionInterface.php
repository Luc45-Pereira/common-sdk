<?php

/*
 * This file is part of gpupo/common-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\CommonSdk\Exception;

interface ExceptionInterface
{
    public function toLog();

    public function setMessage($string);

    public function addMessagePrefix($string);
}
