<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FGlossaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FGlossaire>
 *
 * @method FGlossaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method FGlossaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method FGlossaire[]    findAll()
 * @method FGlossaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FGlossaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FGlossaire::class);
    }

//    /**
//     * @return FGlossaire[] Returns an array of FGlossaire objects
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

//    public function findOneBySomeField($value): ?FGlossaire
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
