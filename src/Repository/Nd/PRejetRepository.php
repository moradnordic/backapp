<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PRejet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRejet>
 *
 * @method PRejet|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRejet|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRejet[]    findAll()
 * @method PRejet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRejetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRejet::class);
    }

//    /**
//     * @return PRejet[] Returns an array of PRejet objects
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

//    public function findOneBySomeField($value): ?PRejet
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
