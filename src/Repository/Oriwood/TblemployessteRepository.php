<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblemployesste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblemployesste>
 *
 * @method Tblemployesste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblemployesste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblemployesste[]    findAll()
 * @method Tblemployesste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblemployessteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblemployesste::class);
    }

//    /**
//     * @return Tblemployesste[] Returns an array of Tblemployesste objects
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

//    public function findOneBySomeField($value): ?Tblemployesste
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
