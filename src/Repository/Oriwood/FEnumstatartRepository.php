<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEnumstatart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEnumstatart>
 *
 * @method FEnumstatart|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEnumstatart|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEnumstatart[]    findAll()
 * @method FEnumstatart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEnumstatartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEnumstatart::class);
    }

//    /**
//     * @return FEnumstatart[] Returns an array of FEnumstatart objects
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

//    public function findOneBySomeField($value): ?FEnumstatart
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
