<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Domain;

class UnableToCreateMeeting extends \Exception
{
    public static function invalidDateOfEnd()
    {
        return new self(
            sprintf(
                'Cannot create the meeting because the date of end is earlier than date of start'
            )
        );
    }
}
