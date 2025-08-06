<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FResscentre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FResscentre>
 *
 * @method FResscentre|null find($id, $lockMode = null, $lockVersion = null)
 * @method FResscentre|null findOneBy(array $criteria, array $orderBy = null)
 * @method FResscentre[]    findAll()
 * @method FResscentre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FResscentreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FResscentre::class);
    }

//    /**
//     * @return FResscentre[] Returns an array of FResscentre objects
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

//    public function findOneBySomeField($value): ?FResscentre
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
