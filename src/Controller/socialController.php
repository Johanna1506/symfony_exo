<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class socialController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactShow(){
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profilShow(){

        return $this->render('profil.html.twig');
    }
}