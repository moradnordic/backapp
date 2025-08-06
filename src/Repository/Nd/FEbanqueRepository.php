<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEbanque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEbanque>
 *
 * @method FEbanque|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEbanque|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEbanque[]    findAll()
 * @method FEbanque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEbanqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEbanque::class);
    }

//    /**
//     * @return FEbanque[] Returns an array of FEbanque objects
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

//    public function findOneBySomeField($value): ?FEbanque
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
