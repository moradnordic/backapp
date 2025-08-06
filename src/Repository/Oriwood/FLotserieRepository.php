<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FLotserie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FLotserie>
 *
 * @method FLotserie|null find($id, $lockMode = null, $lockVersion = null)
 * @method FLotserie|null findOneBy(array $criteria, array $orderBy = null)
 * @method FLotserie[]    findAll()
 * @method FLotserie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FLotserieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FLotserie::class);
    }

//    /**
//     * @return FLotserie[] Returns an array of FLotserie objects
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

//    public function findOneBySomeField($value): ?FLotserie
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
