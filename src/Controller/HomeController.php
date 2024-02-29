<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route("/", name:"home.index", methods:['Get'])]
    public function index() : Response
    {
        // echo "Hello World!";
        return $this->render('home.html.twig');
    }
}
?>
