<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PAffaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAffaire>
 *
 * @method PAffaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAffaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAffaire[]    findAll()
 * @method PAffaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAffaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAffaire::class);
    }

//    /**
//     * @return PAffaire[] Returns an array of PAffaire objects
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

//    public function findOneBySomeField($value): ?PAffaire
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
