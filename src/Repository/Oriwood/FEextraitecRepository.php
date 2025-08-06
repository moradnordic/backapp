<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEextraitec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEextraitec>
 *
 * @method FEextraitec|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEextraitec|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEextraitec[]    findAll()
 * @method FEextraitec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEextraitecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEextraitec::class);
    }

//    /**
//     * @return FEextraitec[] Returns an array of FEextraitec objects
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

//    public function findOneBySomeField($value): ?FEextraitec
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
