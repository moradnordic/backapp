<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PSoucheinterne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PSoucheinterne>
 *
 * @method PSoucheinterne|null find($id, $lockMode = null, $lockVersion = null)
 * @method PSoucheinterne|null findOneBy(array $criteria, array $orderBy = null)
 * @method PSoucheinterne[]    findAll()
 * @method PSoucheinterne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PSoucheinterneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PSoucheinterne::class);
    }

//    /**
//     * @return PSoucheinterne[] Returns an array of PSoucheinterne objects
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

//    public function findOneBySomeField($value): ?PSoucheinterne
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
