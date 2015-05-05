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

        // gsb_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_homepage')), array (  '_controller' => 'Ahe\\gsbBundle\\Controller\\DefaultController::indexAction',));
        }

        // gsb_liste_frais
        if ($pathinfo === '/liste_frais') {
            return array (  '_controller' => 'Ahe\\gsbBundle\\Controller\\FraisVisiteursController::listeFraisAction',  '_route' => 'gsb_liste_frais',);
        }

        // gsb_saisie_frais
        if ($pathinfo === '/saisie_frais') {
            return array (  '_controller' => 'Ahe\\gsbBundle\\Controller\\FraisVisiteursController::saisieFraisAction',  '_route' => 'gsb_saisie_frais',);
        }

        // gsb_visiteurs_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'Ahe\\gsbBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'gsb_visiteurs_connexion',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
