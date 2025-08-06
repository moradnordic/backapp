<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\AaaAzReferenceLot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AaaAzReferenceLot>
 *
 * @method AaaAzReferenceLot|null find($id, $lockMode = null, $lockVersion = null)
 * @method AaaAzReferenceLot|null findOneBy(array $criteria, array $orderBy = null)
 * @method AaaAzReferenceLot[]    findAll()
 * @method AaaAzReferenceLot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AaaAzReferenceLotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AaaAzReferenceLot::class);
    }

//    /**
//     * @return AaaAzReferenceLot[] Returns an array of AaaAzReferenceLot objects
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

//    public function findOneBySomeField($value): ?AaaAzReferenceLot
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
