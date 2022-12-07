<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CasinosController extends AbstractController
{

    #[Route('/casinos', name: 'casinos')]
    public function index(): Response
    {
        $filedata = file_get_contents(__DIR__ . '../.../../../../assets/json/data.json');
        $casinos = json_decode($filedata);
        return $this->render('index.html.twig', ['casinos' => $casinos]);
    }

    public function searcCasinos ( ){

    }
}
