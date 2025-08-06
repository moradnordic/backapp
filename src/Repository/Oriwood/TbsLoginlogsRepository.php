<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsLoginlogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsLoginlogs>
 *
 * @method TbsLoginlogs|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsLoginlogs|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsLoginlogs[]    findAll()
 * @method TbsLoginlogs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsLoginlogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsLoginlogs::class);
    }

//    /**
//     * @return TbsLoginlogs[] Returns an array of TbsLoginlogs objects
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

//    public function findOneBySomeField($value): ?TbsLoginlogs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
