<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCyclecons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCyclecons>
 *
 * @method FCyclecons|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCyclecons|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCyclecons[]    findAll()
 * @method FCyclecons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCycleconsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCyclecons::class);
    }

//    /**
//     * @return FCyclecons[] Returns an array of FCyclecons objects
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

//    public function findOneBySomeField($value): ?FCyclecons
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
