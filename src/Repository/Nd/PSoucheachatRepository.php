<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PSoucheachat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PSoucheachat>
 *
 * @method PSoucheachat|null find($id, $lockMode = null, $lockVersion = null)
 * @method PSoucheachat|null findOneBy(array $criteria, array $orderBy = null)
 * @method PSoucheachat[]    findAll()
 * @method PSoucheachat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PSoucheachatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PSoucheachat::class);
    }

//    /**
//     * @return PSoucheachat[] Returns an array of PSoucheachat objects
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

//    public function findOneBySomeField($value): ?PSoucheachat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
