<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PContremarquecom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PContremarquecom>
 *
 * @method PContremarquecom|null find($id, $lockMode = null, $lockVersion = null)
 * @method PContremarquecom|null findOneBy(array $criteria, array $orderBy = null)
 * @method PContremarquecom[]    findAll()
 * @method PContremarquecom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PContremarquecomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PContremarquecom::class);
    }

//    /**
//     * @return PContremarquecom[] Returns an array of PContremarquecom objects
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

//    public function findOneBySomeField($value): ?PContremarquecom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
