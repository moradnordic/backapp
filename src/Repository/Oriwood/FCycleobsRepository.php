<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCycleobs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCycleobs>
 *
 * @method FCycleobs|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCycleobs|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCycleobs[]    findAll()
 * @method FCycleobs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCycleobsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCycleobs::class);
    }

//    /**
//     * @return FCycleobs[] Returns an array of FCycleobs objects
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

//    public function findOneBySomeField($value): ?FCycleobs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
