<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PAvancement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAvancement>
 *
 * @method PAvancement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAvancement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAvancement[]    findAll()
 * @method PAvancement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAvancementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAvancement::class);
    }

//    /**
//     * @return PAvancement[] Returns an array of PAvancement objects
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

//    public function findOneBySomeField($value): ?PAvancement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
