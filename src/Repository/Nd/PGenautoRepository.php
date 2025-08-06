<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PGenauto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PGenauto>
 *
 * @method PGenauto|null find($id, $lockMode = null, $lockVersion = null)
 * @method PGenauto|null findOneBy(array $criteria, array $orderBy = null)
 * @method PGenauto[]    findAll()
 * @method PGenauto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PGenautoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PGenauto::class);
    }

//    /**
//     * @return PGenauto[] Returns an array of PGenauto objects
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

//    public function findOneBySomeField($value): ?PGenauto
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
