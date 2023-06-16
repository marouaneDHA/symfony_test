<?php

namespace App\Factory;

use App\Entity\Horaire;
use App\Repository\HoraireRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Horaire>
 *
 * @method        Horaire|Proxy create(array|callable $attributes = [])
 * @method static Horaire|Proxy createOne(array $attributes = [])
 * @method static Horaire|Proxy find(object|array|mixed $criteria)
 * @method static Horaire|Proxy findOrCreate(array $attributes)
 * @method static Horaire|Proxy first(string $sortedField = 'id')
 * @method static Horaire|Proxy last(string $sortedField = 'id')
 * @method static Horaire|Proxy random(array $attributes = [])
 * @method static Horaire|Proxy randomOrCreate(array $attributes = [])
 * @method static HoraireRepository|RepositoryProxy repository()
 * @method static Horaire[]|Proxy[] all()
 * @method static Horaire[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Horaire[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Horaire[]|Proxy[] findBy(array $attributes)
 * @method static Horaire[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Horaire[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class HoraireFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'dateCreation' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'dateDebut' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'dateFin' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'commentaire' => self::faker()->text(255),
            'nom' => self::faker()->text(50),
            'priorite' => self::faker()->numberBetween(0, 2),
            'typeHoraire' => TypeHoraireFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Horaire $horaire): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Horaire::class;
    }
}
