<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCaissetotal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCaissetotal>
 *
 * @method FCaissetotal|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCaissetotal|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCaissetotal[]    findAll()
 * @method FCaissetotal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCaissetotalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCaissetotal::class);
    }

//    /**
//     * @return FCaissetotal[] Returns an array of FCaissetotal objects
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

//    public function findOneBySomeField($value): ?FCaissetotal
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
