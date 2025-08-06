<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FComptega;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptega>
 *
 * @method FComptega|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptega|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptega[]    findAll()
 * @method FComptega[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptegaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptega::class);
    }

//    /**
//     * @return FComptega[] Returns an array of FComptega objects
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

//    public function findOneBySomeField($value): ?FComptega
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
