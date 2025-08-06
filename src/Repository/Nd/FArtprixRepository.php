<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FArtprix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtprix>
 *
 * @method FArtprix|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtprix|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtprix[]    findAll()
 * @method FArtprix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtprixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtprix::class);
    }

//    /**
//     * @return FArtprix[] Returns an array of FArtprix objects
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

//    public function findOneBySomeField($value): ?FArtprix
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
