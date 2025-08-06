<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrSociete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrSociete>
 *
 * @method LrSociete|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrSociete|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrSociete[]    findAll()
 * @method LrSociete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrSocieteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrSociete::class);
    }

//    /**
//     * @return LrSociete[] Returns an array of LrSociete objects
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

//    public function findOneBySomeField($value): ?LrSociete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
