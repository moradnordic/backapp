<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\POrgaart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<POrgaart>
 *
 * @method POrgaart|null find($id, $lockMode = null, $lockVersion = null)
 * @method POrgaart|null findOneBy(array $criteria, array $orderBy = null)
 * @method POrgaart[]    findAll()
 * @method POrgaart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class POrgaartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, POrgaart::class);
    }

//    /**
//     * @return POrgaart[] Returns an array of POrgaart objects
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

//    public function findOneBySomeField($value): ?POrgaart
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
