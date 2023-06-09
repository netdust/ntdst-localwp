<?php declare(strict_types=1);

namespace YOOtheme\GraphQL\Language\AST;

/**
 * export type DefinitionNode = OperationDefinitionNode
 *                        | FragmentDefinitionNode.
 */
interface HasSelectionSet
{
    public function getSelectionSet(): SelectionSetNode;
}
