<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCatalogue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCatalogue>
 *
 * @method FCatalogue|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCatalogue|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCatalogue[]    findAll()
 * @method FCatalogue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCatalogueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCatalogue::class);
    }

//    /**
//     * @return FCatalogue[] Returns an array of FCatalogue objects
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

//    public function findOneBySomeField($value): ?FCatalogue
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
