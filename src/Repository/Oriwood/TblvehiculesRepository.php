<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblvehicules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblvehicules>
 *
 * @method Tblvehicules|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblvehicules|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblvehicules[]    findAll()
 * @method Tblvehicules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblvehiculesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblvehicules::class);
    }

//    /**
//     * @return Tblvehicules[] Returns an array of Tblvehicules objects
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

//    public function findOneBySomeField($value): ?Tblvehicules
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
