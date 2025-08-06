<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FNomenclat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FNomenclat>
 *
 * @method FNomenclat|null find($id, $lockMode = null, $lockVersion = null)
 * @method FNomenclat|null findOneBy(array $criteria, array $orderBy = null)
 * @method FNomenclat[]    findAll()
 * @method FNomenclat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FNomenclatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FNomenclat::class);
    }

//    /**
//     * @return FNomenclat[] Returns an array of FNomenclat objects
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

//    public function findOneBySomeField($value): ?FNomenclat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
