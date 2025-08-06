<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FDepotcontact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDepotcontact>
 *
 * @method FDepotcontact|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDepotcontact|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDepotcontact[]    findAll()
 * @method FDepotcontact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDepotcontactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDepotcontact::class);
    }

//    /**
//     * @return FDepotcontact[] Returns an array of FDepotcontact objects
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

//    public function findOneBySomeField($value): ?FDepotcontact
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
