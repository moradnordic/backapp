<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PScdreglement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PScdreglement>
 *
 * @method PScdreglement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PScdreglement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PScdreglement[]    findAll()
 * @method PScdreglement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PScdreglementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PScdreglement::class);
    }

//    /**
//     * @return PScdreglement[] Returns an array of PScdreglement objects
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

//    public function findOneBySomeField($value): ?PScdreglement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
