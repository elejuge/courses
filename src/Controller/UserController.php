<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{

    public function index()
    {
        $name = "Edouard";

        return $this->render('user/user.html.twig', [
            'name' => $name,
        ]);
    }
}