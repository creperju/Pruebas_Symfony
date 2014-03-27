<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // acme_question_homepage
        if (rtrim($pathinfo, '/') === '/question') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_question_homepage');
            }

            return array (  '_controller' => 'AcmeQuestionBundle:Question:index',  '_route' => 'acme_question_homepage',);
        }

        // acme_store_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_store_homepage')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::createAction',));
        }

        // acme_store_vista
        if (rtrim($pathinfo, '/') === '/mongodb') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_store_vista');
            }

            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::showAction',  '_route' => 'acme_store_vista',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
