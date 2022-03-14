<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use symfony\component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
/**
* @Route("/accueil",name='show_index',methods={GET})
*/
public function index(){
    return $this->render('index.html.twig');
}
}