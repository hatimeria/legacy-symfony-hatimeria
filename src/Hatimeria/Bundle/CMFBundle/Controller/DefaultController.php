<?php

namespace Hatimeria\Bundle\CMFBundle\Controller;

use Hatimeria\ExtJSBundle\Response\Failure;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Hatimeria\ExtJSBundle\Response\Success;

class DefaultController extends Controller
{
    
    public function loginAction()
    {
        // @todo check if it is ajax request, if not show login form
        
        // code from fos user security controller
        $request = $this->container->get('request');
        /* @var $request \Symfony\Component\HttpFoundation\Request */
        $session = $request->getSession();
        /* @var $session \Symfony\Component\HttpFoundation\Session */

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        if ($error) {
            // TODO: this is a potential security risk (see http://trac.symfony-project.org/ticket/9523)
            $error = $error->getMessage();
        }
        
        $failure = new Failure($error);
        
        $content = json_encode($failure->toArray());
        
        return new Response($content);
    }
    
    public function afterLoginAction()
    {
        $success = new Success();
        
        $content = json_encode($success->toArray());
        
        return new Response($content);
    }
}
