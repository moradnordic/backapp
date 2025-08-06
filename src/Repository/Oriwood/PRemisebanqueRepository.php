<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PRemisebanque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRemisebanque>
 *
 * @method PRemisebanque|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRemisebanque|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRemisebanque[]    findAll()
 * @method PRemisebanque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRemisebanqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRemisebanque::class);
    }

//    /**
//     * @return PRemisebanque[] Returns an array of PRemisebanque objects
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

//    public function findOneBySomeField($value): ?PRemisebanque
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
