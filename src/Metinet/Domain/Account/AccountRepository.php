<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Domain\Account;

interface AccountRepository
{
    public function save(Account $account): void;
    public function get($id): Account;
}