<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\AaaSaTypetiers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AaaSaTypetiers>
 *
 * @method AaaSaTypetiers|null find($id, $lockMode = null, $lockVersion = null)
 * @method AaaSaTypetiers|null findOneBy(array $criteria, array $orderBy = null)
 * @method AaaSaTypetiers[]    findAll()
 * @method AaaSaTypetiers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AaaSaTypetiersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AaaSaTypetiers::class);
    }

//    /**
//     * @return AaaSaTypetiers[] Returns an array of AaaSaTypetiers objects
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

//    public function findOneBySomeField($value): ?AaaSaTypetiers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
