<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FArtstock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtstock>
 *
 * @method FArtstock|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtstock|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtstock[]    findAll()
 * @method FArtstock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtstockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtstock::class);
    }

//    /**
//     * @return FArtstock[] Returns an array of FArtstock objects
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

//    public function findOneBySomeField($value): ?FArtstock
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
