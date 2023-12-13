<?php
// src/Controller/BlogController.php
namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; // this thing broke the code
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
{
    public function list(): Response
    {
        return new Response(
            '<html><body>Hashnode Blog: </body></html>'
        );
    }
}