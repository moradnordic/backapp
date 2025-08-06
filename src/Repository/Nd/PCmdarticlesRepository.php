<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PCmdarticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCmdarticles>
 *
 * @method PCmdarticles|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCmdarticles|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCmdarticles[]    findAll()
 * @method PCmdarticles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCmdarticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCmdarticles::class);
    }

//    /**
//     * @return PCmdarticles[] Returns an array of PCmdarticles objects
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

//    public function findOneBySomeField($value): ?PCmdarticles
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
