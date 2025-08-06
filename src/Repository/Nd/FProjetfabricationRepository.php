<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FProjetfabrication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FProjetfabrication>
 *
 * @method FProjetfabrication|null find($id, $lockMode = null, $lockVersion = null)
 * @method FProjetfabrication|null findOneBy(array $criteria, array $orderBy = null)
 * @method FProjetfabrication[]    findAll()
 * @method FProjetfabrication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FProjetfabricationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FProjetfabrication::class);
    }

//    /**
//     * @return FProjetfabrication[] Returns an array of FProjetfabrication objects
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

//    public function findOneBySomeField($value): ?FProjetfabrication
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
