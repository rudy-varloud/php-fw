<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Infrastructure\Repositories;

use Metinet\Domain\Conferences\Conference;
use Metinet\Domain\Conferences\ConferenceNotFound;
use Metinet\Domain\Conferences\ConferenceRepository;

class InMemoryAccountRepository implements AccountRepository
{
    private $account = [];

    public function save(Account $account): void
    {
        $this->account[$account->getId()] = $account;
    }

    public function get($username): Account
    {
        if (!isset($this->account[$username])) {

            throw new AccountNotFound($username);
        }

        return $this->account[$username];
    }
}
