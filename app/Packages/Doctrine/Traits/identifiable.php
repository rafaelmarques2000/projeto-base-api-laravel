<?php

namespace App\Packages\Doctrine\Traits;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;


trait identifiable
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="guid")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidGenerator::class)
     */

    private string $id;

    public function getId(): string
    {
        return $this->id;
    }


}
