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
class Figure
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
    public string $name;

    /**
     * @ORM\Column
     */
    public string $description;

    /**
     * @ORM\Column
     */
    #[Assert\Url]
    public string $icon;

    /**
     * @ORM\Column
     */
    #[Assert\Url]
    public string $source;

    /**
     * @ORM\Column(type="datetime")
     */
    public DateTime $date_birth;

    /**
     * @ORM\Column(type="datetime")
     */
    public DateTime $date_death;

    public function getId(): ?int
    {
        return $this->id;
    }
}
