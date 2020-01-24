<?php

namespace App\GraphQL\Mutations;

use App\Services\GraduateSchoolEssayRedraftService;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class GraduateSchoolEssayRedraft
{
    /**
     * @var GraduateSchoolEssayRedraftService
     */
    private $graduate_school_essay_redraft_service;

    /**
     * GraduateSchoolEssayRedraft constructor.
     * @param GraduateSchoolEssayRedraftService $graduate_school_essay_redraft_service
     */
    public function __construct(GraduateSchoolEssayRedraftService $graduate_school_essay_redraft_service)
    {
        $this->graduate_school_essay_redraft_service = $graduate_school_essay_redraft_service;
    }

    /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */
    public function resolve($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        // TODO implement the resolver
        return $this->graduate_school_essay_redraft_service->create($args);
    }


    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return mixed
     */
    public function decline_assign($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        // TODO implement the resolver
        return $this->graduate_school_essay_redraft_service->decline_assign($args);

    }

    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return mixed
     */
    public function approve_assign($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        // TODO implement the resolver
        return $this->graduate_school_essay_redraft_service->approve_assign($args);

    }

    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return mixed
     */
    public function assign_self($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        // TODO implement the resolver
        return $this->graduate_school_essay_redraft_service->assign_self($args);

    }
}