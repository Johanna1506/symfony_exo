<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Accueil extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueilShow(){

        return $this->render('accueil.html.twig', [
            'articles' => Article::$articles]);
    }

    /**
     * @Route("/", name="header")
     */
    public function headerShow(){
        return $this->render('_header.html.twig');
    }
    /**
     * @Route("/", name="footer")
     */
    public function footerShow(){
        return $this->render('_footer.html.twig');
    }
    /**
     * @Route("/", name="sideBar")
     */
    public function sideShow(){
        return $this->render('_sideBar.html.twig');
    }

}
