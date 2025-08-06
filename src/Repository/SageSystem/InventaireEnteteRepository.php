<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\InventaireEntete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InventaireEntete>
 *
 * @method InventaireEntete|null find($id, $lockMode = null, $lockVersion = null)
 * @method InventaireEntete|null findOneBy(array $criteria, array $orderBy = null)
 * @method InventaireEntete[]    findAll()
 * @method InventaireEntete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InventaireEnteteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InventaireEntete::class);
    }

//    /**
//     * @return InventaireEntete[] Returns an array of InventaireEntete objects
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

//    public function findOneBySomeField($value): ?InventaireEntete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
