<?php

namespace Claroline\CoreBundle\Tests\stub\Entity\ValidHierarchy;

use Doctrine\ORM\Mapping as ORM;
use Claroline\CoreBundle\Annotation\ORM as ORMExt;

/**
 * @ORM\Entity
 * @ORM\Table(name="claro_test_secondchild")
 * @ORMExt\Extendable(discriminatorColumn="discr")
 */
class SecondChild extends Ancestor
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondChildField;

    public function getSecondChildField()
    {
        return $this->secondChildField;
    }

    public function setSecondChildField($value)
    {
        $this->secondChildField = $value;
    }
}