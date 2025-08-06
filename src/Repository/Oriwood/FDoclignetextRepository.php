<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDoclignetext;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDoclignetext>
 *
 * @method FDoclignetext|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDoclignetext|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDoclignetext[]    findAll()
 * @method FDoclignetext[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDoclignetextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDoclignetext::class);
    }

//    /**
//     * @return FDoclignetext[] Returns an array of FDoclignetext objects
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

//    public function findOneBySomeField($value): ?FDoclignetext
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
