<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEcriturecmedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEcriturecmedia>
 *
 * @method FEcriturecmedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEcriturecmedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEcriturecmedia[]    findAll()
 * @method FEcriturecmedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEcriturecmediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEcriturecmedia::class);
    }

//    /**
//     * @return FEcriturecmedia[] Returns an array of FEcriturecmedia objects
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

//    public function findOneBySomeField($value): ?FEcriturecmedia
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
