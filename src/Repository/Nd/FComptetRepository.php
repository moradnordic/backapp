<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FComptet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptet>
 *
 * @method FComptet|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptet|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptet[]    findAll()
 * @method FComptet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptet::class);
    }

//    /**
//     * @return FComptet[] Returns an array of FComptet objects
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

//    public function findOneBySomeField($value): ?FComptet
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
