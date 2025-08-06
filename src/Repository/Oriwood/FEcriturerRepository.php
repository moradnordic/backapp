<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEcriturer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEcriturer>
 *
 * @method FEcriturer|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEcriturer|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEcriturer[]    findAll()
 * @method FEcriturer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEcriturerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEcriturer::class);
    }

//    /**
//     * @return FEcriturer[] Returns an array of FEcriturer objects
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

//    public function findOneBySomeField($value): ?FEcriturer
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
