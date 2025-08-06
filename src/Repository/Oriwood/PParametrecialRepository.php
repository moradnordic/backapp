<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PParametrecial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PParametrecial>
 *
 * @method PParametrecial|null find($id, $lockMode = null, $lockVersion = null)
 * @method PParametrecial|null findOneBy(array $criteria, array $orderBy = null)
 * @method PParametrecial[]    findAll()
 * @method PParametrecial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PParametrecialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PParametrecial::class);
    }

//    /**
//     * @return PParametrecial[] Returns an array of PParametrecial objects
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

//    public function findOneBySomeField($value): ?PParametrecial
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
