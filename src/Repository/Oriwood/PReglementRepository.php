<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PReglement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PReglement>
 *
 * @method PReglement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PReglement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PReglement[]    findAll()
 * @method PReglement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PReglementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PReglement::class);
    }

//    /**
//     * @return PReglement[] Returns an array of PReglement objects
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

//    public function findOneBySomeField($value): ?PReglement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
