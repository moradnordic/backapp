<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TblcaisseListtables;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblcaisseListtables>
 *
 * @method TblcaisseListtables|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblcaisseListtables|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblcaisseListtables[]    findAll()
 * @method TblcaisseListtables[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblcaisseListtablesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblcaisseListtables::class);
    }

//    /**
//     * @return TblcaisseListtables[] Returns an array of TblcaisseListtables objects
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

//    public function findOneBySomeField($value): ?TblcaisseListtables
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
