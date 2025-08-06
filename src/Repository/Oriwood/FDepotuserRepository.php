<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDepotuser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDepotuser>
 *
 * @method FDepotuser|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDepotuser|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDepotuser[]    findAll()
 * @method FDepotuser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDepotuserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDepotuser::class);
    }

//    /**
//     * @return FDepotuser[] Returns an array of FDepotuser objects
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

//    public function findOneBySomeField($value): ?FDepotuser
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
