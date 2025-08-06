<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEcriturecregul;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEcriturecregul>
 *
 * @method FEcriturecregul|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEcriturecregul|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEcriturecregul[]    findAll()
 * @method FEcriturecregul[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEcriturecregulRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEcriturecregul::class);
    }

//    /**
//     * @return FEcriturecregul[] Returns an array of FEcriturecregul objects
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

//    public function findOneBySomeField($value): ?FEcriturecregul
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
