<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrCredoc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrCredoc>
 *
 * @method LrCredoc|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrCredoc|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrCredoc[]    findAll()
 * @method LrCredoc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrCredocRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrCredoc::class);
    }

//    /**
//     * @return LrCredoc[] Returns an array of LrCredoc objects
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

//    public function findOneBySomeField($value): ?LrCredoc
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
