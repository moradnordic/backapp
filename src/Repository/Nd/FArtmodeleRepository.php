<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FArtmodele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtmodele>
 *
 * @method FArtmodele|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtmodele|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtmodele[]    findAll()
 * @method FArtmodele[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtmodeleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtmodele::class);
    }

//    /**
//     * @return FArtmodele[] Returns an array of FArtmodele objects
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

//    public function findOneBySomeField($value): ?FArtmodele
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
