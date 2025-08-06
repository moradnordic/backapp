<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblcaisseUsersCaisse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblcaisseUsersCaisse>
 *
 * @method TblcaisseUsersCaisse|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblcaisseUsersCaisse|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblcaisseUsersCaisse[]    findAll()
 * @method TblcaisseUsersCaisse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblcaisseUsersCaisseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblcaisseUsersCaisse::class);
    }

//    /**
//     * @return TblcaisseUsersCaisse[] Returns an array of TblcaisseUsersCaisse objects
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

//    public function findOneBySomeField($value): ?TblcaisseUsersCaisse
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
