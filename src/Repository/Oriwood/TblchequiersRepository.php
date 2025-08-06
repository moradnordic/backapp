<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblchequiers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblchequiers>
 *
 * @method Tblchequiers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblchequiers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblchequiers[]    findAll()
 * @method Tblchequiers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchequiersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblchequiers::class);
    }

//    /**
//     * @return Tblchequiers[] Returns an array of Tblchequiers objects
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

//    public function findOneBySomeField($value): ?Tblchequiers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
