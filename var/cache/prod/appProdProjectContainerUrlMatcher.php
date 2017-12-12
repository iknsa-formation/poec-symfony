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

        if (0 === strpos($pathinfo, '/friend')) {
            // friend_index
            if (rtrim($pathinfo, '/') === '/friend') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_friend_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'friend_index');
                }

                return array (  '_controller' => 'intro\\CrudBundle\\Controller\\FriendController::indexAction',  '_route' => 'friend_index',);
            }
            not_friend_index:

            // friend_new
            if ($pathinfo === '/friend/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_friend_new;
                }

                return array (  '_controller' => 'intro\\CrudBundle\\Controller\\FriendController::newAction',  '_route' => 'friend_new',);
            }
            not_friend_new:

            // friend_show
            if (preg_match('#^/friend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_friend_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'friend_show')), array (  '_controller' => 'intro\\CrudBundle\\Controller\\FriendController::showAction',));
            }
            not_friend_show:

            // friend_edit
            if (preg_match('#^/friend/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_friend_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'friend_edit')), array (  '_controller' => 'intro\\CrudBundle\\Controller\\FriendController::editAction',));
            }
            not_friend_edit:

            // friend_delete
            if (preg_match('#^/friend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_friend_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'friend_delete')), array (  '_controller' => 'intro\\CrudBundle\\Controller\\FriendController::deleteAction',));
            }
            not_friend_delete:

        }

        // intro_crud_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'intro_crud_homepage');
            }

            return array (  '_controller' => 'intro\\CrudBundle\\Controller\\DefaultController::indexAction',  '_route' => 'intro_crud_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
