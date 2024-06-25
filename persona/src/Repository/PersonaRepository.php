<?php

namespace App\Repository;

use App\Entity\Persona;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Persona>
 */
class PersonaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Persona::class);
    }

    public function findRandom(): ?Persona
    {
        $connection = $this->getEntityManager()->getConnection();
        $table = $this->getClassMetadata()->getTableName();

        $sql = 'SELECT * FROM ' . $table . ' ORDER BY RANDOM() LIMIT 1';

        $stmt = $connection->prepare($sql);
        $result = $stmt->executeQuery()->fetchAssociative();

        if ($result) {
            return $this->getEntityManager()->getRepository(Persona::class)->find($result['id']);
        }

        return null;
    }
}
