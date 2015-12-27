<?php

namespace ClienteBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClienteBundle:Default:index.html.twig');
    }

    public function comprarAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('ClienteBundle:Producto')->findAll();

        $user = $this->getUser();
        return $this->render('ClienteBundle:Default:inde.html.twig', array(
            'user' => $user,
            'productos' => $productos
        ));
    }
}
