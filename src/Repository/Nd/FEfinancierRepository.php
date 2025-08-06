<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEfinancier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEfinancier>
 *
 * @method FEfinancier|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEfinancier|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEfinancier[]    findAll()
 * @method FEfinancier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEfinancierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEfinancier::class);
    }

//    /**
//     * @return FEfinancier[] Returns an array of FEfinancier objects
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

//    public function findOneBySomeField($value): ?FEfinancier
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
