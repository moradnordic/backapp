<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PEchangecial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PEchangecial>
 *
 * @method PEchangecial|null find($id, $lockMode = null, $lockVersion = null)
 * @method PEchangecial|null findOneBy(array $criteria, array $orderBy = null)
 * @method PEchangecial[]    findAll()
 * @method PEchangecial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PEchangecialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PEchangecial::class);
    }

//    /**
//     * @return PEchangecial[] Returns an array of PEchangecial objects
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

//    public function findOneBySomeField($value): ?PEchangecial
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
