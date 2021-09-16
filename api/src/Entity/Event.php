<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
#[ApiResource(mercure: true)]
class Event
{
    /**
     * The entity ID
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column
     */
    #[Assert\NotBlank]
    public string $title;

    /**
     * @ORM\Column
     */
    #[Assert\NotBlank]
    public string $summary;

    /**
     * @ORM\Column
     */
    public string $description;

    /**
     * @ORM\Column
     */
    #[Assert\Url]
    public string $source;

    // TODO - add relations
    // Figures
    // Author
    // Timeline

    /**
     * @ORM\Column(type="datetime")
     */
    #[Assert\NotBlank]
    public DateTime $date;

    public function getId(): ?int
    {
        return $this->id;
    }
}
