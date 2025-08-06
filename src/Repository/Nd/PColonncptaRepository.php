<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PColonncpta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PColonncpta>
 *
 * @method PColonncpta|null find($id, $lockMode = null, $lockVersion = null)
 * @method PColonncpta|null findOneBy(array $criteria, array $orderBy = null)
 * @method PColonncpta[]    findAll()
 * @method PColonncpta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PColonncptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PColonncpta::class);
    }

//    /**
//     * @return PColonncpta[] Returns an array of PColonncpta objects
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

//    public function findOneBySomeField($value): ?PColonncpta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
