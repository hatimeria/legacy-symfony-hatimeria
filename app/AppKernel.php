<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new FOS\UserBundle\FOSUserBundle,
            new FOS\FacebookBundle\FOSFacebookBundle,
            new FOS\JsRoutingBundle\FOSJsRoutingBundle,
            new Bazinga\ExposeTranslationBundle\BazingaExposeTranslationBundle(),
            new Zenstruck\Bundle\ContentBundle\ZenstruckContentBundle,
            new Symfony\Bundle\DoctrineFixturesBundle\DoctrineFixturesBundle,
            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
            new Hatimeria\ExtJSBundle\HatimeriaExtJSBundle,
            new Hatimeria\AdminBundle\HatimeriaAdminBundle(),
            new Hatimeria\Bundle\CMFBundle\HatimeriaCMFBundle(),
            new \Hatimeria\FrameworkBundle\HatimeriaFrameworkBundle()
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            # disabled distribution bundle to avoid fatal error because of missing parameters.ini file
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
