<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblreleveFrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblreleveFrs>
 *
 * @method TblreleveFrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblreleveFrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblreleveFrs[]    findAll()
 * @method TblreleveFrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblreleveFrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblreleveFrs::class);
    }

//    /**
//     * @return TblreleveFrs[] Returns an array of TblreleveFrs objects
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

//    public function findOneBySomeField($value): ?TblreleveFrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
