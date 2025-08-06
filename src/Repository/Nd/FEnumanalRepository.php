<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEnumanal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEnumanal>
 *
 * @method FEnumanal|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEnumanal|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEnumanal[]    findAll()
 * @method FEnumanal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEnumanalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEnumanal::class);
    }

//    /**
//     * @return FEnumanal[] Returns an array of FEnumanal objects
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

//    public function findOneBySomeField($value): ?FEnumanal
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
