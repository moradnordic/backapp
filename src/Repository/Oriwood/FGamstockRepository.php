<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FGamstock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FGamstock>
 *
 * @method FGamstock|null find($id, $lockMode = null, $lockVersion = null)
 * @method FGamstock|null findOneBy(array $criteria, array $orderBy = null)
 * @method FGamstock[]    findAll()
 * @method FGamstock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FGamstockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FGamstock::class);
    }

//    /**
//     * @return FGamstock[] Returns an array of FGamstock objects
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

//    public function findOneBySomeField($value): ?FGamstock
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
