<?php

namespace Hatimeria\Bundle\CMFBundle\DataFixtures\ORM;

use Hatimeria\Bundle\CMFBundle\Entity\User;
use Hatimeria\Bundle\CMFBundle\Entity\CmsPage;
use Zenstruck\Bundle\CMSBundle\Entity\Path;

class BasicData extends HatimeriaFixtures
{
    function getOrder()
    {
        return 1;
    }

    /**
     * @param \Doctrine\ORM\EntityManager $manager
     * @return void
     */
    public function load($manager)
    {
        $this->manager = $manager;
        
        $this->loadUsers();
        $this->loadPages();
        
        $manager->flush();
    }
    
    private function loadPages()
    {
        $node = new CmsPage();
        $node->setTitle('Example');
        $node->setUser($this->admin);
        $node->setPrimaryPath(new Path('example'));
        $node->setBody("Example content");
        $node->publish();
        $this->manager->persist($node);        
    }
    
    private function loadUsers()
    {
        $user = new User;
        $user->setEmail($this->container->getParameter("my_email"));
        $user->setPlainPassword("hatimeria");
        $user->addRole("ROLE_ADMIN");
        $user->setEnabled(true);
        $this->admin = $user;
        $this->container->get("fos_user.user_manager")->updateUser($user);
    }
    
}
