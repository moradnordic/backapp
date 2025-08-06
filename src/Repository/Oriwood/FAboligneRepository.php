<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FAboligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAboligne>
 *
 * @method FAboligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAboligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAboligne[]    findAll()
 * @method FAboligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAboligneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAboligne::class);
    }

//    /**
//     * @return FAboligne[] Returns an array of FAboligne objects
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

//    public function findOneBySomeField($value): ?FAboligne
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
