<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PLettrage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PLettrage>
 *
 * @method PLettrage|null find($id, $lockMode = null, $lockVersion = null)
 * @method PLettrage|null findOneBy(array $criteria, array $orderBy = null)
 * @method PLettrage[]    findAll()
 * @method PLettrage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PLettrageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PLettrage::class);
    }

//    /**
//     * @return PLettrage[] Returns an array of PLettrage objects
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

//    public function findOneBySomeField($value): ?PLettrage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
