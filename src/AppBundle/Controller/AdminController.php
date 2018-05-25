<?php
// src/AppBundle/Controller/AdminController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    
    /**
    * @Route("/", name="home")
    **/
    public function showIndex()
    {
        
         return $this->render('admin/index.html.twig');
    
    }

    /**
     * @Route("/verblijf", name="verblijf")
     **/
    public function verblijfIndex()
    {

        return $this->render('admin/verblijf.html.twig');

    }

    /**
     * @Route("/faciliteiten", name="faciliteiten")
     **/
    public function faciliteitenIndex()
    {

        return $this->render('admin/faciliteiten.html.twig');

    }

    /**
     * @Route("/contact", name="contact")
     **/
    public function contactnIndex()
    {

        return $this->render('admin/contact.html.twig');

    }


}