<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Domain;

class InvalidDateOfMeeting extends \Exception
{
    public static function mustNotBeInThePast(): self
    {
        return new self('Date for the meeting can\'t be in the past');
    }
}
