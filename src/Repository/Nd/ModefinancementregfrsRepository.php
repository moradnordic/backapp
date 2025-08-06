<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Modefinancementregfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Modefinancementregfrs>
 *
 * @method Modefinancementregfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modefinancementregfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modefinancementregfrs[]    findAll()
 * @method Modefinancementregfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModefinancementregfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Modefinancementregfrs::class);
    }

//    /**
//     * @return Modefinancementregfrs[] Returns an array of Modefinancementregfrs objects
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

//    public function findOneBySomeField($value): ?Modefinancementregfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
