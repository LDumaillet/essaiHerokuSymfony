<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Drapeau
{
  #[Assert\NotNull]
  #[Assert\Type('boolean')]
  private $flag;

  #[Assert\NotEqualTo(0)]
  #[Assert\LessThan(10000)]
  private $number;
}
