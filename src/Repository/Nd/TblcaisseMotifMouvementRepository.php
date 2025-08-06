<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TblcaisseMotifMouvement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblcaisseMotifMouvement>
 *
 * @method TblcaisseMotifMouvement|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblcaisseMotifMouvement|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblcaisseMotifMouvement[]    findAll()
 * @method TblcaisseMotifMouvement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblcaisseMotifMouvementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblcaisseMotifMouvement::class);
    }

//    /**
//     * @return TblcaisseMotifMouvement[] Returns an array of TblcaisseMotifMouvement objects
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

//    public function findOneBySomeField($value): ?TblcaisseMotifMouvement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
