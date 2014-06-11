<?php
/**
 * Author: bduhr
 * Date: 11/06/14
 * Time: 14:58
 */

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('SdzBlogBundle:Blog:index.html.twig', ['nom' => 'ben']);
    }

    public function voirAction($id)
    {
        return new Response("Affichage de l'article d'id : ".$id.".");
    }

    public function voirSlugAction($slug, $annee, $format)
    {
        // Ici le contenu de la méthode
        return new Response("afficher article slug '".$slug."', créé en ".$annee." et au format ".$format.".");
    }
}
