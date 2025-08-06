<?php

namespace App\Repository\Nd;

use App\Entity\Nd\LrMotif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrMotif>
 *
 * @method LrMotif|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrMotif|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrMotif[]    findAll()
 * @method LrMotif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrMotifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrMotif::class);
    }

//    /**
//     * @return LrMotif[] Returns an array of LrMotif objects
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

//    public function findOneBySomeField($value): ?LrMotif
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
