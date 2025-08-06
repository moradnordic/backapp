<?php

namespace App\Repository\Nd;

use App\Entity\Nd\POrgatiers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<POrgatiers>
 *
 * @method POrgatiers|null find($id, $lockMode = null, $lockVersion = null)
 * @method POrgatiers|null findOneBy(array $criteria, array $orderBy = null)
 * @method POrgatiers[]    findAll()
 * @method POrgatiers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class POrgatiersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, POrgatiers::class);
    }

//    /**
//     * @return POrgatiers[] Returns an array of POrgatiers objects
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

//    public function findOneBySomeField($value): ?POrgatiers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
