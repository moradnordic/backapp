<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEmodeler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEmodeler>
 *
 * @method FEmodeler|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEmodeler|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEmodeler[]    findAll()
 * @method FEmodeler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEmodelerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEmodeler::class);
    }

//    /**
//     * @return FEmodeler[] Returns an array of FEmodeler objects
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

//    public function findOneBySomeField($value): ?FEmodeler
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
