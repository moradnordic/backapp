<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FAboligneinfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAboligneinfos>
 *
 * @method FAboligneinfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAboligneinfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAboligneinfos[]    findAll()
 * @method FAboligneinfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAboligneinfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAboligneinfos::class);
    }

//    /**
//     * @return FAboligneinfos[] Returns an array of FAboligneinfos objects
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

//    public function findOneBySomeField($value): ?FAboligneinfos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
