<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FAfficheur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAfficheur>
 *
 * @method FAfficheur|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAfficheur|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAfficheur[]    findAll()
 * @method FAfficheur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAfficheurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAfficheur::class);
    }

//    /**
//     * @return FAfficheur[] Returns an array of FAfficheur objects
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

//    public function findOneBySomeField($value): ?FAfficheur
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
