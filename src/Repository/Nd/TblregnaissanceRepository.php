<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblregnaissance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblregnaissance>
 *
 * @method Tblregnaissance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblregnaissance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblregnaissance[]    findAll()
 * @method Tblregnaissance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblregnaissanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblregnaissance::class);
    }

//    /**
//     * @return Tblregnaissance[] Returns an array of Tblregnaissance objects
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

//    public function findOneBySomeField($value): ?Tblregnaissance
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
