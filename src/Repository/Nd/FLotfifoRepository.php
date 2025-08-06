<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FLotfifo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FLotfifo>
 *
 * @method FLotfifo|null find($id, $lockMode = null, $lockVersion = null)
 * @method FLotfifo|null findOneBy(array $criteria, array $orderBy = null)
 * @method FLotfifo[]    findAll()
 * @method FLotfifo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FLotfifoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FLotfifo::class);
    }

//    /**
//     * @return FLotfifo[] Returns an array of FLotfifo objects
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

//    public function findOneBySomeField($value): ?FLotfifo
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
