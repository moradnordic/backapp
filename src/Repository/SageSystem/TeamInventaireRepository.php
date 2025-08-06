<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\TeamInventaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TeamInventaire>
 *
 * @method TeamInventaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamInventaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamInventaire[]    findAll()
 * @method TeamInventaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamInventaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamInventaire::class);
    }

//    /**
//     * @return TeamInventaire[] Returns an array of TeamInventaire objects
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

//    public function findOneBySomeField($value): ?TeamInventaire
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
