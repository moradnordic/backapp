<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\AaaSaDefDoDomaine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AaaSaDefDoDomaine>
 *
 * @method AaaSaDefDoDomaine|null find($id, $lockMode = null, $lockVersion = null)
 * @method AaaSaDefDoDomaine|null findOneBy(array $criteria, array $orderBy = null)
 * @method AaaSaDefDoDomaine[]    findAll()
 * @method AaaSaDefDoDomaine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AaaSaDefDoDomaineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AaaSaDefDoDomaine::class);
    }

//    /**
//     * @return AaaSaDefDoDomaine[] Returns an array of AaaSaDefDoDomaine objects
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

//    public function findOneBySomeField($value): ?AaaSaDefDoDomaine
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
