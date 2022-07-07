<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{
    /**
     * Page d'acceuil 
     * 
     * @route('/home', namespace='acceuil')
     */
    public function home(){
        return new Response(" Bienvenue! ");
    }
    /**
     * Pag d'acces a un article 
     * 
     * @Route('/article/{articleId}', name='show-article')
     */
    public function show($articleId){
return new Response(" Content! ");
    }
}