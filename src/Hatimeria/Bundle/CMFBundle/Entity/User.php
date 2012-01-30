<?php

namespace Hatimeria\Bundle\CMFBundle\Entity;

use Hatimeria\AdminBundle\Entity\User as HatimeriaUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends HatimeriaUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}