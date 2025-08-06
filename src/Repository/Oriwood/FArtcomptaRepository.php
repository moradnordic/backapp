<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FArtcompta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtcompta>
 *
 * @method FArtcompta|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtcompta|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtcompta[]    findAll()
 * @method FArtcompta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtcomptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtcompta::class);
    }

//    /**
//     * @return FArtcompta[] Returns an array of FArtcompta objects
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

//    public function findOneBySomeField($value): ?FArtcompta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
