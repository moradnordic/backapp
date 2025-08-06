<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblvilles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblvilles>
 *
 * @method Tblvilles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblvilles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblvilles[]    findAll()
 * @method Tblvilles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblvillesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblvilles::class);
    }

//    /**
//     * @return Tblvilles[] Returns an array of Tblvilles objects
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

//    public function findOneBySomeField($value): ?Tblvilles
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
