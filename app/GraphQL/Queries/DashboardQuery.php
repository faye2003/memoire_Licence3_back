<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class DashboardQuery extends Query
{
    protected $attributes = [
        'name' => 'dashboards',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQl::type('Dashboard'));
    }

    public function args(): array
    {
        return [
            'nombre_eleves'                 => ['type' => Type::int()],
            'nombre_profs'                  => ['type' => Type::int()],
            'nombre_disciplines'            => ['type' => Type::int()],
            'nombre_cours'                  => ['type' => Type::int()],
            'meilleur_eleves'               => ['type' => Type::string()],
            'taux_reussite'                 => ['type' => Type::float()],
            'surveillants'                  => ['type' => Type::string()],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        if ($args['nombre_eleves']) {
            
        }
    }
}
