<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FInterbancaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FInterbancaire>
 *
 * @method FInterbancaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method FInterbancaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method FInterbancaire[]    findAll()
 * @method FInterbancaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FInterbancaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FInterbancaire::class);
    }

//    /**
//     * @return FInterbancaire[] Returns an array of FInterbancaire objects
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

//    public function findOneBySomeField($value): ?FInterbancaire
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
