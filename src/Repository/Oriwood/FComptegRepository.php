<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCompteg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCompteg>
 *
 * @method FCompteg|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCompteg|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCompteg[]    findAll()
 * @method FCompteg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCompteg::class);
    }

//    /**
//     * @return FCompteg[] Returns an array of FCompteg objects
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

//    public function findOneBySomeField($value): ?FCompteg
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
