<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Reglement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reglement>
 *
 * @method Reglement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reglement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reglement[]    findAll()
 * @method Reglement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReglementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reglement::class);
    }

//    /**
//     * @return Reglement[] Returns an array of Reglement objects
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

//    public function findOneBySomeField($value): ?Reglement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
