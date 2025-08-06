<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PInterrotar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterrotar>
 *
 * @method PInterrotar|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterrotar|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterrotar[]    findAll()
 * @method PInterrotar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterrotarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterrotar::class);
    }

//    /**
//     * @return PInterrotar[] Returns an array of PInterrotar objects
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

//    public function findOneBySomeField($value): ?PInterrotar
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
