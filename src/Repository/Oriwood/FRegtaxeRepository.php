<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FRegtaxe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FRegtaxe>
 *
 * @method FRegtaxe|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRegtaxe|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRegtaxe[]    findAll()
 * @method FRegtaxe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRegtaxeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRegtaxe::class);
    }

//    /**
//     * @return FRegtaxe[] Returns an array of FRegtaxe objects
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

//    public function findOneBySomeField($value): ?FRegtaxe
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
