<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */
namespace Metinet\Domain;

class DateOfMeeting
{
    private $dateOfMeeting;

    public static function fromString(string $dateOfMeeting): self
    {
        return new self($dateOfMeeting);
    }

    public function toAge($dateOfMeeting): int
    {
        return (new \DateTimeImmutable('now'))->diff($this->$dateOfMeeting)->y;
    }

    private function __construct(string $dateOfMeeting)
    {
        $dateOfMeetingAsDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateOfMeeting));
        if ($dateOfMeetingAsDateTime < new \DateTimeImmutable('now')) {

            throw InvalidDateOfMeeting::mustNotBeInThePast();
        }

        $this->dateOfBirth = $dateOfMeetingAsDateTime;
    }
}