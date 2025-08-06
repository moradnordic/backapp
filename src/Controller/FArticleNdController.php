<?php

namespace App\Controller;

use App\Entity\Nd\FArticle;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FArticleNdController extends AbstractController
{
    #[Route('/nd/farticle/list', name: 'nd_farticle_list', methods: ['GET'])]
    public function list(ManagerRegistry $doctrine): JsonResponse
    {
        $em = $doctrine->getManager('nd'); // specify ND entity manager

        $articles = $em->getRepository(FArticle::class)
            ->createQueryBuilder('f')
            ->select('f.arRef', 'f.arDesign')
            ->setMaxResults(15)
            ->getQuery()
            ->getArrayResult();

        return $this->json($articles);
    }
}
