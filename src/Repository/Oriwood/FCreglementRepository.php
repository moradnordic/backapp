<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCreglement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCreglement>
 *
 * @method FCreglement|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCreglement|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCreglement[]    findAll()
 * @method FCreglement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCreglementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCreglement::class);
    }

//    /**
//     * @return FCreglement[] Returns an array of FCreglement objects
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

//    public function findOneBySomeField($value): ?FCreglement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
