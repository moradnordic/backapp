<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEtaxe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEtaxe>
 *
 * @method FEtaxe|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEtaxe|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEtaxe[]    findAll()
 * @method FEtaxe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEtaxeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEtaxe::class);
    }

//    /**
//     * @return FEtaxe[] Returns an array of FEtaxe objects
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

//    public function findOneBySomeField($value): ?FEtaxe
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
