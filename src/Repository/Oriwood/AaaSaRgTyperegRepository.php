<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\AaaSaRgTypereg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AaaSaRgTypereg>
 *
 * @method AaaSaRgTypereg|null find($id, $lockMode = null, $lockVersion = null)
 * @method AaaSaRgTypereg|null findOneBy(array $criteria, array $orderBy = null)
 * @method AaaSaRgTypereg[]    findAll()
 * @method AaaSaRgTypereg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AaaSaRgTyperegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AaaSaRgTypereg::class);
    }

//    /**
//     * @return AaaSaRgTypereg[] Returns an array of AaaSaRgTypereg objects
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

//    public function findOneBySomeField($value): ?AaaSaRgTypereg
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
