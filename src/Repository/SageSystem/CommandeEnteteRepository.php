<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\CommandeEntete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeEntete>
 *
 * @method CommandeEntete|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeEntete|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeEntete[]    findAll()
 * @method CommandeEntete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeEnteteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeEntete::class);
    }

//    /**
//     * @return CommandeEntete[] Returns an array of CommandeEntete objects
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

//    public function findOneBySomeField($value): ?CommandeEntete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
