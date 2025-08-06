<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PAboint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAboint>
 *
 * @method PAboint|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAboint|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAboint[]    findAll()
 * @method PAboint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAbointRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAboint::class);
    }

//    /**
//     * @return PAboint[] Returns an array of PAboint objects
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

//    public function findOneBySomeField($value): ?PAboint
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
