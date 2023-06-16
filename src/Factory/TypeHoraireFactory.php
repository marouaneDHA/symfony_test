<?php

namespace App\Factory;

use App\Entity\TypeHoraire;
use App\Repository\TypeHoraireRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<TypeHoraire>
 *
 * @method        TypeHoraire|Proxy create(array|callable $attributes = [])
 * @method static TypeHoraire|Proxy createOne(array $attributes = [])
 * @method static TypeHoraire|Proxy find(object|array|mixed $criteria)
 * @method static TypeHoraire|Proxy findOrCreate(array $attributes)
 * @method static TypeHoraire|Proxy first(string $sortedField = 'id')
 * @method static TypeHoraire|Proxy last(string $sortedField = 'id')
 * @method static TypeHoraire|Proxy random(array $attributes = [])
 * @method static TypeHoraire|Proxy randomOrCreate(array $attributes = [])
 * @method static TypeHoraireRepository|RepositoryProxy repository()
 * @method static TypeHoraire[]|Proxy[] all()
 * @method static TypeHoraire[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static TypeHoraire[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static TypeHoraire[]|Proxy[] findBy(array $attributes)
 * @method static TypeHoraire[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static TypeHoraire[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class TypeHoraireFactory extends ModelFactory
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
            'nom' => self::faker()->text(20),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(TypeHoraire $typeHoraire): void {})
        ;
    }

    protected static function getClass(): string
    {
        return TypeHoraire::class;
    }
}
