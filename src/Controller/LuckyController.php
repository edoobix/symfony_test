<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

    #[Route("/lucky/number/{name?}")]
    public function number($name): Response
    {
        $number = random_int(0, 2);


        if($number == 1 && $name != null){
            return new Response(
                "<html><body>You are WINNER, {$name}</body></html>"
            );
        } else {
            return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
            );    
        }
    }
}