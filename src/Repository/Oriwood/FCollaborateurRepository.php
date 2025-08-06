<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCollaborateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCollaborateur>
 *
 * @method FCollaborateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCollaborateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCollaborateur[]    findAll()
 * @method FCollaborateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCollaborateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCollaborateur::class);
    }

//    /**
//     * @return FCollaborateur[] Returns an array of FCollaborateur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FCollaborateur
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
