<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FBanquet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FBanquet>
 *
 * @method FBanquet|null find($id, $lockMode = null, $lockVersion = null)
 * @method FBanquet|null findOneBy(array $criteria, array $orderBy = null)
 * @method FBanquet[]    findAll()
 * @method FBanquet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FBanquetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FBanquet::class);
    }

//    /**
//     * @return FBanquet[] Returns an array of FBanquet objects
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

//    public function findOneBySomeField($value): ?FBanquet
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
