<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblnosbanquesContactpersons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblnosbanquesContactpersons>
 *
 * @method TblnosbanquesContactpersons|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblnosbanquesContactpersons|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblnosbanquesContactpersons[]    findAll()
 * @method TblnosbanquesContactpersons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblnosbanquesContactpersonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblnosbanquesContactpersons::class);
    }

//    /**
//     * @return TblnosbanquesContactpersons[] Returns an array of TblnosbanquesContactpersons objects
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

//    public function findOneBySomeField($value): ?TblnosbanquesContactpersons
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
