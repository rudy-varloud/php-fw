<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */
namespace Metinet\Domain;

class DateDebut
{
    private $dateDebut;

    public static function fromString(string $dateDebut): self
    {
        return new self($dateDebut);
    }

    public function toAge($dateDebut): int
    {
        return (new \DateTimeImmutable('now'))->diff($this->$dateDebut)->y;
    }

    private function __construct(string $dateDebut)
    {
        $dateDebutAsDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateDebut));
        if ($dateDebutAsDateTime < new \DateTimeImmutable('now')) {

            throw InvaliddateDebut::mustNotBeInThePast();
        }

        $this->dateDebut = $dateDebutAsDateTime;
    }
}