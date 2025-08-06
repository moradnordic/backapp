<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblnobanquesderemise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblnobanquesderemise>
 *
 * @method Tblnobanquesderemise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblnobanquesderemise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblnobanquesderemise[]    findAll()
 * @method Tblnobanquesderemise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblnobanquesderemiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblnobanquesderemise::class);
    }

//    /**
//     * @return Tblnobanquesderemise[] Returns an array of Tblnobanquesderemise objects
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

//    public function findOneBySomeField($value): ?Tblnobanquesderemise
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
