<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEtableau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEtableau>
 *
 * @method FEtableau|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEtableau|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEtableau[]    findAll()
 * @method FEtableau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEtableauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEtableau::class);
    }

//    /**
//     * @return FEtableau[] Returns an array of FEtableau objects
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

//    public function findOneBySomeField($value): ?FEtableau
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
