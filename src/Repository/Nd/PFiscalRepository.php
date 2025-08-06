<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PFiscal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PFiscal>
 *
 * @method PFiscal|null find($id, $lockMode = null, $lockVersion = null)
 * @method PFiscal|null findOneBy(array $criteria, array $orderBy = null)
 * @method PFiscal[]    findAll()
 * @method PFiscal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PFiscalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PFiscal::class);
    }

//    /**
//     * @return PFiscal[] Returns an array of PFiscal objects
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

//    public function findOneBySomeField($value): ?PFiscal
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
