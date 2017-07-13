<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_home
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',  '_route' => 'admin_home',);
            }

            // add_content
            if ($pathinfo === '/admin/add_content') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::addContentAction',  '_route' => 'add_content',);
            }

            // save_content
            if ($pathinfo === '/admin/save_content') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::saveContentAction',  '_route' => 'save_content',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
