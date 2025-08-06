<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PValidplglobale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PValidplglobale>
 *
 * @method PValidplglobale|null find($id, $lockMode = null, $lockVersion = null)
 * @method PValidplglobale|null findOneBy(array $criteria, array $orderBy = null)
 * @method PValidplglobale[]    findAll()
 * @method PValidplglobale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PValidplglobaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PValidplglobale::class);
    }

//    /**
//     * @return PValidplglobale[] Returns an array of PValidplglobale objects
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

//    public function findOneBySomeField($value): ?PValidplglobale
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
