<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Domain\Account;

class AccountNotFound extends \Exception
{
    public function __construct($username)
    {
        parent::__construct(sprintf('Account with username "%s" not found.', $username));
    }
}
