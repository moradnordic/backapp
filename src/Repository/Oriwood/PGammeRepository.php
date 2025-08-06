<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PGamme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PGamme>
 *
 * @method PGamme|null find($id, $lockMode = null, $lockVersion = null)
 * @method PGamme|null findOneBy(array $criteria, array $orderBy = null)
 * @method PGamme[]    findAll()
 * @method PGamme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PGammeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PGamme::class);
    }

//    /**
//     * @return PGamme[] Returns an array of PGamme objects
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

//    public function findOneBySomeField($value): ?PGamme
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
