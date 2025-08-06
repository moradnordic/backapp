<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEnumgamme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEnumgamme>
 *
 * @method FEnumgamme|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEnumgamme|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEnumgamme[]    findAll()
 * @method FEnumgamme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEnumgammeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEnumgamme::class);
    }

//    /**
//     * @return FEnumgamme[] Returns an array of FEnumgamme objects
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

//    public function findOneBySomeField($value): ?FEnumgamme
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
