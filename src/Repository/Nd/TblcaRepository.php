<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblca;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblca>
 *
 * @method Tblca|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblca|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblca[]    findAll()
 * @method Tblca[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblcaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblca::class);
    }

//    /**
//     * @return Tblca[] Returns an array of Tblca objects
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

//    public function findOneBySomeField($value): ?Tblca
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
