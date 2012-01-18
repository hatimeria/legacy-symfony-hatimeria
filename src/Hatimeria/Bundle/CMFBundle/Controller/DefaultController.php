<?php

namespace Hatimeria\Bundle\CMFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Default Controller
 *
 * @author Michal Wujas
 */
class DefaultController extends Controller
{
    /**
     * Framework presentation
     * 
     * @Template 
     */
    public function indexAction() 
    {
        return array();
    }
}