<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Cbregfile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbregfile>
 *
 * @method Cbregfile|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbregfile|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbregfile[]    findAll()
 * @method Cbregfile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbregfileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbregfile::class);
    }

//    /**
//     * @return Cbregfile[] Returns an array of Cbregfile objects
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

//    public function findOneBySomeField($value): ?Cbregfile
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
