<?php

namespace App\Controller;

use App\Entity\SageSystem\Utilisateur;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UtilisateurListController extends AbstractController
{
    #[Route('/sage/utilisateurs', name: 'sage_utilisateurs', methods: ['GET'])]
    public function list(ManagerRegistry $doctrine): JsonResponse
    {
        $em = $doctrine->getManager('sage_system'); // Use SageSystem entity manager

        $users = $em->getRepository(Utilisateur::class)
            ->findBy([], null, 15); // get first 15 users

        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'nom' => $user->getNom(),
                'mot_passe' => $user->getMotPasse(),
            ];
        }

        return $this->json($data);
    }
}
