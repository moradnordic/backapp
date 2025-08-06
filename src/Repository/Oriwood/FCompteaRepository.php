<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FComptea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptea>
 *
 * @method FComptea|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptea|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptea[]    findAll()
 * @method FComptea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCompteaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptea::class);
    }

//    /**
//     * @return FComptea[] Returns an array of FComptea objects
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

//    public function findOneBySomeField($value): ?FComptea
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
