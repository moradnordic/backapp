<?php

namespace App\Controller;

use App\Service\AccessReader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class AccessTestController extends AbstractController
{
    #[Route('/access/test', name: 'access_test')]
    public function index(AccessReader $accessReader): Response
    {
        $data = $accessReader->getCaisseTables();
dd($data);
        return $this->json($data); // ou render() selon ton besoin
    }
}
