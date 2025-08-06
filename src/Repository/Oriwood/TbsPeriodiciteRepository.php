<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsPeriodicite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsPeriodicite>
 *
 * @method TbsPeriodicite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsPeriodicite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsPeriodicite[]    findAll()
 * @method TbsPeriodicite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsPeriodiciteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsPeriodicite::class);
    }

//    /**
//     * @return TbsPeriodicite[] Returns an array of TbsPeriodicite objects
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

//    public function findOneBySomeField($value): ?TbsPeriodicite
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
