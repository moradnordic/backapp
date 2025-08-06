<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PLibellecpta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PLibellecpta>
 *
 * @method PLibellecpta|null find($id, $lockMode = null, $lockVersion = null)
 * @method PLibellecpta|null findOneBy(array $criteria, array $orderBy = null)
 * @method PLibellecpta[]    findAll()
 * @method PLibellecpta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PLibellecptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PLibellecpta::class);
    }

//    /**
//     * @return PLibellecpta[] Returns an array of PLibellecpta objects
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

//    public function findOneBySomeField($value): ?PLibellecpta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
