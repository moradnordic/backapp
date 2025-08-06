<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCommplanifie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCommplanifie>
 *
 * @method FCommplanifie|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCommplanifie|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCommplanifie[]    findAll()
 * @method FCommplanifie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCommplanifieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCommplanifie::class);
    }

//    /**
//     * @return FCommplanifie[] Returns an array of FCommplanifie objects
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

//    public function findOneBySomeField($value): ?FCommplanifie
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
