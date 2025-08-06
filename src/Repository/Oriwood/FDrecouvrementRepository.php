<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDrecouvrement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDrecouvrement>
 *
 * @method FDrecouvrement|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDrecouvrement|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDrecouvrement[]    findAll()
 * @method FDrecouvrement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDrecouvrementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDrecouvrement::class);
    }

//    /**
//     * @return FDrecouvrement[] Returns an array of FDrecouvrement objects
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

//    public function findOneBySomeField($value): ?FDrecouvrement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
