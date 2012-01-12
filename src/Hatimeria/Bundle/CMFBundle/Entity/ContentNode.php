<?php

namespace Hatimeria\Bundle\CMFBundle\Entity;

use Zenstruck\Bundle\ContentBundle\Entity\Node;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="content_node")
 */
class ContentNode extends Node
{
}