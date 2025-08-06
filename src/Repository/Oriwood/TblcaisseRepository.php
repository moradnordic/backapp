<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblcaisse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblcaisse>
 *
 * @method Tblcaisse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblcaisse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblcaisse[]    findAll()
 * @method Tblcaisse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblcaisseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblcaisse::class);
    }

//    /**
//     * @return Tblcaisse[] Returns an array of Tblcaisse objects
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

//    public function findOneBySomeField($value): ?Tblcaisse
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
