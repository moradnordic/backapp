<?php

namespace App\Controller;

use App\Entity\Nd\FArticle;
use App\Entity\Nd\FFamille;
use Doctrine\DBAL\Logging\EchoSQLLogger;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class AnalyseController extends AbstractController
{
    #[Route('/analyse/{id}', name: 'app_analyse')]
    public function index(string $id,ManagerRegistry $doctrine): JsonResponse
    {
        $em = $doctrine->getManager('nd'); // specify ND entity manager

//        $articles = $em->getRepository(FArticle::class)->findAll();
//        foreach ($articles as $article) {
//
//            $famille = $em->getRepository(FFamille::class)
//                ->findOneBy(['faCodefamille' => $article->getFaCodefamille()]);
//            dump($famille);
//        }

        $conn = $em->getConnection();

        $sql = "SELECT TOP 10 * FROM MMM_RISQUE_ENCOURS_CLIENTS1  where CO_No = '$id'";
        $result = $conn->fetchAllAssociative($sql);

        return $this->json($result);

        return $this->json([
            'message' => 'Welcome to your new controller!',
        ]);
    }
}
